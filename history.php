
<h1 class="h3 mb-3">History peminjaman</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
                                    <?php
                                    if(isset($_SESSION['user']['level'])){
                                        ?>
                                    <a href="laporan.php" target="_blank" class="btn btn-success">Generate Laporan</a>
                                    <?php
                                    }
                                    ?>
                                    <hr>
                                    <table class="table">
                                        <tr>

                                        <th>No</th>
                                        
                                        <th>pengguna</th>
                                        <th>judul buku</th>
                                        <th>Jumlah buku</th>
                                        <th>tanggal peminjaman</th>
                                        <th>Tenggat pengembalian</th>
                                        <th>Tanggal dikembalikan</th>

                                        <?php
                                    if(isset($_SESSION['user']['level'])){
                                        $where = "";
                                        ?>
                                        <th>Aksi</th>
                                            <?php

                                        }else{
                                            $where = "WHERE peminjaman.id_user=" . $_SESSION['user']['id_user'];
                                        }
                                        ?> 
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman inner join user on user.id_user = peminjaman.id_user inner join buku on buku.id_buku=peminjaman.id_buku $where");
                                        while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['jumlah_bukuDipinjam']; ?></td>
                                            <td><?php echo $data['tgl_peminjaman']; ?></td>
                                            <td><?php echo $data['tgl_pengembalian']; ?></td>
                                           <td>
                                            <?php
                                            $tanggal_terakhir_pengembalian = $data['tgl_pengembalian'];
                                            $tanggal_sekarang = date("Y-m-d H:i:s");
                                            if (strtotime($tanggal_terakhir_pengembalian) > strtotime($tanggal_sekarang)) {
                                                echo "Belum dikembalikan. Batas waktu pengembalian telah berlalu.";
                                            } else {
                                                echo "Sudah dikembalikan tepat waktu atau sebelum batas waktu. pada: <br>
                                                * $tanggal_sekarang";
                                            }
                                            ?>
                                            </td>
                                            <?php
                                    if(isset($_SESSION['user']['level'])){
                                        ?>
                                            <td>
                                                <a href="?page=peminjaman_hapus&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                            <?php
                                    }
                                    ?>
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