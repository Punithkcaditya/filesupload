<div class="container-fluid pt-8">
    <div class="row">

        <div class="col-lg-12">
        <?= $this->include('message/message') ?>  
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Upload Zip Files</h2>
                </div>
                <form action="<?php echo base_url('BulkuploadController/upload');?>" method="post" enctype="multipart/form-data">

                <div class="card-body">
                    <label class="form-label">Enter Text</label>

                      <input type="text" id="nameforfile" name="nameforfile" class="form-control mb-3" required />
                    <div class="form-group">
                    <input type="file" id="zipfile" name="zipfile" class="dropify" data-max-file-size="200M" />
          <div>
                    <input type="submit" name="submit" value="Upload" class="btn btn-primary mt-3 mb-1" />
                </div>
                </form>
            </div>
        </div>
    </div>

</div>