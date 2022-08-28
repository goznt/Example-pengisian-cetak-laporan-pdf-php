<a href="add.php" type="button"> Tambah Buku </a> | <a href="cetak.php" type="button" target="_BLANK"> Cetak </a>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Aksi</th>
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
            <td>
                I<a href="edit.php?id=<?php echo $row['id']?>"><button type="button">Edit</a></button>
                <a href="hapus.php?id=<?php echo $row['id' ]?>"><button type="submit"
                        onclick="return confirm ('Anda Yakin Ingin Menghapus Data Ini')">Hapus </a></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>