<h1 class="h3 mb-3">Data kategori</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Data</a>
                                    <hr>
                                    <table class="table">
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT*FROM kategori_buku");
                                        while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data['nama_kategori']; ?></td>
                                            <td>
                                                <a href="?page=kategori_ubah&id=<?php echo $data['id_kategori']; ?>" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></a>
                                                <a href="?page=kategori_hapus&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i></a>
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