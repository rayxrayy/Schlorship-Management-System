<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
#post-button {
    color: blue;
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
                        <h2>Total fee: ${{ $student->fee }}</h2>
                        <h2>Raised:$200.21</h2>
                    </div>
                    <div id="review-area">
                        <textarea id="review-input" rows="1" cols="40" placeholder="Add a comment..."></textarea>
                    </div>
                    <div id="comment-message" style="display: none;">Commented!</div>

                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <button class="btn fill-button" id="payment-button">Donate</button>
                    </div>
                </div>
            </div>
        </article>
    </section>
    @endforeach
    <!-- <form id="paid-amount-form" style="display: none;">
        <input type="" name="paid_amount" id="paid_amount">
        
    </form> -->
</x-app-layout>
<script>
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

            if (payload.idx) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',
                    }
                });
                $.ajax({
                    method: 'post',
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

var checkout = new KhaltiCheckout(config);
var btn = document.getElementById("payment-button");
btn.onclick = function() {
    // minimum transaction amount must be 10, i.e 1000 in paisa.
    checkout.show({
        amount: 1000
    });
}

// var paidAmount;
// var form = document.getElementById("paid-amount-form");

// var onSuccess = function(payload) {
//     // Get the paid amount from the payload
//     paidAmount = payload.amount;

//     // Open the form with the paid amount
//     form.style.display = "block";
// };

// var onError = function(error) {
//     console.log(error);
// };

// var onClose = function() {
//     console.log('Widget is closing');
// };

// var eventHandler = {
//     onSuccess: onSuccess,
//     onError: onError,
//     onClose: onClose
// };

document.getElementById("review-input").addEventListener("input", function() {
    var textarea = document.getElementById("review-input");
    var postButton = document.getElementById("post-button");

    if (textarea.value.trim() !== "") {
        if (!postButton) {
            postButton = document.createElement("button");
            postButton.id = "post-button";
            postButton.textContent = "Post";
            postButton.addEventListener("click", function() {
                // Add functionality to post the comment here
                console.log("Posting comment: " + textarea.value.trim());
                // For demonstration purposes, this logs the comment to the console
                textarea.value = ""; // Clear the textarea after posting
                postButton.remove(); // Remove the button after posting
                document.getElementById("comment-message").style.display =
                    "block"; // Show the comment message
                setTimeout(function() {
                    document.getElementById("comment-message").style.display =
                        "none"; // Hide the comment message after 5 seconds
                }, 1000); // 5000 milliseconds = 5 seconds

            });
            document.getElementById("review-area").appendChild(postButton);
        }
    } else {
        if (postButton) {
            postButton.remove();
        }
    }
});
</script>