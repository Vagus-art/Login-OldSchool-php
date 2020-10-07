<?php
$title = "Home";
require("includes/header.inc.php");
?>

<body>
    <?php require("includes/navbar.inc.php"); ?>
    <div class="container" id="page">
        <h1 class="display-2">Welcome! <?php if (isset($username)) echo $username ?>
            <h2 class="display-3">This is me learning old stuff.</h1>
    </div>
    <?php require("includes/footer.inc.php"); ?>