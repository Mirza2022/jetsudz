<!-- Header/Navigation Bar Content -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-1" href="./index.php"><img src="img/Logo-02.png" alt="Jetsudz Logo" width="63" height="63"></a>

            <button class="navbar-toggler me-1" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="main-nav">
                <ul class="navbar-nav mb-2 mb-lg-0">

                    <?php if (isset($_SESSION['uid'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION['firstName']; ?></a>
                        </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <?php if (isset($_SESSION['uid'])) { ?>
                        <li class="nav-item">
                            <?php if ($_SESSION['userRole'] == 'admin') { ?>
                                <a class="nav-link" href="./adminDash.php">Dashboard</a>
                            <?php } ?>

                            <?php if ($_SESSION['userRole'] == 'agent') { ?>
                                <a class="nav-link" href="./agentDash.php">Dashboard</a>
                        <?php }
                        } ?>
                        </li>
                        <?php if (isset($_SESSION['uid'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#book-now-form">Book Now</a>
                                <?php include_once './view/bookNow.php'; ?>
                            <?php } else { ?>
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#continue">Book Now</a>
                                <?php include_once './view/continue.php'; ?>
                            <?php } ?>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#reg-service-form">Register Service</a>
                                <?php include_once 'view/regService.php'; ?>
                            </li>

                            <?php if (isset($_SESSION['uid'])) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="inc/logoutUser.php">Log Out</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-form">Log In</a>
                                    <?php include_once 'view/login.php'; ?>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#register-form">Sign Up</a>
                                    <?php include_once 'view/signUp.php'; ?>
                                </li>
                            <?php } ?>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control ms-1 me-2" type="search" placeholder="Search here..." aria-label="Search">
                    <button class="btn btn-primary me-1" type="submit" style="background-color:#36df66; color:black; border-color: #00bfcb;"><i class="fas fa-search"></i></button>
                </form>


            </div>
        </div>
    </nav>
</header>