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
                                <h4 class="card-title">Data Penilaian <?php echo $dept; ?></h4>
                                </div>
                                <div style="float: right;">
                                <a class="btn btn-success remove text-white" id="departemen" isi="<?php echo $dept ?>"><span class="fa fa-check-square-o" style="float: right;"> Approve</span></a>
                                </div>
                             </div>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                          <th rowspan="2" class="text-center">Nama Karyawan</th>
                                          <th rowspan="2" class="text-center">Departemen</th>
                                          <th rowspan="2" class="text-center">No. Reg</th>
                                          <th rowspan="2" class="text-center">Masa Kerja</th>
                                          <th colspan="7" class="text-center">Pendapatan Tahun <?php echo $tahun ?></th>
                                          <th colspan="7" class="text-center">Data Kehadiran</th>
                                          <th rowspan="2" class="text-center">Warning</th>
                                          <th colspan="5" class="text-center">Penilaian Tahun <?php echo $tahun ?></th>
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
                                            <?php foreach ($penilaian as $p) { ?>
                                              <tr id="<?php echo $p->det_id ?>" class="text-center">
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
                                                <?php $total = $p->basic + $p->jabatan + $p->prestasi + $p->transportasi + $p->perumahan + $p->other ?>
                                                <td><?php echo $total ?></td>
                                                <td><?php echo $p->absen ?></td>
                                                <td><?php echo $p->izin ?></td>
                                                <td><?php echo $p->cuti_haid ?></td>
                                                <td><?php echo $p->cuti_hamil ?></td>
                                                <td><?php echo $p->dispensasi ?></td>
                                                <td><?php echo $p->surat_dokter ?></td>
                                                <td><?php echo $p->cuti_tahunan ?></td>
                                                <td><?php echo $p->warning ?></td>
                                                <td><?php echo $p->conditue ?></td>
                                                <td><?php echo $p->responsibility ?></td>
                                                <td><?php echo $p->skill ?></td>
                                                <?php $avg = ($p->conditue + $p->responsibility + $p->skill) / 3 ?>
                                                <td><?php echo $avg ?></td>
                                                <td><?php if ($avg >= 81 ){
                                                  echo "A";
                                                }else if($avg >= 71){
                                                  echo "B";
                                                }else{
                                                  echo "C";
                                                } ?></td>
                                                <td><?php echo $p->usulan_basic ?></td>
                                                <td><?php echo $p->usulan_prestasi ?></td>
                                                <td><?php echo $p->usulan_other ?></td>
                                                <td><?php echo $p->usulan_promo ?></td>
                                              </tr>
                                              <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
          </div>
          <div>
          
          </div>
         <script type="text/javascript">
    $(".remove").click(function(){
      var id = $("#departemen").attr("isi");
    
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, approve it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
             url: '<?php echo base_url() ?>C_Penilaian/approve/'+id,
             type: 'delete',
             error: function() {
                alert('Something is wrong '+id);
             },
             success: function(data) {
                  swal("Approved!", "Your imaginary file has been approved.", "success");
                  window.location.href='<?php echo base_url() ?>C_Penilaian/approve/'+id;
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