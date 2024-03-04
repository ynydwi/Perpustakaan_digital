<h1 class="h3 mb-3">Ulasan</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                <?php
                                    if(isset($_SESSION['user']['username'])){
                                        ?>
                                    <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah ulasan</a>
                                    <?php
                                    }
                                    ?>
                                    <table class="table">
                                        <tr>
                                            <th>NO</th>
                                            <th>Username</th>
                                            <th>Judul Buku</th>
                                            <th>Ulasan</th>
                                            <th>Rating</th>
                                            <?php
                                    if(isset($_SESSION['user']['level'])){
                                        ?>
                                        <th>Aksi</th>
                                        <?php
                                    }
                                    ?>
                                        </tr>
                                        <?php
                                        $i = 1;
                                        $query = mysqli_query($koneksi, "SELECT*FROM ulasan_buku INNER JOiN user on ulasan_buku.id_user = user.id_user inner join buku on buku.id_buku=ulasan_buku.id_buku");
                                        while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['judul']; ?></td>
                                            <td><?php echo $data['ulasan']; ?></td>
                                            <td><?php echo $data['rating']; ?> <i class="align-middle" data-feather="star"></i> </td>
                                            <td>
                                                <a href="?page=ulasan_hapus&id=<?php echo $data['id_user']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i></a>

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