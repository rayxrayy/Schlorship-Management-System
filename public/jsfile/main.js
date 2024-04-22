document.addEventListener("DOMContentLoaded", function() {
    const inputBox = document.getElementById("input-box");
    const resultBox = document.getElementById("result-box");
    const autocompleteResults = document.getElementById("autocomplete-results");

    // Static autocomplete suggestions
    const autocompleteData = ["Apple", "Banana", "Orange", "Pineapple", "Mango", "Grapes", "Watermelon"];

    inputBox.addEventListener("input", function() {
        const inputValue = inputBox.value.trim();

        if (inputValue.length > 0) {
            // Clear previous results
            autocompleteResults.innerHTML = "";

            // Display autocomplete results
            autocompleteData.forEach(function(result) {
                if (result.toLowerCase().startsWith(inputValue.toLowerCase())) {
                    const li = document.createElement("li");
                    li.textContent = result;
                    autocompleteResults.appendChild(li);
                }
            });

            // Show the result box
            resultBox.style.display = "block";
        } else {
            // Hide the result box if input is empty
            resultBox.style.display = "none";
        }
    });

    // Hide result box when clicking outside the search box
    document.addEventListener("click", function(event) {
        if (!resultBox.contains(event.target) && event.target !== inputBox) {
            resultBox.style.display = "none";
        }
    });

    // Update input box value when clicking on an autocomplete result
    autocompleteResults.addEventListener("click", function(event) {
        if (event.target.tagName === "LI") {
            inputBox.value = event.target.textContent;
            resultBox.style.display = "none";
        }
    });
});

// Event listener to open the form when the button is clicked

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


//to get apply form
// function toggleFormVisibility() {
//         var form = document.getElementById("applicationForm");
//         form.style.display = (form.style.display === "none") ? "block" : "none";
//     }
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

