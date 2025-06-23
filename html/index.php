<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT APP</header>
            <form action="#" enctype="multipart/form-data">
                <div class ="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name</label>
                        <input type="text" name ="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name ="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name ="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name ="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name ="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
                <div class="link">Already signed up? <a href="login.php">Login
                now</a></div>
            </form>
        </section>
    </div>
    <script src="../js/pass-show-hide.js"></script>
    <script src="../js/signup.js"></script>

</body>
</html