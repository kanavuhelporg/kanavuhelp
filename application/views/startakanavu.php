<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 20px;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            width: 25%;
            text-align: center;
            font-weight: bold;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <!-- First Container -->
        <div class="row">
            <div class="col-md-6">
                <h2>Your Heading</h2>
                <p>Your paragraph text goes here.</p>
                <img src="your-image.jpg" alt="Your Image" class="img-fluid">
            </div>
        </div>

        <!-- Second Container -->
        <div class="row">
            <div class="col-md-6 login-container">
                <div class="step-indicator">
                    <div class="step">Step 1</div>
                    <div class="step">Step 2</div>
                    <div class="step">Step 3</div>
                    <div class="step">Step 4</div>
                </div>

                <!-- Step 1 -->
                <div class="form-step active">
                    <h3>Step 1: Enter Your Details</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <button type="button" class="btn btn-primary">Next</button>
                    </form>
                </div>

                <!-- Step 2 -->
                <div class="form-step">
                    <h3>Step 2: OTP Verification</h3>
                    <form>
                        <!-- Fields for OTP verification -->
                        <button type="button" class="btn btn-primary">Next</button>
                    </form>
                </div>

                <!-- Step 3 -->
                <div class="form-step">
                    <h3>Step 3: Additional Information</h3>
                    <form>
                        <!-- Fields for additional information -->
                        <button type="button" class="btn btn-primary">Next</button>
                    </form>
                </div>

                <!-- Step 4 -->
                <div class="form-step">
                    <h3>Step 4: Final Step</h3>
                    <form>
                        <!-- Fields for the final step -->
                        <button type="button" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js are required for Bootstrap components -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript logic for handling steps (show/hide)
        $(document).ready(function () {
            // Add your logic here to handle the transition between steps
            // Example: $(".form-step.active").removeClass("active").next(".form-step").addClass("active");
        });
    </script>
</body>

</html>
