<?php include 'konek.php';
$id=$_GET['id'];
$q=$db->query("SELECT * FROM tb_buku WHERE id = '$id'");
foreach ($q as $row) {
}

?>
<form method="post">
    <table cellpadding="3">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td>
                <input type="text" name="kode_buku" value="<?php echo $row['kode_buku']?>">
            </td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td>
                <input type=" text" name="judul_buku" value="<?php echo $row['judul_buku']?>">
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>
                <input type="text" name="pengarang" value="<?php echo $row['pengarang']?>">
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td>
                <input type="text" name="penerbit" value="<?php echo $row['penerbit']?>">
            </td>
        </tr>
        <td><button type="submit" name="simpan">SAVE</button></td>
    </table>
</form>
<?php 
if (isset($_POST['simpan'])){
    $id = $_POST ['id'];
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
$q=$db->query("UPDATE tb_buku SET kode_buku = '$kode_buku', judul_buku = '$judul_buku', pengarang ='$pengarang', penerbit ='$penerbit' WHERE id='$id'");
var_dump($q);
if ($q) {
echo "<script>window.alert('Berhasil Mengupdate Data Bestie');window.location=('index.php')</script>";
}else{
    echo "<script>window.alert('YAHH Data Gagal disimpan bestie');window.location=('edit?id=$id.php')</script>";
}
}
?>