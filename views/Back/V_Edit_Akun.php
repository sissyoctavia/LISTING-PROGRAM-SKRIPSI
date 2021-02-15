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
                                    <form class="form-valide" action="<?php echo base_url('C_Akun/update') ?>" method="post">
                                    <?php foreach ($akun as $a ) { ?>
                                        <div class="form-group row">
                                            <input type="hidden" name="id_user" value="<?php echo $a->id_user ?>">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a username.." value="<?php echo $a->username ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="password_lama" value="<?php echo $a->password ?>">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one.." required="" value="<?php echo $a->password ?>">
                                                <span class="text-warning"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Hak Akses <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="hak_akses" id="hak_akses" class="form-control">
                                                    <option value="HRD" <?php if ($a->hak_akses == "HRD") { echo "selected"; } ?>>HRD</option>
                                                    <option value="Site Head" <?php if ($a->hak_akses == "Site Head") { echo "selected"; } ?>>Site Head</option>
                                                    <option value="Admin" <?php if ($a->hak_akses == "Admin") { echo "selected"; } ?>>Admin</option>
                                                    <option value="Leader" <?php if ($a->hak_akses == "Leader") { echo "selected"; } ?>>Leader</option>
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
                                                        <option value="<?php echo $d->dept ?>" <?php if ($a->dept == $d->dept) { echo "selected"; } ?>><?php echo $d->dept ?></option>
                                                    <?php } ?>
                                                </select>
                                                <span class="text-warning"></span>
                                            </div>
                                        </div>
                                        <?php } ?>
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
        var hak = $("#hak_akses option:selected").attr("value")
        console.log("hak", hak);
        if(hak == "Leader"){
            $("#dept").show();
        }else{
            $("#dept").hide();
        }

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