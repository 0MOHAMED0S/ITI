document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();
    alert("Your message has been sent!");
    this.reset();
});

document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();
    
    let isValid = true;
    const name = this.name.value.trim();
    const email = this.email.value.trim();
    const phone = this.phone.value.trim();
    const message = this.message.value.trim();
    const errorMsgs = this.querySelectorAll(".error-msg");

    // Clear previous errors
    errorMsgs.forEach(msg => msg.textContent = "");

    // Validate Name
    if (name.length < 2) {
        errorMsgs[0].textContent = "Please enter your full name.";
        isValid = false;
    }

    // Validate Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorMsgs[1].textContent = "Please enter a valid email address.";
        isValid = false;
    }

    // Validate Phone
    const phonePattern = /^[0-9]{7,}$/;
    if (!phonePattern.test(phone)) {
        errorMsgs[2].textContent = "Please enter a valid phone number.";
        isValid = false;
    }

    // Validate Message
    if (message.length < 10) {
        errorMsgs[3].textContent = "Message must be at least 10 characters.";
        isValid = false;
    }

    // If valid
    if (isValid) {
        alert("Your message has been sent successfully!");
        this.reset();
    }
});
