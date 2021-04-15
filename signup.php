<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/8ba1bf8786.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>loginmodule</title>
</head>

<body>
    <?php include 'includes/header.inc.php'; ?>
    <div class="container shadow p-3 mb-5  rounded" style="width: 400px;">
        <h1>signup</h1>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo '<div class="alert alert-danger" role="alert">
                 dont left any field blank!
               </div>';
            }
            if ($_GET["error"] == "invaliduserid") {
                echo '<div class="alert alert-danger" role="alert">
                invalid user
              </div>';
            }
            if ($_GET["error"] == "useridalreadytaken") {
                echo '<div class="alert alert-danger" role="alert">
                user already exist!
              </div>';
            }
            if ($_GET["error"] == "stmtfailed") {
                echo '<div class="alert alert-danger" role="alert">
                something went wrong try again
              </div>';
            }
            if ($_GET["error"] == "invalidemail") {
                echo '<div class="alert alert-danger" role="alert">
                invalid Email 
              </div>';
            }
            if ($_GET["error"] == "passwordsdonotmatch") {
                echo '<div class="alert alert-danger" role="alert">
                passswords dont match
              </div>';
            }
            if ($_GET["error"] == "none") {
                echo '<div class="alert alert-success" role="alert">
                sign up successfully! you can login now
              </div>';
            }
        }

        ?>
        <form action="includes/signup.inc.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="fullname">
            </div>
            <div class="mb-3">

                <input type="text" class="form-control" name="userid" placeholder="user id ">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="useremail" placeholder="email" oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')">
            </div>
            <div class="mb-3">

                <input type="password" class="form-control" name="userpassword" placeholder="password">
            </div>
            <div class="mb-3">

                <input type="password" class="form-control" name="confirmpassword" placeholder="confirm password">
            </div>

            <button type="submit" class="btn btn-primary" name="signup">signup</button>
            <p class="text-inline">Already have an account? <a href="login.php" class="btn btn-success ">login</a></p>
            
        </form>
    </div>
    <?php include 'includes/footer.inc.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>