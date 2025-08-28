<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

include_once __DIR__ . "/layout/sidebar.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class=" col-md-12 position-relative">
            <img src="images/bg4.jpg" class="img-fluid object-fit-cover" style="filter: brightness(0.5) contrast(1);height:100vh;" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-lg-start find-meal animate__animated animate__fadeIn">
                <h1 class="fw-bold animate__animated animate__fadeInDown animate__delay-1s">Are you starving?</h1>
                <p class="fs-6 fs-lg-5 animate__animated animate__fadeInUp animate__delay-2s">
                    Within a few clicks, find meals that are accessible near you
                </p>
                <a href="menu.php" class="btn btn-light fw-bolder px-4 py-2 animate__animated animate__zoomIn animate__delay-3s">
                    Find Food
                </a>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="align-items-center d-lg-flex d-md-flex">
                        <div class="col-md-6 mx-5">
                            <img src="images/bg1.jpg" class="d-block rounded object-fit-cover" style="height: 400px;width:500px;" alt="...">
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus dicta, quaerat
                                laboriosam saepe temporibus nobis perferendis veniam illum placeat nesciunt
                                inventore quia at a iusto tempora, ipsam consequatur adipisci. Repellendus.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-lg-flex d-md-flex align-items-center">
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores libero laborum
                                pariatur nihil rerum suscipit, quas iusto cum cumque? Cum veniam deserunt, earum
                                alias reprehenderit voluptate molestias dolorum. Voluptas, aliquid?</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/promo3.jpg" class="d-block w-100 rounded" style="height: 400px;" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-lg-flex d-md-flex align-items-center">
                        <div class="col-md-6">
                            <img src="images/bg2.jpg" class="d-block w-100 rounded" style="height: 400px;" alt="...">
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex laboriosam hic animi
                                obcaecati, tempore eos ducimus porro, eum ullam similique aspernatur ratione
                                laudantium reiciendis. Voluptatum eum ratione magnam beatae nobis.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev previous" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row text-center m-3">
        <p>Faster than you are ever imagine</p>
        <h2>Hungry?Don't worry we will deliver tasty food in 15min</h2>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="start-imgbg">
            </div>
            <img src="images/food1.png" class="img-fluid" style="height: 300px;" alt="">
            <h3>Easy to Order</h3>
            <p>Lorem ipsum dolor sit amet consectetur</p>
        </div>
        <div class="col-md-4 text-center">
            <div class="start-imgbg">
            </div>
            <img src="images/food2.png" class="img-fluid" style="height: 300px;" alt="">
            <h3>Easy to Order</h3>
            <p>Lorem ipsum dolor sit amet consectetur</p>
        </div>
        <div class="col-md-4 text-center">
            <div class="start-imgbg">
            </div>
            <img src="images/food3.png" class="img-fluid" style="height: 300px;" alt="">
            <h3>Easy to Order</h3>
            <p>Lorem ipsum dolor sit amet consectetur</p>
        </div>
    </div>
</div>


<?php
include_once __DIR__ . "/layout/footer.php";

?>