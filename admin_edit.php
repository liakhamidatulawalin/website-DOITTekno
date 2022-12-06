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

<?php
extract($_GET);
$slc = "select * from tbportfolio";
$sql_slc = mysqli_query($conn, $slc);
$ket = "";
$foto = "";
$instansi = "";
while ($data = mysqli_fetch_array($sql_slc)) {
    $foto = $data['gambar'];
    $instansi = $data['Instansi'];
    $ket = $data['ket'];
}
?>

<div class="container mt-5">
    <h3 class="fw-bold">Upload Portfolio</h3>
    <form action="edit.php" method="post" enctype="multipart/form-data">
        <label for="">Pilih Gambar : </label>
        <input type="file" name="gambar"><br><br>
        <label for="">Nama Instansi : </label>
        <input type="text" name="instansi"><br><br>
        <label for="">Keterangan : </label><br><br>
        <textarea name="keterangan" id="ket" cols="30" rows="5"></textarea>
        <br><br><br>
        <input type="hidden" value="<?= $id ?>" name="id">
        <!--todo: -->
        <input type="hidden" value="<?= $foto ?>" name="foto">
        <input type="submit" value="Simpan" name="btnSimpan">
    </form>

    <h4>Daftar Gambar</h4>
    <?php
    //todo : variabel
    $select = "select * from tbportfolio";
    $sql_select = mysqli_query($conn, $select);
    $id = '';
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
                <a href="edit.php?id=<?= $view[0]; ?>" name="btnEdit">Edit</a>
                <a href="hapus.php?id=<?= $view[0]; ?>" name="btnHapus">Hapus</a>
            </td>
        </tr>
        <?php
            $id++;
        }
        ?>
    </table>
</div>