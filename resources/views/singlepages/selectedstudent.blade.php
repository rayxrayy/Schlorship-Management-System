<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Student Details</title>
    <style>
    body {
        font-family: proxima-nova, sans-serif;
        background-color: #f5f5f5;
        color: #333;
        margin: 0;
        padding: 0;
        max-width: 800px;
        margin: 50px auto;
    }

    h1,
    h2,
    h3 {
        color: #595bd4;
        margin-bottom: 10px;
    }

    p {
        margin: 5px 0;
    }

    .section {
        margin-bottom: 20px;
    }

    .section-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .resume-item {
        margin-bottom: 10px;
    }

    .resume-item p {
        margin-bottom: 5px;
    }

    button[type="submit"],
    button[type="button"] {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
    }

    button[type="submit"]:hover,
    button[type="button"]:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <nav></nav>
    <form action="/viewsingleselectedstudents" method="post">

        <h1>John Doe</h1>
        <div class="resume-item">
            <h2 class="section-title">Contact Information</h2>
            <p>Email: johndoe@example.com</p>
            <p>Phone: 123-456-7890</p>
            <p>Address: 123 Main Street, Anytown, USA</p>
        </div>
        <div class="resume-item">
            <h2 class="section-title">Summary</h2>
            <p>A self-motivated and diligent individual with a Bachelor's degree in Computer Science. Proficient in
                Java, Python, and web development technologies. Strong problem-solving skills and a quick learner.</p>
        </div>
        <div class="resume-item">
            <h2 class="section-title">Education</h2>
            <p>Bachelor of Science in Computer Science</p>
            <p>XYZ University, Anytown, USA</p>
            <p>Graduated: May 2020</p>
        </div>
        <div class="resume-item">
            <h2 class="section-title">Experience</h2>
            <h3>Software Developer Intern</h3>
            <p>ABC Company, Somewhere, USA</p>
            <p>June 2019 - August 2019</p>
            <ul>
                <li>Assisted in developing and maintaining web applications using Python and Django framework.</li>
                <li>Participated in daily stand-up meetings and contributed to team discussions.</li>
                <li>Implemented new features and fixed bugs under the guidance of senior developers.</li>
            </ul>
        </div>
        <div class="resume-item">
            <h2 class="section-title">Skills</h2>
            <ul>
                <li>Programming Languages: Java, Python, JavaScript</li>
                <li>Web Development: HTML/CSS, Bootstrap, React</li>
                <li>Database Management: SQL, MongoDB</li>
                <li>Version Control: Git</li>
            </ul>
        </div>
        <div class="resume-item">
            <h2 class="section-title">Projects</h2>
            <h3>Online Bookstore</h3>
            <p>Developed a web application for an online bookstore using Django framework. Implemented user
                authentication, product listing, and shopping cart functionality.</p>
            <h3>Personal Portfolio Website</h3>
            <p>Designed and developed a responsive portfolio website using HTML, CSS, and Bootstrap. Showcased personal
                projects and achievements.</p>
        </div>
        <button type="submit">Approve</button>
        <button onclick="window.print()">Print</button>
        <button onclick="window.history.back()">Cancel</button>

    </form>

</body>

</html>