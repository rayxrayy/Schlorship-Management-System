<link rel="stylesheet" href="{{asset('cssfile/welcome.css')}}">
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<x-app-layout>

    <h1 style="font-weight:600">You can choose any student here to donate!</h1>
    <h2>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy
            to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>
    <section id="section-course" class="ai-felpx;lowship--course bg-white">
        <article class="container-xxl py-5">
            <div class="row align-items-center px-lg-5 px-xxl-0">
                <div class="col-lg-5 offset-lg-1 my-5 order-lg-1" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/images/s3.jpg" class="img-fluid" alt="Course Overview" />
                </div>

                <div class="col-lg-6 my-5 order-lg-0" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                    data-aos-duration="500">
                    <div class="fs-3 fw-bold lh-sm">Gayatri Banset
                    </div>
                    <p>np03cs4a210022@gmail.com</p>
                    <div class="fw-bold mt-4 lh-sm" id='description'> ''It is designed to help Students, colleges and
                        the
                        public to help
                        growing better future. For that what should a student have to do:''</div>
                    <hr>
                    <ul class="my-2 fill-tick">
                        <li class="mt-2">Have a good academic result.</li>

                    </ul>
                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <h2>Total fee: $500</h2>
                        <h2>Raised:$200.21</h2>
                    </div>

                    <div class="d-flex mt-5 gap-4 justify-content-center justify-content-lg-start">
                        <button class="btn fill-button" id="payment-button">Donate</button>
                        <a class="btn fill-button" role="button" id="" href="">Review</a>

                    </div>
                </div>
            </div>
        </article>
    </section>
    <div style="text-align: center; padding-top: 20px; font-size: 25px; color:red;"><a href=""> View All Students
            <!-- <x-button>View All Colleges</x-button>   -->
        </a>
    </div>
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
</script>