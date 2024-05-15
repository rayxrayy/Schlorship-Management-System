<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected student</title>
    <style>
    body {
        font-family: sans-serif;
        background-color: #f5f5f5;
        font-size: 14px;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 2cm;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        justify-content: center;
        border-bottom: 2px solid #ccc;
        padding-bottom: 20px;
    }

    .profile img {
        width: 150px;
        height: auto;
        margin-right: 20px;
        border-radius: 10%;
    }

    .profile .profile-details {
        margin: 0 auto;
        /* Push to the right side */
        text-align: center;
        /* Center align text */
    }

    .profile-details {
        margin-left: auto;
    }

    p {
        margin: 5px 0;
    }

    .section {
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .section-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
        border-bottom: 2px solid #0000008a;
        padding-bottom: 20px;
    }

    .education {
        display: flex;
        flex-direction: column;
        padding-bottom: 20px;
    }

    .education .running {
        margin-right: 20px;
    }

    .education span {
        white-space: nowrap;
        /* Prevent line breaks */
    }

    .edu-course {
        padding-left: 25%;
    }

    .edu-college {
        padding-left: 34.5%;
    }

    .button {
        padding-top: 20px;
    }

    .fill-button {
        padding: 12px 25px;
        background-color: #595bd4 !important;
        text-decoration: none;
        color: #ffffff;
        border-radius: 5px;
        height: fit-content;
    }

    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
        /* Could be more or less, depending on screen size */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    /* Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="container">

        <button style="font-size:28px; background:white; border-color:white;"
            onclick="window.history.back()">&times;</button>

        <div class="profile">
            <img src="{{ asset('storage/'.$selectedstudents->profile_image) }}" alt="Student Image">
            <div class="profile-details">
                <h2>{{ $selectedstudents->fullname }}</h2>
                <p>Address: {{ $selectedstudents->address }}</p>
                <p>Email: {{ $selectedstudents->email }}</p>
                <p>Phone number: {{ $selectedstudents->number }}</p>
                <p>Date of Birth: {{ $selectedstudents->dob }}</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Description</h2>
            <p>I am applying for the {{ $selectedstudents->course }} course which is offered by
                {{ $selectedstudents->college }}
            </p>
            <p>{{ $selectedstudents->description }}</p>
        </div>

        <div class="section">
            <h2 class="section-title">Education</h2>
            <p class="education">
                <span class="running"> Running: <span class="edu-course">{{ $selectedstudents->major }}</span>
                </span>


                <span class="edu-college">{{ $selectedstudents->currentedu }}</span>
                <span class="edu-college">GPA: {{ $selectedstudents->result }}</span>
            </p>
            <p class="education">
                <span class="running"> Passed: <span class="edu-course"> {{ $selectedstudents->major }}
                    </span> </span>
                <span class="edu-college">{{ $selectedstudents->currentedu }}</span>
                <span class="edu-college">GPA: {{ $selectedstudents->result }}</span>
            </p>
        </div>

        <div class="section">
            <h2 class="section-title">Personal Information</h2>
            <p>Gender: {{ $selectedstudents->gender }}</p>
            <p>Current Address: {{ $selectedstudents->address }}</p>
            <p>Parent's Name: {{ $selectedstudents->pname }}</p>
            <p>Parent's Number: {{ $selectedstudents->pnumber }}</p>

        </div>

        <div class="section">
            <h2 class="section-title">Documents</h2>
            <p><a href="{{ asset('storage/'.$selectedstudents->document_citizenship) }}" target="_blank">Copy of
                    citizenship</a></p>
            <p><a href="{{ asset('storage/'.$selectedstudents->document_transcript) }}" target="_blank">Copy of
                    Transcript</a></p>
            <p><a href="{{ asset('storage/'.$selectedstudents->document_sop) }}" target="_blank">Copy of Sop</a></p>
            <p><a href="{{ asset('storage/'.$selectedstudents->document) }}" target="_blank">Other document</a></p>
        </div>




        <h3>Make a desision !</h3>
        <p> if you want to select the student just click the approve button if not then click the cancel button.</p>

        <div class="button" style="
    display: flex;
    flex-direction: row;
    justify-content: space-between; 
    align-items: center;
">
            <form action="{{ route('approve-student', ['id' => $selectedstudents->id]) }}" method="POST">
                @csrf
                <x-button class="fill-button" onclick="approveStudent({{ $selectedstudents->id }})">Approve</x-button>
                </td>
            </form>
            <x-button class="fill-button" onclick="openModal()">Cancel</x-button>
            <x-button class="fill-button" onclick="window.print()">Print</x-button>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <form id="myForm" action="{{ route('submit.cancelform', ['id' => $selectedstudents->id]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="username" id="username" value="{{$selectedstudents->fullname}}">
                    <input type="hidden" name="collegename" id="collegename" value="{{$selectedstudents->college}}">
                    <input type="hidden" name="coursename" id="coursename" value="{{$selectedstudents->course}}">
                    <label for="message" style="color:red;">Message:</label>
                    <textarea id="message" name="conmment" rows="10" cols="50"></textarea>
                    <br>
                    <x-button type="submit">Submit</x-button>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
function approveStudent(studentId) {
    // Find the closest <tr> element containing the button and hide it
    var row = document.querySelector('button[data-selectedstudents-id="' + studentId + '"]').closest('tr');
    row.style.display = 'none';
}

function openModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}


function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
</script>

</html>