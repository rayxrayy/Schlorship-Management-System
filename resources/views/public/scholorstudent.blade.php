<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
.post-button {
    color: blue;
}

.comment-message {
    color: red;
}
</style>
<x-app-layout>

    <h1 style="font-size:41px;">You can choose any student here to donate!</h1>
    <h2 style='font-size:18px;'>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
            to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>
    @if(isset($message))
    <p style="color:red;">{{ $message }}</p>
    @endif
    @foreach ($finalstudents as $student)
    <section id="section-course" class="ai-felpx;lowship--course bg-white">
        <article class="container-xxl py-5">
            <div class="row align-items-center px-lg-5 px-xxl-0">
                <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('storage/'.$student->image) }}" class="img-fluid" alt="student image" />
                </div>

                <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-duration="500">
                    <div class="fs-3 fw-bold lh-sm">{{ $student->fullname }}
                    </div>

                    <p>np03cs4a210022@gmail.com</p>
                    <div class="fw-bold mt-4 lh-sm" id='description'> ''I am currently in the process of getting
                        enrollment in the <span>{{ $student->course }}</span> course offered by
                        <span>{{ $student->approved_by }}</span>.''
                    </div>
                    <hr>
                    <ul class="my-2 fill-tick">
                        <li class="mt-2">{{ $student->description }}</li>

                    </ul>
                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <h2>Total fee: Rs.{{ $student->fee }}</h2>
                        <h2>Raised:Rs.200.21</h2>
                    </div>
                    <form action="{{ route('submit-comment') }}" method='POST'>
                        @csrf
                        <div class="review-area" data-student-id="{{ $student->id }}">
                            <input type="hidden" name="student_name" value="{{ $student->fullname }}">
                            <textarea class="review-input" rows="1" cols="40" placeholder="Add a comment..."></textarea>
                            <button class="post-button" style="display: none;" type="submit">Post</button>
                            <div class="comment-message" style="display: none;">Commented!</div>
                            <input type="hidden" name="post" id="postinput">
                            <input type="hidden" name="username" value="{{$user}}">

                        </div>
                    </form>

                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <button class="btn fill-button payment-button" type="submit"
                            data-student-id="{{ $student->id }}">Donate</button>

                    </div>
                    <form action="" method="post">
                        <!-- <h1>You have sucessfully done payment.</h1> -->
                        <input type="hidden" name="student_name" value="{{ $student->fullname }}">
                        <input type="hidden" name="username" value="{{$user}}">
                    </form>
                </div>
            </div>
        </article>
    </section>
    @endforeach

</x-app-layout>
<script>
var amount = 0;
var config = {
    // replace the publicKey with yours
    "publicKey": "test_public_key_6db8a752c48745fdbfa77ac3a5051096",
    "productIdentity": "1234567890",
    "productName": "Edu-Hope",
    "productUrl": "http://127.0.0.1:8000/scholorstudent",
    "paymentPreference": [
        "KHALTI",
        "EBANKING",
        "MOBILE_BANKING",
        "CONNECT_IPS",
        "SCT",
    ],
    "eventHandler": {
        onSuccess(payload) {
            // hit merchant api for initiating verfication
            amount = payload.amount;
            if (payload.idx) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',
                    }
                });
                $.ajax({
                    method: 'get',
                    url: "{{route('ajax.khalti.verify_order')}}",
                    data: payload,

                    sucess: function(response) {
                        if (response.sucess == 1) {

                            window.location = response.redirecto;
                        } else {
                            checkout.hide();
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            }
        },
        onError(error) {
            console.log(error);
        },
        onClose() {
            console.log('widget is closing');
        }
    }
};
// function banayera ajax call garne
var checkout = new KhaltiCheckout(config);
document.querySelectorAll('.payment-button').forEach(function(button) {
    button.addEventListener('click', function() {
        var studentId = this.getAttribute('data-student-id');
        checkout.show({
            amount: 1000,
            productId: studentId // Use student's ID as productId
        });
    });
});


document.querySelectorAll('.review-input').forEach(function(textarea) {
    textarea.addEventListener('input', function() {
        var postButton = this.nextElementSibling;
        var commentMessage = postButton.nextElementSibling;

        if (this.value.trim() !== "") {
            if (!postButton) {
                postButton = document.createElement("button");
                postButton.classList.add("post-button");
                postButton.textContent = "Post";
                this.parentNode.appendChild(postButton); // Append the button to the parent
            }
            postButton.style.display = "block"; // Show the button
        } else {
            if (postButton) {
                postButton.style.display = "none"; // Hide the button if textarea is empty
            }
        }
    });
});

document.addEventListener('click', function(event) {
    if (event.target.classList.contains('post-button')) {
        var textarea = event.target.previousElementSibling; // Get the textarea element
        var commentMessage = event.target.nextElementSibling; // Get the comment message element
        var comment = textarea.value.trim();

        // Append the new comment to the existing value of the hidden input field
        var postInput = document.getElementById("postinput");
        postInput.value = comment;

        console.log("Posting comment: " + comment);
        textarea.value = ""; // Clear the textarea after posting
        event.target.style.display = "none"; // Hide the button after posting
        commentMessage.style.display = "block"; // Show the comment message
        setTimeout(function() {
            commentMessage.style.display = "none"; // Hide the comment message after 1 second
        }, 1000);
    }
});
</script>