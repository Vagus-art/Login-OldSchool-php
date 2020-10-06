<?php
$title = "Log in";
require("includes/header.inc.php");
require("includes/login.inc.php");
?>

<body>
    <?php require("includes/navbar.inc.php"); ?>
    <div class="container d-flex align-items-center justify-content-center mt-5" style="min-height:60vh;">
        <img src="img/bootstrap.png" alt="bootstrap" class="mr-5 d-none d-lg-inline-flex">
        <div class="card d-inline-flex" style="max-width: 300px;">
            <form class="card-body" method="POST">
                <h1 class="card-title">Log in</h1>
                <?php if (isset($message)) echo "<small class='form-text text-muted'>" . $message . "</small>"; ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="submit-login" style="float:right;">Submit</button>
            </form>
        </div>
    </div>
</body>

<?php require("includes/footer.inc.php"); ?>