

					<!-- Page content -->
					<div class="container-fluid pt-8">
						<!-- bootom top bar -->
                     
                        <!-- bottom top bar -->
						<div class="row">
							<div class="col-md-12">
								<div class="card shadow">
									<div class="card-header">
										<h2 class="mb-0">Add New User</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">

                                        <?= $this->include('message/message') ?>  

											<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
												<thead>
													<tr>
														<th class="wd-15p">First name</th>
														<th class="wd-20p">Email</th>
														<th class="wd-20p">Mobile No</th>
														<th class="wd-25p">Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($users as $row) : ?>
														<tr>
															<th><?= $row['ssjl_full_name'] ?></th>
									
															<td><?= $row['ssjl_email'] ?></td>
													      <td><?= $row['ssjl_mobile'] ?></td>
															<td>

																	<a href="<?= base_url($user_view.'/' . $row['ssjl_into_id'].'/disapprove/Disapprove Login/btn-danger') ?>" class="mx-2 text-decoration-none text-primary">
																	<button type="button" class="btn btn-primary btn-sm">View Details</button>
																</a>

																												</td>
														</tr>
													<?php endforeach; ?>
													<?php if (count($users) <= 0) : ?>
														<tr>
															<td class="p-1 text-center" colspan="4">No result found</td>
														</tr>
													<?php endif ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>
					
					</div>
	