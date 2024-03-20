<x-app-layout>

    <h1>You can add any courses here!</h1>
    <h2>
        <p>Just make sure that you have extra courses from other so that student would get limitted options and easy to
            apply.</p>
        <p>Don't forget to add all the details and description and make sure you add the actual fee.</p>
    </h2>
    <!-- <div>
            <img src="\images\new.svg" alt="">
            
        </div> -->

    <div class="course-row">
        <div class="course-column">
            <x-button class="add-course-btn">add courses</x-button>
            <x-button>edit courses</x-button>
            <x-button>delete courses</x-button>
        </div>
        <div class="course-column"><img src="\images\coursesd.svg" alt=""></div>
    </div>

    <div id="popup-form" class="popup-form">

        <form action="">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
                <x-button class="close-btn" onclick="closeForm()">Close</x-buttton>
            </div>
        </form>
        <x-button class="close-btn" onclick="closeForm()">Close</x-buttton>
    </div>
    </div>
    <!-- <div id="popup-form" class="popup-form">
        <form method="post" action="">
            <div class="course-row">
                <div class="course-column">
                    <input type="text" placeholder="Course Name">
                    <input type="text" placeholder="Course Code">
                    <input type="text" placeholder="Course Name">
                    <input type="text" placeholder="Course Code">

                </div>
                <div class="course-column">
                    <input type="text" placeholder="Course Name">
                    <input type="text" placeholder="Course Code">
                    <input type="text" placeholder="Course Name">
                    <input type="text" placeholder="Course Code">
                </div>
            </div>
            <x-button type="submit">Add</x-button>
        </form>
        <button class="close-btn" onclick="closeForm()">Close</button>
    </div> -->
</x-app-layout>