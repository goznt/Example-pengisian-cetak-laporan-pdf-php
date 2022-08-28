<script>
type = window.print()
</script>
<h2>
    <p align="center">Laporan Data Buku</p>
</h2>
<table border="1" cellpadding="5" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
    </thead>

    <tbody>
        <?php
            include 'konek.php';
            $no=1;
            $sql=$db->query("SELECT * FROM tb_buku");
            foreach($sql as $row) {
                ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row['kode_buku'];?></td>
            <td><?php echo $row['judul_buku'];?></td>
            <td><?php echo $row['pengarang'];?></td>
            <td><?php echo $row['penerbit'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>