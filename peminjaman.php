<h1 class="h3 mb-3">Data peminjaman</h1>

<div class="row">
    <div class="col-12">
        <div class="card">


            <div class="card-body">
                <?php
                if (isset($_SESSION['user']['level'])) {
                ?>
                    <a href="?page=peminjaman_tambah" class="btn btn-primary">+ Tambah peminjaman</a>
                <?php
                }
                ?>
                <hr>
                <table class="table">
                    <tr>

                        <th>No</th>
                        <th>pengguna</th>
                        <th>Judul</th>
                        <th>jumlah buku</th>
                        <th>tanggal peminjaman</th>
                        <th>tanggal pengembalian</th>
                        <th>status peminjaman</th>
                        <?php
                        if (isset($_SESSION['user']['level'])) {
                            $where = "";
                        ?>
                            <th>Aksi</th>
                        <?php

                        }
                        ?>
                    </tr>
                    <?php
                    $i = 1;
if (empty($_SESSION['user']['level'] )) {
                $idp = $_SESSION['user']['id_user'];

                $queryus = mysqli_query($koneksi, "SELECT*FROM peminjaman INNER JOIN user on user.id_user=peminjaman.id_user LEFT JOIN buku on peminjaman.id_buku=buku.id_buku where peminjaman.id_user ='$idp'");
            }else{
               
                $queryus = mysqli_query($koneksi, "SELECT*FROM peminjaman INNER JOIN user on user.id_user=peminjaman.id_user INNER JOIN buku on peminjaman.id_buku=buku.id_buku");
               
            }
                            

                    while($data = mysqli_fetch_array($queryus)){

                        
                    // ($data = mysqli_fetch_array($query)); 
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['jumlah_bukuDipinjam']; ?></td>
                            <td><?php echo $data['tgl_peminjaman']; ?></td>
                            <td><?php echo $data['tgl_pengembalian']; ?></td>
                            <td><?php echo $data['status_peminjaman']; ?></td>
                            <?php
                            if (isset($_SESSION['user']['level'])) {
                            ?>
                                <td>
                                    <?php
                                    if ($data['status_peminjaman'] != 'DiKembalikan') {
                                    ?>
                                        <a href="?page=peminjaman_selesai&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="check-circle"></i></a>
                                    <?php
                                    }
                                    ?>
                                <?php
                            }
                                ?>
                                </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>