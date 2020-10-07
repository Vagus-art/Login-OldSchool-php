<?php
$title = "Sign up";
require("includes/header.inc.php");
require("includes/signup.inc.php");
?>

<body>
    <?php require("includes/navbar.inc.php"); ?>
    <div class="container d-flex align-items-center justify-content-center" id="page">
        <div class="card d-inline-flex" style="max-width: 300px;">
            <form class="card-body" method="POST">
                <h1 class="card-title">Sign up</h1>
                <?php require("includes/form_message.inc.php"); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" value="<?php echo $username_retry ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $email_retry ?>">
                    <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit-signup" style="float:right;">Submit</button>
            </form>
        </div>
        <img src="img/technologies.png" alt="technologies" class="ml-5 d-none d-lg-inline-flex">
    </div>
</body>

<?php require("includes/footer.inc.php"); ?>