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
        <h1>login here</h1>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo '<div class="alert alert-danger" role="alert">
                 dont left any field blank!
               </div>';
            }

            if ($_GET["error"] == "incorrectlogininformation") {
                echo '<div class="alert alert-danger" role="alert">
                 incorrect login information!
               </div>';
            }
           
        }

        ?>



        <form action="includes/login.inc.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="userid" placeholder="email/userid">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="loginpassword" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">login</button>

            <hr />
            <a class="btn btn-success" href="#" style="text-decoration: none;">forget password?</a>
        </form>
    </div>
    <?php include 'includes/footer.inc.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


</body>

</html>