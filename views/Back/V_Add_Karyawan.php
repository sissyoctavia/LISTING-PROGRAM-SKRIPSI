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
                                    <form class="form-valide" action="<?php echo base_url('C_Karyawan/tambah_aksi') ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Departemen <span class="text-danger">*</span>
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
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Work Group <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="w" class="form-control">
                                                    <?php foreach ($work_group as $w) { ?>
                                                        <option value="<?php echo $w->w ?>"><?php echo $w->w ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="nama" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Jenis Kelamin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="s" class="form-control">
                                                    <option value="M">Man</option>
                                                    <option value="F">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Masa Kerja (Tahun) <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" min="1" max="99" class="form-control" name="masa_kerja" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Usia <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" min="1" max="99" class="form-control" name="usia" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Jenis Karyawan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="jenis_karyawan" id="jenis_karyawan" class="form-control">
                                                    <option value="IRT">IRT</option>
                                                    <option value="Contract">Contract</option>
                                                    <option value="Mutasi">Mutasi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="divisi">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Divisi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="divisi" class="form-control">
                                                    <option value="Polyester">Polyester</option>
                                                    <option value="Spun">Spun</option>
                                                    <option value="Weaving">Weaving</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    
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
 <script>
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
        $("#divisi").hide();
        $("#jenis_karyawan").change(function(){
            var jenis = $("#jenis_karyawan option:selected").attr("value");
            console.log(jenis);
            if(jenis == "Mutasi"){
                $("#divisi").show();
            }else{
                $("#divisi").hide();
            }
        });
    });

 </script>