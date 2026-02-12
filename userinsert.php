<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user add</title>
    <link rel="stylesheet" href="userinsert.css">
</head>
<body>

    <div class="container">
        <div class="login-box">
            <h2>Sign In</h2>
            <form id="signin-form" onsubmit="return validateForm()" action = "userprocess.php" method = "post">

                <div class="input-box">
                    <label for="username">User name:</label>
                    <input type="text" id="username" name="uname" placeholder="Enter your User name" required>
                </div>

                <div class="input-box">
                    <label for="username">First naame:</label>
                    <input type="text" id="username" name="fname" placeholder="Enter your first name" required>
                </div>

                <div class="input-box">
                    <label for="username">Last naame:</label>
                    <input type="text" id="username" name="lname" placeholder="Enter your last name" required>
                </div>

                <div class="input-box">
                    <label for="username">Password</label>
                    <input type="password" id="username" name="upw" placeholder="Enter your Password" required>
                </div>

                <div class="input-box">
                    <label for="username">Passport no:</label>
                    <input type="text" id="username" name="passpn" placeholder="Enter your passport no" required>
                </div>

                <div class="input-box">
                    <label for="password">Country:</label>
                    <input type="text" id="password" name="ucon" placeholder="Enter your country" required>
                </div>

                <div class="input-box">
                    <label for="password">DOB:</label>
                    <input type="date" id="password" name="dob" placeholder="Enter your DOB" required>
                </div>

                <div class="input-box">
                    <label for="password">Email:</label>
                    <input type="email" id="password" name="uemail" placeholder="Enter your Email" required>
                </div>


                <div class="button-box">
                    <button type="submit" name="sub">Sign In</button>
                </div>
            
            </form>
        </div>
    </div>
</body>
</html>
</body>
</html>