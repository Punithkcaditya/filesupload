

<!-- Page content -->
<div class="container-fluid pt-8">

<div class="row">
<div class="col-md-12">
<div class="card shadow">
<div class="card-header">
<h2 class="mb-0">View Details</h2>
</div>
<div class="card-body">
<div class="table-responsives">
<?= $this->include('message/message') ?>

<div class="row">
<!-- <div class="col-md-6 col-sm-6"></div> -->
<div class="col-md-12 col-sm-12">
<div class=" card-profile">
<div class="row justify-content-center">
<div class="">
<div class="">

        <?php $extension = pathinfo($query['ssl_profile_pic'], PATHINFO_EXTENSION); echo !empty($query['ssl_profile_pic']) && ($extension == "png" || $extension == "jpg" || $extension == "jpeg") ? 
            ' <a href="#"><img src="' . base_url('/uploads/' . $query['ssl_profile_pic']) . '" style="max-width:200px;"></a>' : '' ?>
    
    <h3 class="mt-3 mb-5 text-center"><?php echo !empty($query['ssjl_full_name']) && ($extension == "png" || $extension == "jpg" || $extension == "jpeg") ? $query['ssjl_full_name'] : '' ?></h3>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo !empty($query['ssjl_full_name']) ? $query['ssjl_full_name'] : '' ?>" readonly>
</div>


<div class="form-group">
<label class="form-label">Mobile</label>
<input type="hidden" name="role_id" id="role_id" class="form-control" value="4" />
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_mobile']) ? $query['ssjl_mobile'] : '' ?>" readonly>
</div>

</div>

<div class="col-md-6">

<div class="form-group">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" id="email"  value="<?php echo !empty($query['ssjl_email']) ? $query['ssjl_email'] : '' ?>" readonly>
</div>
    <div class="form-group">
<label class="form-label">Blood Group</label>
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_blood_group']) ? $query['ssjl_blood_group'] : '' ?>" readonly>
</div>
</div>

</div>

<!-- 2 -->

<div class="row">
<div class="col-md-6">
<input type="hidden" name="user_id_hidd" value="<?php echo (!empty($query['ssjl_into_id'])) ? $query['ssjl_into_id'] : "" ?>"/>
<div class="form-group">
    <label class="form-label">UAN No</label>
    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo !empty($query['ssjl_uan_no']) ? $query['ssjl_uan_no'] : '' ?>" readonly>
</div>


<div class="form-group">
<label class="form-label">Adhaar No</label>
<input type="hidden" name="role_id" id="role_id" class="form-control" value="4" />
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_adhaar_no']) ? $query['ssjl_adhaar_no'] : '' ?>" readonly>
</div>

</div>

<div class="col-md-6">

<div class="form-group">
    <label class="form-label">PAN No</label>
    <input type="text" class="form-control" name="email" id="email"  value="<?php echo !empty($query['ssjl_pan_no']) ? $query['ssjl_pan_no'] : '' ?>" readonly>
</div>
    <div class="form-group">
<label class="form-label">Bank Ac/No</label>
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_bank_ac_no']) ? $query['ssjl_bank_ac_no'] : '' ?>" readonly>
</div>
</div>

</div>


<!-- 3 -->

<div class="row">
<div class="col-md-6">
<input type="hidden" name="user_id_hidd" value="<?php echo (!empty($query['ssjl_into_id'])) ? $query['ssjl_into_id'] : "" ?>"/>
<div class="form-group">
    <label class="form-label">Date of Birth</label>
    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo !empty($query['ssjl_date_of_birth']) ? $query['ssjl_date_of_birth'] : '' ?>" readonly>
</div>


<div class="form-group">
<label class="form-label">Registered Date</label>
<input type="hidden" name="role_id" id="role_id" class="form-control" value="4" />
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_date']) ? $query['ssjl_date'] : '' ?>" readonly>
</div>

</div>

<div class="col-md-6">

<div class="form-group">
    <label class="form-label">Marital Status</label>
    <input type="text" class="form-control" name="email" id="email"  value="<?php echo !empty($query['ssjl_marital_status']) ? $query['ssjl_marital_status'] : '' ?>" readonly>
</div>
    <div class="form-group">
<label class="form-label">Fathers Name</label>
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_fathers_name']) ? $query['ssjl_fathers_name'] : '' ?>" readonly>
</div>
</div>

</div>

<!-- 4 -->
<div class="row">
<div class="col-md-6">
<input type="hidden" name="user_id_hidd" value="<?php echo (!empty($query['ssjl_into_id'])) ? $query['ssjl_into_id'] : "" ?>"/>
<div class="form-group">
    <label class="form-label">Emergency Contact Person Number</label>
    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo !empty($query['ssjl_emergency_contact_person']) ? $query['ssjl_emergency_contact_person'] : '' ?>" readonly>
</div>


<div class="form-group">
<label class="form-label">Emergency Contact  Number</label>
<input type="hidden" name="role_id" id="role_id" class="form-control" value="4" />
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_emergency_contact_no']) ? $query['ssjl_emergency_contact_no'] : '' ?>" readonly>
</div>

</div>

<div class="col-md-6">

<div class="form-group">
    <label class="form-label">Reference Person</label>
    <input type="text" class="form-control" name="email" id="email"  value="<?php echo !empty($query['ssjl_reference_person']) ? $query['ssjl_reference_person'] : '' ?>" readonly>
</div>
    <div class="form-group">
<label class="form-label">Contact No</label>
    <input type="text" class="form-control" name="password" id="password"  value="<?php echo !empty($query['ssjl_contact_no']) ? $query['ssjl_contact_no'] : '' ?>" readonly>
</div>
</div>

</div>

<!-- 5 -->

<div class="row">
<div class="col-md-6">
<input type="hidden" name="user_id_hidd" value="<?php echo (!empty($query['ssjl_into_id'])) ? $query['ssjl_into_id'] : "" ?>"/>
<div class="form-group">
    <label class="form-label">Health Issue Any</label>
    <input type="text" class="form-control" name="first_name" id="first_name"  value="<?php echo !empty($query['ssjl_health_issue_any']) ? $query['ssjl_health_issue_any'] : '' ?>" readonly>
</div>

                            <?php $extension = pathinfo($query['ssjl_resume'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">View Resume : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_resume'])?>" alt="Avatar">
</div>

<?php  }else{ ?>

<label class="form-label">View Resume : </label>

<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_resume']) ?>"> Click Here To View Resume</a>        </div>
<?php  }
?>

                                                    <?php $extension = pathinfo($query['ssjl_previous_pay_slips'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">View Pay Slips : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_previous_pay_slips'])?>" alt="Avatar">
</div>

<?php  }else{ ?>



<label class="form-label">View Pay Slips : </label>

<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_previous_pay_slips']) ?>">Click Here To View Pay Slips</a>        
</div>

                    <?php  }
?>


                                                    <?php $extension = pathinfo($query['ssjl_education_documents'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">Education Documents : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_education_documents'])?>" alt="Avatar">
</div>

<?php  }else{ ?>

<label class="form-label">Education Documents : </label>
<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_education_documents']) ?>">Click Here To View Education Documents</a>        </div>

                    <?php  }
?>
</div>

<div class="col-md-6">
<?php $extension = pathinfo($query['ssjl_pan_copy'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>

<label class="form-label">View PAN : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_adhaar_copy'])?>" alt="Avatar">
</div>
<?php  }else{ ?>

<label class="form-label">View PAN : </label>

<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_pan_copy']) ?>"> Click Here To View PAN</a>        </div>
<?php  }
?>



<?php $extension = pathinfo($query['ssjl_adhaar_copy'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">View Adhaar : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_adhaar_copy'])?>" alt="Avatar">
</div>

<?php  }else{ ?>

<label class="form-label">View Adhaar : </label>

<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_adhaar_copy']) ?>">Click Here To View Adhaar</a>        </div>


<?php  }
?>




<?php $extension = pathinfo($query['ssjl_releiving_letter'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">View Releiving Letter : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_releiving_letter'])?>" alt="Avatar">
</div>

<?php  }else{ ?>

<label class="form-label">View  Releiving Letter : </label>

<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_releiving_letter']) ?>">Click Here To View Releiving Letter</a>        </div>

<?php  }
?>


<?php $extension = pathinfo($query['ssjl_rent_agreement'], PATHINFO_EXTENSION);
if($extension == "png" || $extension == "jpg" || $extension == "jpeg"){ ?>
<label class="form-label">View Agreement : </label>
    <div class="form-group">
<img style="
max-width: 200px;
" src="<?=base_url('/uploads/'. $query['ssjl_rent_agreement'])?>" alt="Avatar">
</div>

<?php  }else{ ?>
                            <label class="form-label">Rent Agreement : </label>


<div class="form-group">
<a target="_blank" href="<?php echo  base_url('showPdf/' . $query['ssjl_rent_agreement']) ?>">Click Here To View Rent Agreement</a>        </div>
<?php  }
?>
</div>

    
</div>
<div class="col-md-12 mt-5" style="text-align: center;">
<div class="d-grid gap-1">
    <?php if($link == 'approvelogin'){?>
<a href="<?= base_url($link.'/' . $query['ssjl_into_id']) ?>" class="mx-2 text-decoration-none text-primary"> <button type="button" class="btn <?php echo $class ?> btn-lg"><?php echo $text ?></button> </a>
<a href="#" class="mx-2 text-decoration-none text-primary"> <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal-form">Reject Login</button> </a>

    <?php } ?>
    <?php if($link == 'disapprove'){?>
<a href="<?= base_url($link.'/' . $query['ssjl_into_id']) ?>" class="mx-2 text-decoration-none text-primary"> <button type="button" class="btn <?php echo $class ?> btn-lg"><?php echo $text ?></button> </a>
    <?php } ?>
</div>
</div>

</div>
<!-- 6 -->
</div>
</div>
</div>

</div>
</div>

</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
<div class="modal-content">
<div class="modal-body p-0">
    <div class="card bg-primary shadow border-0 mb-0">

        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-white mb-4 h2">
                Enter Reason For Rejection
            </div>
            <form action="<?php echo  base_url("reject") ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <input type="hidden" name="ssjl_into_id" value="<?php echo (!empty($query['ssjl_into_id'])) ? $query['ssjl_into_id'] : "" ?>"/>
                        <textarea class="form-control" name="ssjl_comment" rows="4" placeholder="text here.." required style="padding: 2em;"></textarea>
                    </div>
                </div>
            
                <div class="text-center">
                    <button type="submit" class="btn btn-white my-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
