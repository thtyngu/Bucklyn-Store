<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('includes/head.php') ?>
</head>
<body>
    <header class="header">
        <?php include('includes/nav.php') ?>
    </header>
    <section class="section-signup">
        <div class="row">
            <h1>Sign up</h1>
        </div>
        <div class="row">
            <div class="signup-wrapper">
                <div class="signup-form">
                    <form action="" method="POST">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter your email">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <label for="confirm-password">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Re-enter your password">
                        <input type="submit" value="Sign up" name="submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="validation-msg">
            <div class="row">
                <p class="errors">
                    <?php
                        // server-side validation that are written in PHP
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $errors = '';
                            if(isset($_POST['submit'])) {
                                $errors = '';
                                $email = $_POST['email'];
                                if($email == '') {
                                    $errors = 1;
                                    echo 'Please enter your email. <br>';
                                } else {
                                    // regular expression validation for email
                                    $emailPattern = "/^[A-Za-z0-9]+[\@][a-z]+[\.][a-z]+$/";
                                    if(!preg_match($emailPattern, $email)) {
                                        $errors = 1;
                                        echo 'Please enter email in correct format. <br>';
                                    }
                                }

                                $password1 = $_POST['password'];
                                $password2 = $_POST['confirm-password'];

                                if($password1 == '' || $password2 == '') {
                                    $errors = 1;
                                    echo 'Please enter your password. <br>';
                                } else if (strcmp($password1, $password2) != 0) {
                                    $errors = 1;
                                    echo 'Your passwords were not matched. <br>';
                                } else if (strlen($password1) < 6) {
                                    $errors = 1;
                                    echo 'Password must have at least 6 digits. <br>';
                                }

                                if($errors == '') {
                                    header("Location: checkout.php");
                                }
                            }
                        }
                    ?>
                </p>
            </div>
        </div>
    </section>
    <section class="divider">
    </section>
    <footer class="site-footer">
        <?php include('includes/footer.php') ?>
    </footer>
</body>
</html>
