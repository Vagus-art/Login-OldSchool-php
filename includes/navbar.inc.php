<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/index.php">OldSchool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <?php
            if (!isset($username) && !isset($password))
                echo
                    "<li class='nav-item'>
                    <a class='nav-link' href='/login.php'>Log in</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='/signup.php'>Sign up</a>
                </li>";
            else
                echo
                    "<li class='nav-item'>
                    <a class='nav-link' href='/logout.php'>Log out</a>
                </li>"
            ?>

        </ul>
    </div>
</nav>