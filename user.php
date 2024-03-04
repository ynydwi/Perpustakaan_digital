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