<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - IT Services</title>
    <link rel="stylesheet" href="./assets/css/custom.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .header p {
            font-size: 18px;
            opacity: 0.9;
        }
        
        .form-container {
            padding: 50px 40px;
        }
        
        .form-title {
            font-size: 28px;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .form-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
            font-size: 16px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #1e3c72;
            font-size: 16px;
        }
        
        .required {
            color: #e74c3c;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8f9ff;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
            background: white;
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .services-section {
            margin-bottom: 30px;
        }
        
        .services-title {
            font-size: 20px;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .service-card {
            background: #f8f9ff;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 82, 152, 0.15);
        }
        
        .service-card.selected {
            border-color: #2a5298;
            background: linear-gradient(135deg, #e8f2ff 0%, #f0f8ff 100%);
        }
        
        .service-icon {
            width: 50px;
            height: 50px;
            background: #2a5298;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
        }
        
        .service-card h3 {
            color: #1e3c72;
            font-size: 16px;
            font-weight: bold;
        }
        
        .solutions-section {
            margin-bottom: 30px;
        }
        
        .solutions-title {
            font-size: 20px;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }
        
        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .solution-card {
            background: #f8f9ff;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .solution-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(42, 82, 152, 0.15);
        }
        
        .solution-card.selected {
            border-color: #2a5298;
            background: linear-gradient(135deg, #e8f2ff 0%, #f0f8ff 100%);
        }
        
        .solution-card h3 {
            color: #1e3c72;
            font-size: 14px;
            font-weight: bold;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 18px 40px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(42, 82, 152, 0.4);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        /* Success Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
        
        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .modal-icon {
            width: 80px;
            height: 80px;
            background: #27ae60;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 40px;
            color: white;
        }
        
        .modal h2 {
            color: #1e3c72;
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        .modal p {
            color: #666;
            margin-bottom: 25px;
            font-size: 16px;
        }
        
        .modal-btn {
            background: #2a5298;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modal-btn:hover {
            background: #1e3c72;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 15px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .header h1 {
                font-size: 28px;
            }
            
            .form-container {
                padding: 30px 20px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .solutions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .solutions-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 IT Services Contact</h1>
            <p>Let's Build Something Amazing Together</p>
        </div>
        
        <div class="form-container">
            <h2 class="form-title">Get Free Consultation</h2>
            <p class="form-subtitle">Fill out the form below and we'll get back to you within 24 hours</p>
            
            <form id="contactForm">
                <!-- Personal Information -->
                <div class="form-row">
                    <div class="form-group">
                        <label>First Name</label>
                        <div class="input-values">Hitixa </div>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <div class="input-values">Patel</div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="input-values">hitixapatel4439@gmail.com</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <div class="input-values">96298 79519</div>
                    </div>
                </div>
                
                <!-- Company Information -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="position">Your Position</label>
                        <input type="text" id="position" name="position">
                    </div>
                </div>
                
                <!-- Services Selection -->
                <div class="services-section">
                    <h3 class="services-title">Select Interested Services</h3>
                    <div class="services-grid">
                        <div class="service-card" data-service="iOS & Android App Development">
                            <div class="service-icon">📱</div>
                            <h3>iOS & Android App Development</h3>
                        </div>
                        <div class="service-card" data-service="Cross Platform App Development">
                            <div class="service-icon">🔄</div>
                            <h3>Cross Platform App Development</h3>
                        </div>
                        <div class="service-card" data-service="Web Development">
                            <div class="service-icon">🌐</div>
                            <h3>Web Development</h3>
                        </div>
                        <div class="service-card" data-service="Custom Software Development">
                            <div class="service-icon">⚙️</div>
                            <h3>Custom Software Development</h3>
                        </div>
                        <div class="service-card" data-service="UI/UX Design">
                            <div class="service-icon">🎨</div>
                            <h3>UI/UX Design</h3>
                        </div>
                        <div class="service-card" data-service="AI & ML Development">
                            <div class="service-icon">🤖</div>
                            <h3>AI & ML Development</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Solutions Selection -->
                <div class="solutions-section">
                    <h3 class="solutions-title">Select Industry Solution</h3>
                    <div class="solutions-grid">
                        <div class="solution-card" data-solution="Healthcare Solution">
                            <h3>🏥 Healthcare Solution</h3>
                        </div>
                        <div class="solution-card" data-solution="Hospitality Management">
                            <h3>🏨 Hospitality Management</h3>
                        </div>
                        <div class="solution-card" data-solution="Hotel Management">
                            <h3>🛎️ Hotel Management</h3>
                        </div>
                        <div class="solution-card" data-solution="Billing & Accounting Software">
                            <h3>💰 Billing & Accounting</h3>
                        </div>
                        <div class="solution-card" data-solution="Education Technology Solution">
                            <h3>🎓 Education Technology</h3>
                        </div>
                        <div class="solution-card" data-solution="Retail and E-Commerce Solution">
                            <h3>🛒 Retail & E-Commerce</h3>
                        </div>
                        <div class="solution-card" data-solution="Real Estate & Property Management">
                            <h3>🏠 Real Estate & Property</h3>
                        </div>
                        <div class="solution-card" data-solution="Logistic Management">
                            <h3>🚛 Logistics Management</h3>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    
    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="modal-icon">✓</div>
            <h2>Thank You!</h2>
            <p>Your request has been submitted successfully. We'll contact you within 24 hours with a detailed proposal.</p>
            <button class="modal-btn" onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        let selectedServices = [];
        let selectedSolutions = [];

        // Service card selection
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function() {
                const service = this.getAttribute('data-service');
                
                if (this.classList.contains('selected')) {
                    this.classList.remove('selected');
                    selectedServices = selectedServices.filter(s => s !== service);
                } else {
                    this.classList.add('selected');
                    selectedServices.push(service);
                }
            });
        });

        // Solution card selection
        document.querySelectorAll('.solution-card').forEach(card => {
            card.addEventListener('click', function() {
                const solution = this.getAttribute('data-solution');
                
                if (this.classList.contains('selected')) {
                    this.classList.remove('selected');
                    selectedSolutions = selectedSolutions.filter(s => s !== solution);
                } else {
                    this.classList.add('selected');
                    selectedSolutions.push(solution);
                }
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Collect form data
            const formData = new FormData(this);
            const clientData = {};
            
            for (let [key, value] of formData.entries()) {
                clientData[key] = value;
            }
            
            // Add selected services and solutions
            clientData.selectedServices = selectedServices;
            clientData.selectedSolutions = selectedSolutions;
            clientData.submittedAt = new Date().toISOString();
            
            // Store in localStorage for email template
            localStorage.setItem('clientData', JSON.stringify(clientData));
            
            // Show success modal
            document.getElementById('successModal').style.display = 'block';
            
            // Generate email template
            generateEmailTemplate(clientData);
        });

        function closeModal() {
            document.getElementById('successModal').style.display = 'none';
        }

        function generateEmailTemplate(clientData) {
            // You can send this data to your backend or use it as needed
            console.log('Client Data:', clientData);
            
            // This would typically be sent to your email service
            alert('Form submitted successfully! Email template will be generated with client details.');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('successModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>