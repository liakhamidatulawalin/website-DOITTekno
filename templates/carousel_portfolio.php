<?php
include 'koneksi.php';
extract($_POST);

//todo: variabel
$up = 1;
$select = "select * from tbportfolio";
$sql_select = mysqli_query($conn, $select);
?>
<section>
    <div class="container">
        <div class="portfolios">
            <div class="row">
                <div class="col-6" data-aos="fade-down" data-aos-duration="100">
                    <div class="portfolio-heading">Project Portfolio</div>
                </div>
                <div class="col-6 text-end align-self-center" data-aos="fade-down" data-aos-duration="200">
                    <a href="?page=portfolio"><button class="btn-portfolios">View All</button></a>
                </div>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-light slide" style="margin-top: 40px" data-bs-ride="carousel" data-aos="zoom-in">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    while ($data = mysqli_fetch_array($sql_select)) {
                    ?>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="image/<?= $data['gambar']; ?>" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>
                                        <?= $data['ket']; ?>
                                    </h5>
                                    <p>
                                        <?= $data['Instansi']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="image/<?= $data['gambar']; ?>" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $data['ket']; ?></h5>
                                    <p><?= $data['Instansi']; ?></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/<?= $data['gambar']; ?>" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $data['ket']; ?></h5>
                                    <p><?= $data['Instansi']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        $up++;
                    }
                    ?>
                </form>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>