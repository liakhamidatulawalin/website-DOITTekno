<?php
include 'koneksi.php';
include 'templates/head.php';
?>

<style>
    table {
        border-collapse: collapse;
        border: 2px
    }

    tr,
    th,
    td {
        width: 210px;
    }
</style>

<div class="container mt-5">
    <h3 class="fw-bold">Upload Portfolio</h3>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">Pilih Gambar : </label>
        <input type="file" name="gambar"><br><br>
        <label for="">Nama Instansi : </label>
        <input type="text" name="instansi"><br><br>
        <label for="">Keterangan : </label><br><br>
        <textarea name="keterangan" id="ket" cols="30" rows="5"></textarea>
        <br><br><br>
        <!-- <input type="submit" value="Edit" name="btnEdit">
        <input type="submit" value="Hapus" name="btnHapus"> -->
        <input type="submit" value="Simpan" name="btnSimpan">
    </form>
    <div class="m-5">
        <h4>Daftar Gambar</h4>
    </div>
    <?php
    //todo : variabel
    $select = "select * from tbportfolio";
    $sql_select = mysqli_query($conn, $select);
    $id = '1';
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Instansi</th>
            <th>Keterangan</th>
            <th>MODIFI</th>
        </tr>
        <?php
        while ($view = mysqli_fetch_array($sql_select)) {
        ?>
        <tr>
            <td>
                <?= $id; ?>
            </td>
            <td><img src="image/<?= $view['gambar']; ?>" width="100px" alt=""></td>
            <td>
                <p>
                    <?= $view['Instansi']; ?>
                </p>
            </td>
            <td>
                <p>
                    <?= $view['ket']; ?>
                </p>
            </td>
            <td>
                <a href="admin_edit.php?id=<?= $view[0]; ?>" name="btnEdit">Edit</a>
                <a href="hapus.php?id=<?= $view[0]; ?>" name="btnHapus">Hapus</a>
            </td>
        </tr>
        <?php
            $id++;
        }
        ?>
    </table>
</div>