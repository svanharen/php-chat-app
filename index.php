<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App - Mark 1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat App - Mark 1</header>
            <form action="#">
                <div class="error-message">Error</div>
                <div class="name-input">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="lname">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input ">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter a password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input cpw">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Confirm password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Profile Pic</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Time to Chat!">
                </div>
            </form>
            <div class="link">
                Already signed up? <a href="#">Login now</a>
            </div>
        </section>
    </div>

    <script src="../js/pass-show-hide.js"></script>

</body>
</html>