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
                                    <form class="form-valide" action="<?php echo base_url('C_Akun/tambah_aksi') ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a username.." required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one.." required="">
                                                <span class="text-warning"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Hak Akses <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="hak_akses" id="hak_akses" class="form-control">
                                                    <option value="HRD">HRD</option>
                                                    <option value="Site Head">Site Head</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Leader">Leader</option>
                                                </select>
                                                <span class="text-warning"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="dept">
                                            <label class="col-lg-4 col-form-label" for="val-password">Departemen <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="dept" class="form-control">
                                                    <?php foreach ($departemen as $d) { ?>
                                                        <option value="<?php echo $d->dept ?>"><?php echo $d->dept ?></option>
                                                    <?php } ?>
                                                </select>
                                                <span class="text-warning"></span>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <a href="<?php echo base_url() ?>admin/akun"><button type="button" class="btn btn-danger">
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
<script>
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
        $("#dept").hide();
        $("#hak_akses").change(function(){
            var jenis = $("#hak_akses option:selected").attr("value");
            console.log(jenis);
            if(jenis == "Leader"){
                $("#dept").show();
            }else{
                $("#dept").hide();
            }
        });
    });

 </script>
<?php 
  $this->load->view("Back/Parts/V_Footer");
 ?>