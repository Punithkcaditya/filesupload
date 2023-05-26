

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
														<th class="wd-20p">PAN No</th>
														<th class="wd-20p">Mobile No</th>
														<th class="wd-25p">Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($users as $row) : ?>
														<tr>
															<th><?php echo empty( $row['ssjl_isdisapproved']) && $row['ssjl_isdisapproved'] == 0 ?  $row['ssjl_full_name'] : '<i class="fe fe-info" style="color:red;padding:3px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rejected Login"></i>'. $row['ssjl_full_name']; ?></th>
									
															<td><?php echo $row['ssjl_pan_no'] ?></td>
													      <td><?php echo $row['ssjl_mobile'] ?></td>
															<td>

																<a href="<?php echo base_url($user_view.'/' . $row['ssjl_into_id'].'/approvelogin/Approve Login/btn-primary') ?>" class="mx-2 text-decoration-none text-primary">
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
	