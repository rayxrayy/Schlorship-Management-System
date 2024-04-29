// Get the button and the popup form
const addCourseBtn = document.querySelector('.add-course-btn');
const popupForm = document.getElementById('popup-form');

// Function to open the popup form
function openForm() {
    console.log("inside open form fxn")
    popupForm.style.display = 'block';
    popupForm.style.visibility = 'visible'; // Ensure it's visible
}

// Function to close the popup form
function closeForm() {
    popupForm.style.display = 'none';
    popupForm.style.visibility = 'hidden'; // Hide it
}


function toggleFields(header) {
    const personalinfo = header.nextElementSibling;
    personalinfo.style.display = personalinfo.style.display === 'none' ? 'block' : 'none';
}

function toggleFieldsEdu(header) {
    const edubackground = header.nextElementSibling;
    edubackground.style.display = edubackground.style.display === 'none' ? 'block' : 'none';
}

function toggleFieldsDoc(header) {
    const documentation = header.nextElementSibling;
    documentation.style.display = documentation.style.display === 'none' ? 'block' : 'none';
}

function openModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

// Close the modal when the user clicks anywhere outside of the modal
window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function opennotificationModal() {
    document.getElementById("notificationModal").style.display = "block";
}

    // Function to close the modal
function closenotificationModal() {
   document.getElementById("notificationModal").style.display = "none";
}

    // Close the modal when clicking outside of it
window.onclick = function(event) {
    var modal = document.getElementById("notificationModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

