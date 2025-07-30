const contactform = document.getElementById("contact-Inquiry-form");
contactform.addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("Form submitted event triggered.");

    // Gather data from the form
   const firstName = document.getElementById("firstName").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
const message = document.getElementById("message").value;
const subject = document.getElementById("subject").value;


console.log("Collected form data:", { firstName, email, phone, message, subject });


    // Create Email data
    const emailData = {
        "Host": "216.10.241.228",
        "Port": "587",
        "SMTPSecure": "ssl",
        "SenderEmail": "hitixa.bhuva@uniqueconsumerservices.com",
        "SenderEmailPassword": "1f1UOc{3U*66",  
        "ReciverEmail": "patelhitixa4439@gmail.com",
        "Subject": subject,
        "Body": `
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions Pro - Transform Your Business with Technology</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }

        /* Header Section */
        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .logo {
            font-size: 1.2rem;
            margin-bottom: 20px;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        .main-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .main-title .highlight {
            color: #ffd700;
        }

        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
            position: relative;
            z-index: 2;
        }

        .cta-button {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
        }

        /* Hero Image Section */
        .hero-image {
            padding: 40px 30px;
            text-align: center;
            background: linear-gradient(45deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .hero-img {
            width: 100%;
            max-width: 600px;
            height: 300px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .hero-img:hover {
            transform: scale(1.02);
        }

        /* Services Section */
        .services-section {
            padding: 50px 30px;
            background: white;
        }

        .section-title {
            font-size: 2rem;
            color: #1e3c72;
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
            font-size: 1.1rem;
        }

        .stats-grid {
            display: contents;
            gap: 30px;
            margin-bottom: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 10px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
            transition: transform 0.3s ease;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .solution-title {
            font-size: 1.4rem;
            color: #1e3c72;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .solution-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        /* Contact Section */
        .contact-section {
            padding: 50px 30px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            text-align: center;
        }

        .contact-title {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .contact-subtitle {
            font-size: 1.1rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .contact-button {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            color: white;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .contact-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 0;
            }

            .header {
                padding: 30px 20px;
            }

            .main-title {
                font-size: 1.8rem;
            }

            .hero-image {
                padding: 30px 20px;
            }

            .services-section,
            .contact-section {
                padding: 40px 20px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 1rem;
            }
        }
            @media (max-width: 425px) {
              .contact-title {
                font-size: 1.5rem !important;
              }
            }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="logo">Meta Core Solution</div>
            <h1 class="main-title">Transform Your Business with <span class="highlight">Technology</span></h1>
            <p class="subtitle">Someone wants to connect with you</p>
        </header>

        <!-- Hero Image Section -->
        <section class="hero-image">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Professional IT Team" class="hero-img">
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <h2 class="section-title">IT Solutions Done Right</h2>
            <p class="section-subtitle">A new contact from submission has been received. Here are the detals.</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="field-icon">👤</div>
                    <div class="stat-number">Name:- </div>
                    <div class="stat-label">${firstName}</div>
                </div>
                <div class="stat-item">
                    <div class="field-icon">📧</div>
                    <div class="stat-number">Email:- </div>
                    <div class="stat-label">${email}</div>
                </div>
                <div class="stat-item">
                    <div class="field-icon">📱</div>
                    <div class="stat-number">Contact:- </div>
                    <div class="stat-label">${phone}</div>
                </div>
                <div class="stat-item">
                <div class="field-icon">💬</div>
                    <div class="stat-number">Subject:- </div>
                    <div class="stat-label">${subject}</div>
                </div>
                <div class="stat-item">
                <div class="field-icon">💬</div>
                    <div class="stat-number">Message:- </div>
                    <div class="stat-label">${message}</div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <h2 class="contact-title">Need assistance? Contact our support team at</h2>
            <p class="contact-subtitle"> ${email}</p>
           <div class="footer">
            <div class="timestamp">
                📅 Received: July 4, 2025 at 2:30 PM
            </div>
        </div>
        </section>
    </div>

  
</body>
</html>

    `,
    };

    console.log("Email data prepared:", emailData);

    const apiUrl = "./Mail/test.php";
    const headers = {
        "Content-Type": "application/json",
    };

    console.log("API URL:", apiUrl);

    function toggleClassForField(fieldId, className, duration) {
        console.log(`Adding class ${className} to ${fieldId} for ${duration}ms`);
        const field = document.getElementById(fieldId);
        field.classList.add(className);
        setTimeout(() => {
            field.classList.remove(className);
            console.log(`Removed class ${className} from ${fieldId}`);
        }, duration);
    }

    console.log("Checking form validation...");

   if (!firstName || !email || !phone || !subject || !message) {
        console.log("Validation failed: Missing required fields.");
    if (!message) {
            toggleClassForField('message', 'border-danger', 3000);
        }
        if (!firstName) {
            toggleClassForField('firstName', 'border-danger', 3000);
        }
        if (!subject) {   // OPTIONAL: if you want to validate company name too
            toggleClassForField('subject', 'border-danger', 3000);
        }
        if (!email) {
            toggleClassForField('email', 'border-danger', 3000);
        }
        if (!phone) {
            toggleClassForField('phone', 'border-danger', 3000);
        }
    
    
        showFeedback('Please fill in all required fields.', 'col-12 text-center py-2 border-danger border text-danger mt-3');
        return;
    }
    

    console.log("Validating email...");
    if (!isValidEmail(email)) {
        console.log("Invalid email entered.");
        showFeedback('Please enter a valid email address.', 'col-12 text-center border-1 py-2 border-info border text-info mt-3');
        return;
    }

    console.log("Sending email request...");

    const submitButton = document.getElementById("submit-button");
submitButton.disabled = true;
submitButton.innerHTML = 'Sending... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'; // Optional: show loading indicator

    fetch(apiUrl, {
        method: "POST",
        headers: headers,
        body: JSON.stringify(emailData),
    })
    .then((response) => response.json())
    .then((data) => {
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send a message <span></span>';

        if (data.status) {
            console.log("Message sent successfully", data);
            showFeedback(
                "Message sent successfully",
                "col-12 text-center border-1 my-2 py-2 border-primary border text-primary"
            );
            clearForm();
        } else {
            console.log("Server returned an error", data);
            showFeedback(
                "Message sending failed. Please try again later.",
                "col-12 text-center border-1 py-2 border-danger border text-danger"
            );
            clearForm();
        }
    })
    .catch((error) => {
        console.error("Error while sending request:", error);
        submitButton.disabled = false;
        submitButton.innerHTML = 'Send a message <span></span>';
        showFeedback(
            "An error occurred while sending the message. Please try again later.",
            "col-12 text-center border-1 py-2 border-danger border text-danger"
        );
    });
});

function isValidEmail(email) {
    console.log("Checking email format...");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const isValid = emailRegex.test(email);
    console.log(`Email validation result for ${email}: ${isValid}`);
    return isValid;
}

function showFeedback(message, type = "success") {
    const toast = document.getElementById("toast");
    const toastMessage = toast.querySelector(".toast-message");
    const toastIcon = toast.querySelector(".toast-icon");
    const toastProgress = toast.querySelector(".toast-progress");

    // Customize icon and color based on type
    if (type === "success") {
        toastIcon.textContent = "✓";
        toastIcon.style.color = "green";
        toastProgress.style.backgroundColor = "green";
    } else if (type === "error") {
        toastIcon.textContent = "⚠";
        toastIcon.style.color = "red";
        toastProgress.style.backgroundColor = "red";
    } else if (type === "info") {
        toastIcon.textContent = "ℹ";
        toastIcon.style.color = "blue";
        toastProgress.style.backgroundColor = "blue";
    }

    toastMessage.textContent = message;

    // Show toast
    toast.classList.add("show");

    // Animate progress bar and hide toast after 3s
    toastProgress.style.width = "100%";
    setTimeout(() => {
        toast.classList.remove("show");
        toastProgress.style.width = "0";
    }, 3000);
}


function clearForm() {
    console.log("Clearing form fields...");
    document.getElementById('firstName').value = '';
    document.getElementById('email').value = '';
    document.getElementById('phone').value = '';
    document.getElementById('message').value = '';
    document.getElementById('subject').value = '';
    console.log("Form reset successfully.");
}