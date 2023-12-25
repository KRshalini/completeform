<!DOCTYPE html>
<html>
<head>
    <style>
        .class {
            border-collapse: collapse;
            background-color: white;
            position: absolute;
            box-sizing: border-box;
            margin: 30px 250px;
            padding: 50px;
            border-style: solid;
        }
        
        .title {
            text-align: center;
        }
        
        .input {
            padding: 20px 20px;
        }
    </style>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#loginBtn").click(function () {
                // Get form data
                var email = $("input[name='email']").val();
                var password = $("input[name='password']").val();

                // Validate email format
                if (!isValidEmail(email)) {
                    alert("Invalid email format");
                    return;
                }

                // Ajax request
                $.ajax({
                    type: "POST",
                    url: "login.php", // Replace with the actual validation script URL
                    data: { email: email, password: password },
                    success: function (response) {
                        // Handle the response from the server
                        alert(response); // You can replace this with your own logic
                    },
                    error: function () {
                        alert("Error during Ajax request");
                    }
                });
            });

            // Function to validate email format
            function isValidEmail(email) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        });
    </script>
</head>
<body>
    <div class="class">
        <form action="#" id="formvalidation" method="POST" enctype="multipart/form-data">
            <div class="title">
                <h1>LOGIN</h1>
            </div>

            <div class="input">
                <label for="email">Email:</label>
                <input type="email" name="email" required><br>
            </div>

            <div class="input">
                <label for="password">Password:</label>
                <input type="password" name="password" required><br>
            </div>
        
            <div class="input">
                <!-- Use type="button" to prevent form submission -->
                <input type="button" id="loginBtn" value="Login">   
            </div>
            <div>
                <p>Not have an account, <a href="form1.php">Register</a>.</p>
            </div>
        </form>
    </div>
</body>
</html>
