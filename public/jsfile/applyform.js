// Function to validate date of birth format
function validateDateOfBirth() {
    var dobInput = document.getElementById('dob').value;
    var dobRegex = /^\d{4}-\d{2}-\d{2}$/; // Regular expression for YYYY-MM-DD format

    if (!dobRegex.test(dobInput)) {
        document.getElementById('dob-error').textContent = 'Please enter the date of birth in the format YYYY-MM-DD.';
        return false;
    } else {
        document.getElementById('dob-error').textContent = '';
        return true;
    }
}

// Listen for input event on date of birth input field
document.getElementById('dob').addEventListener('input', validateDateOfBirth);

// Function to validate phone number format
function validatePhoneNumber(inputId, errorId) {
    var phoneNumber = document.getElementById(inputId).value;
    var phoneNumberDigits = phoneNumber.replace(/\D/g, ''); // Remove non-digit characters

    if (phoneNumberDigits.length !== 10) {
        document.getElementById(errorId).textContent = 'Phone number must have exactly 10 digits.';
        return false;
    } else {
        document.getElementById(errorId).textContent = '';
        return true;
    }
}

// Listen for input event on phone number input fields
document.getElementById('number').addEventListener('input', function() {
    validatePhoneNumber('number', 'number-error');
});

document.getElementById('pnumber').addEventListener('input', function() {
    validatePhoneNumber('pnumber', 'pnumber-error');
});


//to validate email format
function validateEmail() {
    var emailInput = document.getElementById('email').value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email format

    if (!emailRegex.test(emailInput)) {
        document.getElementById('email-error').textContent = 'Please enter a valid email address.';
        return false;
    } else {
        document.getElementById('email-error').textContent = '';
        return true;
    }
}

// Listen for input event on email input field
document.getElementById('email').addEventListener('input', validateEmail);

// Function to validate description length
function validateDescription() {
    var descriptionInput = document.getElementById('description').value;
    var words = descriptionInput.trim().split(/\s+/).length; // Count words

    if (words > 100) {
        document.getElementById('description-error').textContent = 'Description must be 100 words or less.';
        return false;
    } else {
        document.getElementById('description-error').textContent = '';
        return true;
    }
}

// Listen for input event on description textarea field
document.getElementById('description').addEventListener('input', validateDescription);

// Function to validate all fields before form submission
function validateForm() {
    var isEmailValid = validateEmail();
    var isDescriptionValid = validateDescription();
    var isPhoneNumberValid = validatePhoneNumber('number', 'number-error');
    var isParentPhoneNumberValid = validatePhoneNumber('pnumber', 'pnumber-error');

    // If any validation fails, prevent form submission
    if (!isEmailValid || !isDescriptionValid || !isPhoneNumberValid || !isParentPhoneNumberValid) {
        alert('Please fix errors in the form before submitting.');
        return false; // Prevent form submission
    }

    // If all validations pass, allow form submission
    return true;
}

// Listen for form submission event
document.getElementById('applicationForm').addEventListener('submit', validateForm);