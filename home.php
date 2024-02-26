<h1 class="h3 mb-3">Dashboard</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Selamat Datang di Aplikasi Perpustakaan Digital</h5>
								</div>
								<div class="card-body">
                                    <table class="table">
                                        <?php
                                        if(isset($_SESSION['user']['level'])){
                                            ?>
                                        <tr>
                                            <td width="200">Nama User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Level User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['level']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Tanggal login</td>
                                            <td width="1">:</td>
                                            <td><?php echo date('d-m-Y H:i:s'); ?></td>
                                        </tr>
                                        <?php
                                        }else{
                                            ?>
                                             <tr>
                                            <td width="200">Nama User</td>
                                            <td width="1">:</td>
                                            <td><?php echo $_SESSION['user']['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <td width="200">Level User</td>
                                            <td width="1">:</td>
                                            <td>user</td>
                                        </tr>
                                        <tr>
                                            <td width="200">Tanggal login</td>
                                            <td width="1">:</td>
                                            <td><?php echo date('d-m-Y H:i:s'); ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
								</div>
							</div>
						</div>
					</div>