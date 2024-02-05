<!-- navbar  -->

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">


    <a class="navbar-brand" href="index.php">
        <img src="utils/image/logo-no-background.png" width="100" height="50" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse m-0" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active1">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active3">
                <a class="nav-link" href="Services.php">Services</a>
            </li>
        </ul>
        <?php
        session_start();


        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            echo '<form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                Search
                </button>
                </form>';
        } else {
            echo '<a href="components/signup.php" class="btn  btn-outline-info" data-bs-toggle="modal" data-bs-target="#signup_modal">SignUp</a>
                  <a href="components/login.php" class="btn mx-2 btn-outline-info" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a>';
        }
        ?>

    </div>
</nav>