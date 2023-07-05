
<div class="container-fluid pt-8">
						<div class="page-header mt-0 shadow p-3">
							<ol class="breadcrumb mb-sm-0">
								<li class="breadcrumb-item"><a href="#">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
							<div class="btn-group mb-0">
					
							</div>
						</div>


					<div class="row">
					<div class="col-lg-12">
					<?= $this->include('message/message') ?>
					</div>
					</div>

						<div class="row">
							<?php if(isset($admin_users)) {?>
						<div class="col-md-6 col-sm-12">
						<div class="form-group">
						<select name="admin_users" name="admin_users" id="admin_users" class="form-control" required>
						<option value="">-- Choose Employee
						</option>
						<?php foreach ($admin_users as $rowdata): ?>
						<option value="<?php echo $rowdata['user_name'] ?>" <?php echo ((!empty($rowdata['user_name']) && isset($_GET['user_name'])) && $rowdata['user_name'] == $_GET['user_name']) ? 'selected' : '' ?>>
						<?php echo $rowdata['first_name'] .'-'. $rowdata['first_name'] ?>
						</option>
						<?php endforeach;?>
						</select>
						</div>
						</div>
						<div class="col-md-6  d-sm-none">
						<div class="form-group mt-3">
						</div>
						</div>
						<?php } ?>
							<div class="col-md-12">
								<div class="card shadow">
									<div class="card-header">
										<h2 class="mb-0">Data Table</h2>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered w-100 text-nowrap">
												<thead>
													<tr>
														<th class="wd-15p">S No</th>
														<th class="wd-15p">File Name</th>
														<th class="wd-25p">Actions</th>
													</tr>
												</thead>
												<tbody>

													<?php
													$username = $_GET['user_name'] ? $_GET['user_name'] : '';
													if ($fileNames) {
                                                    $i = 0;
														foreach ($fileNames as $key): ?>
														<tr>
															<th><?=++$i?></th>
															<td><?=$key?></td>
															<td>
                                                            <a href="<?= base_url('downloadfile/'.$key) ?>" class="mx-2 text-decoration-none text-primary"><i class="fa fa-download"></i></a>
                                                            <?php if(isset($admin_users)) {?>
															<a href="<?= base_url('deletefile/'.$key.'/'.$username) ?>" class="mx-2 text-decoration-none text-danger" onclick="if(confirm('Are you sure to delete  - <?= $key ?> from list?') !== true) event.preventDefault()"><i class="fa fa-trash"></i></a>
															<?php } ?>	
														</td>
														</tr>
													<?php endforeach;
													} else {?>
														<tr>
															<td class="p-1 text-center" colspan="4">No result found</td>
														</tr>
													<?php }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>


<script>
$(document).ready(function() {
var selectEl = $('select[name="admin_users"]');
var currentVal = selectEl.val(); // initialize current value

selectEl.on('change', function() {
var selectedVal = $(this).val();
if(selectedVal && selectedVal !== currentVal) { // check if value has changed
currentVal = selectedVal; // update current value
window.location.href = 'filelistings?user_name=' + selectedVal; // update URL
}
});
});

</script>