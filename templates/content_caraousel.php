<?php
include 'koneksi.php';
extract($_POST);

//todo: variabel
$up = 1;
$select = "select * from tbportfolio";
$sql_select = mysqli_query($conn, $select);
?>

<form action="admin.php" method="POST" enctype="multipart/form-data">
    <?php
    while ($data = mysqli_fetch_array($sql_select)) {
    ?>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="image/<?= $data['gambar']; ?>" class="d-block w-100" name="ptf" />
            <div class="carousel-caption d-none d-md-block">
                <h5>
                    <?= $data['ket']; ?>
                </h5>
                <p>
                    <?= $data['Instansi']; ?>
                </p>
            </div>
        </div>
    </div>
    <?php
        $up++;
    }
        ?>
</form>
<!-- <div class="carousel-item" data-bs-interval="2000">
                <img src="" class="d-block w-100" width="300px" name="ptf" />
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div> -->
<!-- <div class="carousel-item">
            <img src="" class="d-block w-100" width="300px" name="ptf" />
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
        </div>