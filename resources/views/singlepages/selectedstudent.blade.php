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

    <div class="container">

        <button style="font-size:28px; background:white; border-color:white;"
            onclick="window.history.back()">&times;</button>

        <div class="profile">
            <img src="/images/student.jpg" alt="Student Image">
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
            <p>{{ $selectedstudents->description }}</p>
        </div>

        <div class="section">
            <h2 class="section-title">Education</h2>
            <p class="education">
                <span class="running"> Running: <span class="edu-course">{{ $selectedstudents->major }}</span> </span>


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
            <p>Copy of citizenship: {{ $selectedstudents->document_citizenship }}</p>
            <p>Copy of Transcript: {{ $selectedstudents->document_transcript }}</p>
            <p>Copy of Sop: {{ $selectedstudents->document_sop }}</p>
            <p>Other document: {{ $selectedstudents->document }}</p>
        </div>



        <h3>Make a desision !</h3>
        <p> if you want to select the student just click the approve button if not then click the cancel button.</p>
        <div class="button">
            <a href="{{ route('selectedstudents',['id' => $selectedstudents ->id ]) }}" class="fill-button">Approve</a>
            <x-button class="fill-button" onclick="window.print()">Print</x-button>
            <x-button class="fill-button" onclick="window.history.back()">Cancel</x-button>
        </div>

    </div>

</body>

</html>