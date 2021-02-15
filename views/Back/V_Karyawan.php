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
                                <h4 class="card-title">Data Karyawan</h4>
                                </div>
                                <div style="float: right;">                               
                                <a href="<?php echo base_url() ?>admin/karyawan/add" class="btn btn-primary"><span class="fa fa-plus-square" style="float: right;">Tambah Karyawan</span></a>
                                </div>
                             </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Departemen</th>
                                                <th>Work Group</th>
                                                <th>No. Register</th>
                                                <th>Nama</th>
                                                <th>S (Gender)</th>
                                                <th>Masa Kerja</th>
                                                <th>Usia</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php foreach ($karyawan as $u) { ?>
                                            <tr id="<?php echo $u->register ?>">
                                                <td><?php echo $u->dept ?></td>
                                                <td><?php echo $u->w ?></td>
                                                <td><?php echo $u->register ?></td>
                                                <td><?php echo $u->nama ?></td>
                                                <td><?php echo $u->s ?></td>
                                                <td><?php echo $u->masa_kerja ?></td>
                                                <td><?php echo $u->usia ?></td>
                                                <td><a href="<?php echo base_url('admin/karyawan/edit/'.$u->register) ?>" class="btn btn-warning text-white"><span class="fa fa-pencil"></span></a>
                                                <a class="btn btn-danger remove" data-toogle="tooltip" data-placement="button" title="Hapus Data!"><span class="fa fa-trash text-white"></span></a>
                                                </td>
                                            </tr>
                                              <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Departemen</th>
                                                <th>Work Group</th>
                                                <th>No. Register</th>
                                                <th>Nama</th>
                                                <th>S (Gender)</th>
                                                <th>Masa Kerja</th>
                                                <th>Usia</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
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
             url: '<?php echo base_url() ?>admin/karyawan/hapus/'+id,
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