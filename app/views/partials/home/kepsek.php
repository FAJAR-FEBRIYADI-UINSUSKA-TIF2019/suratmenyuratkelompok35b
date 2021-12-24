<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >Sistem Informasi Surat Menyurat MTSN 10 Pekanbaru</h4>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_suratmasuk();  ?>
                    <a class="animated zoomIn record-count card bg-warning text-white"  href="<?php print_link("suratmasuk/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-envelope fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Surat Masuk</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_suratkeluar();  ?>
                    <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("suratkeluar/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-paper-plane fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Surat Keluar</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_legalisir();  ?>
                    <a class="animated zoomIn record-count card bg-danger text-white"  href="<?php print_link("legalisir/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-legal fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Legalisir</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_disposisi();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("disposisi/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="fa fa-forward fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Disposisi</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
