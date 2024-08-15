<script>
// Function to handle adding products to the cart
function addToCart(productName, category, price) {
    alert(productName + " has been added to your cart!");
    // You can extend this function to actually manage a cart, store items in localStorage, etc.
}

// Function to validate registration form
function validateRegistrationForm() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

// Function to validate login form
function validateLoginForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Please fill in both email and password.");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}

// Function to validate payment form
function validatePaymentForm() {
    let cardNumber = document.getElementById("card_number").value;
    let expiryDate = document.getElementById("expiry_date").value;
    let cvv = document.getElementById("cvv").value;

    if (cardNumber.length !== 16 || !/^\d+$/.test(cardNumber)) {
        alert("Please enter a valid 16-digit card number.");
        return false; // Prevent form submission
    }

    if (!/^(0[1-9]|1[0-2])\/?([0-9]{2})$/.test(expiryDate)) {
        alert("Please enter a valid expiry date (MM/YY).");
        return false; // Prevent form submission
    }

    if (cvv.length !== 3 || !/^\d+$/.test(cvv)) {
        alert("Please enter a valid 3-digit CVV.");
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}

// Attach validation functions to forms on submit event
document.querySelector('form[action="onlineshopping.php"]').onsubmit = function(event) {
    let formId = event.target.closest("section").id;

    if (formId === "register") {
        return validateRegistrationForm();
    } else if (formId === "login") {
        return validateLoginForm();
    } else if (formId === "payment") {
        return validatePaymentForm();
    }
    return true; // Allow form submission by default
};
</script>
