 <?php 
 session_start();
 include "koneksi.php";

                                    if(isset($_SESSION['user']['level'])){
                                        $where = "";
                                        }else{
                                            $where = "WHERE peminjaman.id_user" . $_SESSION['user']['id_user'];
                                        }
                                        ?>                                   
                                        
                                        <table border="1" width="100%" cellpadding="5" cellspacing="0">
                                            <tr>
                                                <th colspan="9">
                                                    <h2>Laporan Perpustakaan Digital</h2>
                                                </th>
                                            </tr>
                                        <tr>

                                            <th>No</th>
                                            <th>pengguna</th>
                                            <th>Nama user</th>
                                            <th>Tanggal peminjaman</th>
                                            <th>Tanggal pengembalian</th>
                                            <th>status peminjaman</th>
                                            <th>Aksi</th>
                                            </tr>
                                            <?php
                                            $i = 1;
                                            $query = mysqli_query($koneksi, "SELECT*FROM peminjaman left join user on user.id_user = peminjaman.id_user left join buku on buku.id_buku = peminjaman.id_buku $where");
                                            while ($data = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $data['id_user']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['tgl_peminjaman']; ?></td>
                                                <td><?php echo $data['tgl_pengembalian']; ?></td>
                                                <td><?php echo $data['status_peminjaman']; ?></td>
                                                <td>
                                                    <a href="?page=pembayaran_hapus&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </table>
                                        <script type="text/javascript">
                                                window.print();
                                        </script>