<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
?>

    <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('C_Penilaian/approval_aksi') ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Pilih Departemen <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="dept" class="form-control">
                                                    <?php foreach ($departemen as $d) { ?>
                                                        <option value="<?php echo $d->dept ?>"><?php echo $d->dept ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Pilih Tahun <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="tahun" class="form-control">
                                                    <?php foreach ($tahun as $t) { ?>
                                                        <option value="<?php echo $t->tahun ?>"><?php echo $t->tahun ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <a href="<?php echo base_url() ?>admin/jabatan"><button type="button" class="btn btn-danger">
                                                  Cancel
                                                </button></a>
                                                <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
<?php 
  $this->load->view("Back/Parts/V_Footer");
 ?>