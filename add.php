<?php include 'konek.php';?>
<form method="post">
    <table cellpadding="3">
        <tr>
            <td>Kode Buku</td>
            <td>:</td>
            <td>
                <input type="text" name="kode_buku">
            </td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td>
                <input type="text" name="judul_buku">
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>
                <input type="text" name="pengarang">
            </td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td>
                <input type="text" name="penerbit">
            </td>
        </tr>
        <td><button type="submit" name="simpan">simpan</button></td>
    </table>
</form>
<?php 
if (isset($_POST['simpan'])){
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
$q=$db->query("INSERT INTO tb_buku SET kode_buku = '$kode_buku', judul_buku = '$judul_buku', pengarang ='$pengarang', penerbit ='$penerbit'");
var_dump($q);
if ($q) {
echo "<script>window.alert('Berhasil');window.location=('index.php')</script>";
}else{
    echo "<script>window.alert('Gagal disimpan');window.location=('add.php')</script>";
}
}
?>