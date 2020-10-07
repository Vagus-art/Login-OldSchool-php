<?php
$title = "Log in";
require("includes/header.inc.php");
require("includes/login.inc.php");
?>

<body>
    <?php require("includes/navbar.inc.php"); ?>
    <div class="container d-flex align-items-center justify-content-center mt-5" id="page">
        <img src="img/bootstrap.png" alt="bootstrap" class="mr-5 d-none d-lg-inline-flex">
        <div class="card d-inline-flex" style="max-width: 300px;">
            <form class="card-body" method="POST">
                <h1 class="card-title">Log in</h1>
                <?php require("includes/form_message.inc.php"); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email_retry ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit-login" style="float:right;">Submit</button>
            </form>
        </div>
    </div>
</body>

<?php require("includes/footer.inc.php"); ?>