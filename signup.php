<?php
$title = "Sign up";
include("includes/header.inc.php");
?>

<body>
    <?php include("includes/navbar.inc.php"); ?>
    <div class="container d-flex align-items-center justify-content-center mt-5" style="min-height:60vh;">
        <div class="card d-inline-flex" style="max-width: 300px;">
            <form class="card-body">
                <h1 class="card-title">Sign up</h1>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
            </form>
        </div>
        <img src="img/technologies.png" alt="technologies" class="ml-5 d-none d-lg-inline-flex">
    </div>
</body>

<?php include("includes/footer.inc.php"); ?>