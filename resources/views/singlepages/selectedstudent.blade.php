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
    </style>
</head>

<body>
    @foreach($selectedstudents as $student)
    <div class="container">
        <div class="profile">
            <img src="/images/student.jpg" alt="Student Image">
            <div class="profile-details">
                <h2>{{ $student->fullname }}</h2>
                <p>Address: {{ $student->address }}</p>
                <p>Email: {{ $student->email }}</p>
                <p>Phone number: {{ $student->number }}</p>
                <p>Date of Birth: {{ $student->dob }}</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Description</h2>
            <p>{{ $student->description }}</p>
        </div>

        <div class="section">
            <h2 class="section-title">Education</h2>
            <p class="education">
                <span class="running"> Running: <span class="edu-course">{{ $student->major }}</span> </span>


                <span class="edu-college">{{ $student->currentedu }}</span>
                <span class="edu-college">GPA: {{ $student->result }}</span>
            </p>
            <p class="education">
                <span class="running"> Passed: <span class="edu-course"> {{ $student->major }}
                    </span> </span>
                <span class="edu-college">{{ $student->currentedu }}</span>
                <span class="edu-college">GPA: {{ $student->result }}</span>
            </p>
        </div>

        <div class="section">
            <h2 class="section-title">Personal Information</h2>
            <p>Gender: {{ $student->gender }}</p>
            <p>Current Address: {{ $student->address }}</p>
            <p>Parent's Name: {{ $student->pname }}</p>
            <p>Parent's Number: {{ $student->pnumber }}</p>

        </div>

        <div class="section">
            <h2 class="section-title">Documents</h2>
            <p>Copy of citizenship: {{ $student->document_citizenship }}</p>
            <p>Copy of Transcript: {{ $student->document_transcript }}</p>
            <p>Copy of Sop: {{ $student->document_sop }}</p>
            <p>Other document: {{ $student->document }}</p>
        </div>



        <h3>Make a desision !</h3>
        <p> if you want to select the student just click the approve button if not then click the cancel button.</p>
        <div class="button">
            <x-button class="fill-button">Approve</x-button>
            <x-button class="fill-button" onclick="window.print()">Print</x-button>
            <x-button class="fill-button" onclick="window.history.back()">Cancel</x-button>
        </div>

    </div>
    @endforeach
</body>

</html>