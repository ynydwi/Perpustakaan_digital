<?php
if (isset($_POST['peminjaman'])) {

    $id_user = $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $status_peminjaman = $_POST['status_peminjaman'];

    $query = mysqli_query($koneksi, "INSERT INTO peminjaman (id_user,id_buku,tgl_peminjaman,tgl_pengembalian,status_peminjaman,jumlah_bukuDipinjam) values('$id_user','$id_buku','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman','1')");
    if ($query) {
        echo '<script>alert("Tambah data Berhasil")</script>';
    } else {
        echo '<script>alert("Tambah data Gagal")</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Data peminjaman</h1>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <a href="?page=peminjaman" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post">
                    <table>

                        <tr>
                            <td width="200">Peminjam</td>
                            <td width="1">:</td>
                            <td><select name="id_user" class="form-select">
                                    <option value="" hidden></option>
                                    <?php

                                    $pengguna = mysqli_query($koneksi, "SELECT * FROM user");
                                    while ($data_pengguna = mysqli_fetch_array($pengguna)) {
                                    ?>
                                        <option value="<?= $data_pengguna['id_user'] ?>"><?= $data_pengguna['username'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select></td>
                        </tr>

                        <tr>
                            <td width="200">Judul buku</td>
                            <td width="1">:</td>
                            <td>
                                <select name="id_buku" class="form-select">
                                    <option value="" hidden></option>
                                    <?php
                                    $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                    while ($data_buk = mysqli_fetch_array($buk)) {
                                    ?>
                                        <option value="<?= $data_buk['id_buku'] ?>"><?= $data_buk['judul'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="200">tanggal peminjaman</td>
                            <td width="1">:</td>
                            <td><input class="form-control" type="date" name="tgl_peminjaman"></td>
                        </tr>
                        <tr>
                            <td width="200">tanggal pengembalian</td>
                            <td width="1">:</td>
                            <td><input class="form-control" type="date" name="tgl_pengembalian"></td>
                        </tr>

                        <tr>
                            <td width="200">Status Peminjaman</td>
                            <td width="1">:</td>
                            <td>
                                <select name="status_peminjaman">
                                    <option>Dipinjam</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success" name="peminjaman" type="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>