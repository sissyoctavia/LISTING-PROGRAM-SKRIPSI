<?php $this->load->view('Back/Parts/V_Header') ?>
<?php $this->load->view('Back/Parts/V_Navigation') ?>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <?php $tanggal = date('y-M-d') ?>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Uang Masuk</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_masuk ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Uamg Keluar</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_keluar ?></h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="row">
                <?php foreach ($kusioner as $k) { ?>
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kusioner - Pertanyaan "<?php echo $k->pertanyaan ?>"<a href="<?php echo base_url() ?>admin/kusioner" class="btn btn-info" style="float:right;"><span class="fa fa-info-circle"></span> Detail Data</a></h4>
                                <canvas id="doughutChart" width="500" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>


                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <?php $tanggal = date('d/m/Y') ?>
                                <h4>Jadwal Kegiatan Tanggal - <?php echo $tanggal ?> </h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                        <?php if($jadwal == null){ ?>
                                            <p>Tidak Ada Jadwal Kegiatan Hari Ini</p>
                                               <?php 
                                                 }else{ ?>    
                                        <thead>
                                                <tr>
                                                <th>Jenis</th>
                                                <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($jadwal as $j) { ?>
                                                <tr>
                                                    <td><?php echo $j->jenis ?></td>
                                                    <td><?php echo $j->deskripsi ?></td>
                                                </tr>
                                                <?php 
                                                }
                                            } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Keluhan Yang Belum Di Perbaiki</h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                        <?php if($keluhan == null){ ?>
                                            <p>Semua Keluhan Telah Diperbaiki</p>
                                               <?php 
                                                 }else{ ?>
                                            <thead>
                                                <tr>
                                                <th>Dari</th>
                                                <th>Keluhan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php foreach ($keluhan as $j) { ?>
                                                        <tr>
                                                        <td><?php echo $j->nama ?></td>
                                                        <td><?php echo $j->pesan ?></td>
                                                    </tr>    
                                               <?php
                                                }
                                            } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Direkomendasikan Untuk di Perbaiki</h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                <th>Pertanyaan</th>
                                                <th>Jawaban</th>
                                                <th>Jumlah Jawaban</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php foreach ($jawaban as $j) { ?>
                                                        <tr>
                                                        <td><?php echo $j->pertanyaan ?></td>
                                                        <td><?php echo $j->jawaban ?></td>
                                                        <td><?php echo $j->jumlah_jawaban ?></td>
                                                    </tr>    
                                               <?php
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                

                

 
                
               </div> 
            <!-- #/ container -->
        </div>
<?php $this->load->view('Back/Parts/V_Footer') ?>

<script>
    var ctx = document.getElementById("doughutChart");
    ctx.height = 150;
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [<?php if($baik_sekali != 0){echo $baik_sekali;} ?>, <?php if($baik != 0){echo $baik;} ?>, <?php if($cukup_baik != 0){echo $cukup_baik;} ?>, <?php if($kurang_baik != 0){echo $kurang_baik;} ?>, <?php if($kurang_baik_sekali != 0){echo $kurang_baik_sekali;} ?>],
                backgroundColor: [
                    "rgba(117, 113, 249,0.9)",
                    "rgba(117, 113, 249,0.7)",
                    "rgba(117, 113, 249,0.5)",
                    "rgba(117, 113, 249,0.3)",
                    "rgba(144,	104,	190,0.07)"
                ],
                hoverBackgroundColor: [
                    "rgba(117, 113, 249,0.9)",
                    "rgba(117, 113, 249,0.7)",
                    "rgba(117, 113, 249,0.5)",
                    "rgba(117, 113, 249,0.3)",
                    "rgba(144,	104,	190,0.7)"
                ]

            }],
            labels: [
                "Baik Sekali",
                "Baik",
                "Cukup Baik",
                "Kurang Baik",
                "Kurang Baik Sekali"
            ]
        },
        options: {
            responsive: true,
        }
    });
</script>