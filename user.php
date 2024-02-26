<h1 class="h3 mb-3">Data user</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    
                                    <table class="table">
                                        <tr>
                                            <th>NO</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Nama Lengkap</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT*FROM user");
                                        while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['namaLengkap']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td>
                                                <a href="?page=user_ubah&id=<?php echo $data['username']; ?>" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></a>
                                                <a href="?page=user_hapus&id=<?php echo $data['username']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i></a>
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