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
                                    <form class="form-valide" action="<?php echo base_url('C_Karyawan/update') ?>" method="post">
                                        <?php foreach ($karyawan as $i) { ?>
                                            <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Departemen <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="register" value="<?php echo $i->register ?>">
                                                <select name="dept" class="form-control">
                                                    <?php foreach ($departemen as $d) { ?>
                                                        <option value="<?php echo $d->dept ?>" <?php if($i->dept == $d->dept){ echo "selected"; } ?>><?php echo $d->dept ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Work Group <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="w" class="form-control">
                                                    <?php foreach ($work_group as $w) { ?>
                                                        <option value="<?php echo $w->w ?>" <?php if($i->w == $w->w){ echo "selected"; } ?>><?php echo $w->w ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="nama" value="<?php echo $i->nama ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Jenis Kelamin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="s" class="form-control">
                                                    <option value="M" <?php if($i->dept == "M"){ echo "selected"; } ?>>Man</option>
                                                    <option value="F" <?php if($i->dept == "F"){ echo "selected"; } ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Masa Kerja (Tahun) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" min="1" max="99" class="form-control" name="masa_kerja" required="" value="<?php echo $i->masa_kerja ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Usia <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" min="1" max="99" class="form-control" name="usia" required="" value="<?php echo $i->usia ?>">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <a href="<?php echo base_url() ?>admin/karyawan"><button type="button" class="btn btn-danger">
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