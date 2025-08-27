<?php
session_name('user');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Drop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="navbar-brand p-2" href="index.php">
                    <h2 style="color: rgb(209, 186, 130);">FoodDrop</h2>
                </a>

                <!-- Toggler button for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
                    <i class="bi bi-list fs-1" style="color:rgb(209, 186, 130);"></i>
                </button>




                <div class="collapse navbar-collapse" id="navbarScroll">
                    <div class="d-flex justify-content-end d-lg-none mb-2">
                        <div class="d-flex justify-content-end d-lg-none mb-2">
                            <button id="closeMenuBtn" class="btn p-0" type="button" aria-label="Close menu">
                                <i class="bi bi-x fs-1 mx-2" style="color:rgb(209, 186, 130);"></i>
                            </button>
                        </div>

                    </div>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 head-color text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="favourite.php?user_id=<?php if (isset($_SESSION['id'])) echo $_SESSION['id']; ?>">Favourite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php?id=<?php if (isset($_SESSION['id'])) echo $_SESSION['id']; ?>">Orders</a>
                        </li>
                    </ul>


                    <div class="d-flex justify-content-center">
                        <?php
                        if (isset($_SESSION['name'])) {
                        ?>
                            <div class="dropdown">
                                <a class="btn btn-link dropdown-toggle" style="color: rgb(209, 186, 130)" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person fs-4 mt-2"></i> <?php echo $_SESSION['name']; ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="edit_profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="mt-2">
                                <a href="login.php" class="btn login mx-2">Log In</a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>



                </div>
            </div>
        </nav>
    </header>

</body>


</html>

<script>
    const closeBtn = document.getElementById('closeMenuBtn');
    const navbarCollapse = document.getElementById('navbarScroll');

    if (closeBtn && navbarCollapse) {
        closeBtn.addEventListener('click', () => {
            const collapseInstance = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
            collapseInstance.hide();
        });
    }
</script>