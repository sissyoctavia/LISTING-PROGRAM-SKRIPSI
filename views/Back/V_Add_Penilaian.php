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
                                    <form class="form-valide" action="<?php echo base_url('C_Penilaian/tambah_aksi') ?>" method="post">
                                        <h3>Karyawan</h3>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Pilih Karyawan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="register" class="form-control selectpicker" id="select-karyawan" data-live-search="true">
                                                    <?php foreach ($karyawan as $k) { ?>
                                                        <option value="<?php echo $k->register ?>"><?php echo $k->nama ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Tahun Penilaian <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="tahun" class="form-control">
                                                    <?php
                                                        for($i=date('Y'); $i>=date('Y')-32; $i-=1){ ?>
                                                            <option value="<?php echo $i ?>"><?php echo $i ?> </option>";
                                                    <?php    
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <h3>Pendapatan</h3>
                                        <input type="hidden" value="<?php echo $kode_pendapatan ?>" name="kode_pendapatan">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Basic <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="basic" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Jabatan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="jabatan" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Prestasi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="prestasi" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-2 col-form-label" for="val-deskripsi">Transportasi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="transportasi" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Perumahan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="perumahan" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Other <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="other" class="form-control" required="">
                                            </div>
                                        </div>
                                        <h3>Kehadiran</h3>
                                        <input type="hidden" value="<?php echo $kode_kehadiran ?>" name="kode_kehadiran">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Absen <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="absen" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Izin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="izin" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Cuti Haid <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="cuti_haid" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Cuti Hamil <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="cuti_hamil" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Dispensasi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="dispensasi" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Surat Dokter <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="surat_dokter" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Cuti Tahunan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="cuti_tahunan" class="form-control" required="">
                                            </div>
                                        </div>

                                        <h3>Warning</h3>
                                        <input type="hidden" value="<?php echo $kode_warning ?>" name="kode_warning">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-deskripsi">Warning <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="warning" class="form-control">
														<option value="0">SP 0</option>
                                                        <option value="1">SP 1</option>
                                                        <option value="2">SP 2</option>
                                                        <option value="3">SP 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h3>Penilaian</h3>
                                        <input type="hidden" value="<?php echo $kode_penilaian ?>" name="kode_penilaian">

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Conditue <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="conditue" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Skill <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="skill" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Responsibility <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="responsibility" class="form-control" required="">
                                            </div>
                                        </div>
                                        <h3>Usulan</h3>
                                        <input type="hidden" value="<?php echo $kode_usulan ?>" name="kode_usulan">

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Basic <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="usulan_basic" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Prestasi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="usulan_prestasi" class="form-control" required="">
                                            </div>
                                            <label class="col-lg-2 col-form-label" for="val-deskripsi">Other <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-2">
                                                <input type="number" name="usulan_other" class="form-control" required="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-lg-3 ml-auto">
                                                <a href="<?php echo base_url() ?>admin/penilaian"><button type="button" class="btn btn-danger">
                                                  Cancel
                                                </button></a>
                                                <button type="submit" id="btnSubmit" class="btn btn-primary col-7">Submit</button>
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