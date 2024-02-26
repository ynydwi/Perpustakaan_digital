<h1 class="h3 mb-3">Data buku</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=buku_tambah" class="btn btn-primary"><i class="align-middle" data-feather="file-plus"></i> Tambah data</a>
                                    <hr>
                                    <table class="table">
                                        <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun terbit</th>
                                        <th>Stok buku</th>
                                        <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT*FROM buku");
                                        while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['penulis']; ?></td>
                                            <td><?php echo $data['penerbit']; ?></td>
                                            <td><?php echo $data['tahun_terbit']; ?></td>
                                            <td><?php echo $data['stok']; ?></td>
                                            <td>
                                            <a href="?page=buku_ubah&id=<?php echo $data['id_buku']; ?>" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></a>
                                            <a href="?page=buku_hapus&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i></a>
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