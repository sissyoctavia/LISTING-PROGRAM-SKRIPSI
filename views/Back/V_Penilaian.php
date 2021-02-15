<?php
$this->load->view("Back/Parts/V_Header");
$this->load->view("Back/Parts/V_Navigation");
?>

    <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <div>
                                <div style="float: left;">
                                <h4 class="card-title">Data Penilaian</h4>
                                </div>
                                <div style="float: right;">                               
                                <a href="<?php echo base_url() ?>C_Penilaian/export" class="btn btn-success text-white"><span class="fa fa-plus-square" style="float: right;"> Export</span></a>
                                <?php if($this->session->userdata('hak_akses') == 'Leader'){ ?>
                                  <a href="<?php echo base_url() ?>admin/penilaian/add" class="btn btn-primary"><span class="fa fa-plus-square" style="float: right;">Tambah Penilaian</span></a>
                                <?php } ?>
                                </div>
                             </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                          <th rowspan="2">Action</th>
                                          <th rowspan="2" class="text-center">Nama Karyawan</th>
                                          <th rowspan="2" class="text-center">Departemen</th>
                                          <th rowspan="2" class="text-center">No. Reg</th>
                                          <th rowspan="2" class="text-center">Masa Kerja (Tahun)</th>
                                          <th colspan="7" class="text-center">Pendapatan Tahun</th>
                                          <th colspan="7" class="text-center">Data Kehadiran</th>
                                          <th rowspan="2" class="text-center">Warning</th>
                                          <th colspan="5" class="text-center">Penilaian Tahun</th>
                                          <th colspan="4" class="text-center">Usulan</th>
                                        </tr>
                                        <tr>
                                            <th>Basic</th>
                                            <th>Jabatan</th>
                                            <th>Prestasi</th>
                                            <th>Transportasi</th>
                                            <th>Housing</th>
                                            <th>Other</th>
                                            <th>Total</th>
                                            <th>A</th>
                                            <th>I</th>
                                            <th>H</th>
                                            <th>L</th>
                                            <th>D</th>
                                            <th>S</th>
                                            <th>T</th>
                                            <th>CN</th>
                                            <th>RS</th>
                                            <th>SK</th>
                                            <th>AVG</th>
                                            <th>GRD</th>
                                            <th>Basic</th>
                                            <th>Prestasi</th>
                                            <th>Other</th>
                                            <th>Promo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i = 0;
                                            foreach ($penilaian as $p) { ?>
                                                <?php $total[] = $p->basic + $p->jabatan + $p->prestasi + $p->transportasi + $p->perumahan + $p->other ?>
                                                <?php $avg[] = ($p->conditue + $p->responsibility + $p->skill) / 3 ?>
                                              <tr id="<?php echo $p->det_id ?>" class="text-center">
                                                <td><a class="btn btn-danger remove text-white" data-toogle="tooltip" data-placement="button" title="Hapus Data!"><span class="fa fa-trash"></span></a></td>
                                                <td><?php echo $p->nama ?></td>
                                                <td><?php echo $p->dept ?></td>
                                                <td><?php echo $p->register ?></td>
                                                <td><?php echo $p->masa_kerja ?></td>
                                                <td><?php echo $p->basic ?></td>
                                                <td><?php echo $p->jabatan ?></td>
                                                <td><?php echo $p->prestasi ?></td>
                                                <td><?php echo $p->transportasi ?></td>
                                                <td><?php echo $p->perumahan ?></td>
                                                <td><?php echo $p->other ?></td>
                                                <td><?php echo $total[$i] ?></td>
                                                <td><?php echo $p->absen ?></td>
                                                <td><?php echo $p->izin ?></td>
                                                <td><?php echo $p->cuti_haid ?></td>
                                                <td><?php echo $p->cuti_hamil ?></td>
                                                <td><?php echo $p->dispensasi ?></td>
                                                <td><?php echo $p->surat_dokter ?></td>
                                                <td><?php echo $p->cuti_tahunan ?></td>
                                                <td><?php echo "SP ".$p->warning ?></td>
                                                <td><?php echo $p->conditue ?></td>
                                                <td><?php echo $p->responsibility ?></td>
                                                <td><?php echo $p->skill ?></td>
                                                <td><?php echo $avg[$i] ?></td>
                                                <td><?php if ($avg[$i] >= 81 ){
                                                  echo $grade = "A";
                                                }else if($avg[$i] >= 71){
                                                  echo $grade = "B";
                                                }else{
                                                  echo $grade = "C";
                                                } ?></td>
                                                <td><?php echo $p->usulan_basic ?></td>
                                                <td><?php echo $p->usulan_prestasi ?></td>
                                                <td><?php echo $p->usulan_other ?></td>
                                                <td><?php if($grade == "A"){
                                                    echo "3%";
                                                }else if($grade == "B"){
                                                  echo "2%";
                                                }else if($grade == "C"){
                                                  echo "1%";
                                                } ?></td>
                                              </tr>
                                              <?php 
                                              $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                              <div>
                                <div style="float: left;">
                                <h4 class="card-title">Data Ranking</h4>
                                </div>
                             </div>
                             <?php if($this->session->userdata('hak_akses') == "HRD"){ ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                          <th class="text-center">Nama Karyawan</th>
                                          <th class="text-center">Ranking</th>
                                        </tr>
                                        <tbody>
                                            <?php 
                                            $i = 1;
                                            foreach ($ranking as $a) { 
                                              ?>
                                                <td class="text-center"><?php echo $a->nama ?></td>
                                                <td class="text-center"><?php echo $i ?></td>
                                              </tr>
                                              <?php 
                                              $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


            <!-- #/ container -->
        </div>
        </div>
          </div>
         <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?php echo base_url() ?>admin/penilaian/hapus/'+id,
             type: 'delete',
             error: function() {
                alert('Something is wrong'+id);
             },
             success: function(data) {
                  $("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
    
</script>

<?php 
  $this->load->view("Back/Parts/V_Footer");
 ?> 