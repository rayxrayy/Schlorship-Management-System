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
    <p>Total Scholor student: {{$finalstudentcount}} </p>

    @if(isset($message))
    <p style="color:red;">{{ $message }}</p>
    @endif

    @foreach ($finalstudents as $student)
    <section id="section-course" class="ai-felpx;lowship--course bg-white">
        <article class="container-xxl py-5">
            <div class="row align-items-center px-lg-5 px-xxl-0">
                <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ asset('storage/'.$student->image) }}" class="img-fluid" alt="student image"
                        style="border-radius:30px;" />
                </div>

                <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-duration="500">
                    <div class="fs-3 fw-bold lh-sm">{{ $student->fullname }}
                    </div>

                    <p>{{ $studentEmails[$student->student_id] }}</p>

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
                        <h2>Raised:Rs.{{ $studentPayments[$student->id] ?? 0 }}</h2>

                    </div>
                    <form id="commentForm" action="{{ route('submit-comment') }}" method="POST">
                        @csrf
                        <div class="review-area" data-student-id="{{ $student->id }}">
                            <input type="hidden" name="student_name" value="{{ $student->fullname }}">
                            <textarea class="review-input" name="post" rows="1" cols="40"
                                placeholder="Add a comment..."></textarea>
                            <button class="post-button" style="display: none;" type="submit">Post</button>
                            <div class="comment-message" style="display: none;">Commented!</div>
                            <input type="hidden" name="username" value="{{ $user }}">
                            <input type="hidden" id="student_id" name="student_id" value="{{ $student->id }}">
                        </div>
                    </form>


                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <button class="btn fill-button payment-button" type="button"
                            data-student-id="{{ $student->id }}">Donate</button>

                        <form id="paymentForm">
                            <input type="hidden" id="student_id_{{ $student->id }}" name="student_id"
                                value="{{ $student->id }}">
                            <input type="hidden" id="student_name_{{ $student->id }}" name="student_name"
                                value="{{ $student->fullname }}">
                            <input type="hidden" id="username_{{ $student->id }}" name="username" value="{{ $user }}">
                        </form>

                    </div>

                </div>
        </article>
    </section>
    @endforeach

</x-app-layout>

<script>
// var studentId = $('#username').val();
// console.log("Student ID: ", studentId);
var paymentSuccessful = false;

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
            paymentSuccessful = true;

            var studentId = payload.product_identity;
            var studentName = document.querySelector(`#student_name_${studentId}`).value;
            var username = document.querySelector(`#username_${studentId}`).value;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            });

            $.ajax({
                method: 'post',
                url: "{{ route('store_payment') }}",
                data: {
                    student_id: studentId,
                    student_name: studentName,
                    username: username,
                },
                success: function(response) {
                    console.log('Payment data saved successfully');
                    localStorage.setItem('paymentSuccess', 'Payment successful!');
                    setTimeout(function() {
                        location.reload();
                    }); // Adjust the delay as needed
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        },
        onError(error) {
            console.log(error);
        },
        onClose() {
            console.log('widget is closing');
        }
    }
};
// Check if there is a payment success message in localStorage
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('paymentSuccess')) {
        var message = localStorage.getItem('paymentSuccess');
        var paymentButtons = document.querySelectorAll('.payment-button');
        paymentButtons.forEach(function(button) {
            var studentId = button.getAttribute('data-student-id');
            var messageElement = document.createElement('span');
            messageElement.style.color = 'red';
            messageElement.style.marginLeft = '20px';
            messageElement.innerText = message;
            button.parentNode.insertBefore(messageElement, button.nextSibling);
            setTimeout(function() {
                messageElement.remove();
            }, 1000);
        });
        // Clear the payment success message from localStorage
        localStorage.removeItem('paymentSuccess');
    }
});

var checkout = new KhaltiCheckout(config);
document.querySelectorAll('.payment-button').forEach(function(button) {
    button.addEventListener('click', function() {
        var studentId = this.getAttribute('data-student-id');
        checkout.show({
            amount: 1000, // Replace with the actual amount
            productIdentity: studentId // Use student's ID as productIdentity
        });
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const reviewInput = document.querySelector('.review-input');
    const postButtons = document.querySelectorAll('.post-button');
    const commentMessages = document.querySelectorAll('.comment-message');
    const reviewInputs = document.querySelectorAll('.review-input');

    reviewInputs.forEach(function(reviewInput, index) {
        reviewInput.addEventListener('input', function() {
            const postButton = this.nextElementSibling;
            if (reviewInput.value.trim() !== '') {
                postButton.style.display = 'inline-block';
            } else {
                postButton.style.display = 'none';
            }
        });
    });

    document.querySelectorAll('#commentForm').forEach(function(form, index) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Store the current scroll position
            const scrollPosition = window.scrollY;

            // Make Ajax request to submit comment
            const formData = new FormData(this);
            // let textareaValue = form.querySelector('.review-input').value;
            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        // Show comment message
                        commentMessages[index].style.display = 'block';
                        setTimeout(function() {
                            commentMessages[index].style.display =
                                'none';
                        }, 1000); // Hide the comment message after 5 seconds
                        // Optionally, clear the textarea
                        console.log("Textarea value:", reviewInputs[index]
                            .value);
                        reviewInputs[index].value = '';
                        // form.querySelector('.review-input').value = '';
                        postButtons[index].style.display = 'none';
                    } else {
                        throw new Error('Network response was not ok');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error if needed
                })
                .finally(() => {
                    // Scroll back to the previous position
                    window.scrollTo(0, scrollPosition);
                });
        });
    });
});
</script>