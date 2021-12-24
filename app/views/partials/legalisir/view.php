<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("legalisir/add");
$can_edit = ACL::is_allowed("legalisir/edit");
$can_view = ACL::is_allowed("legalisir/view");
$can_delete = ACL::is_allowed("legalisir/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View Legalisir</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['no_agenda']) ? urlencode($data['no_agenda']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-no_agenda">
                                        <th class="title"> No Agenda: </th>
                                        <td class="value"> <?php echo $data['no_agenda']; ?></td>
                                    </tr>
                                    <tr  class="td-tanggal_legalisir">
                                        <th class="title"> Tanggal Legalisir: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tanggal_legalisir']; ?>" 
                                                data-pk="<?php echo $data['no_agenda'] ?>" 
                                                data-url="<?php print_link("legalisir/editfield/" . urlencode($data['no_agenda'])); ?>" 
                                                data-name="tanggal_legalisir" 
                                                data-title="Enter Tanggal Legalisir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tanggal_legalisir']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nomor_legalisir">
                                        <th class="title"> Nomor Legalisir: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nomor_legalisir']; ?>" 
                                                data-pk="<?php echo $data['no_agenda'] ?>" 
                                                data-url="<?php print_link("legalisir/editfield/" . urlencode($data['no_agenda'])); ?>" 
                                                data-name="nomor_legalisir" 
                                                data-title="Enter Nomor Legalisir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nomor_legalisir']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nama_siswa">
                                        <th class="title"> Nama Siswa: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['nama_siswa']; ?>" 
                                                data-pk="<?php echo $data['no_agenda'] ?>" 
                                                data-url="<?php print_link("legalisir/editfield/" . urlencode($data['no_agenda'])); ?>" 
                                                data-name="nama_siswa" 
                                                data-title="Enter Nama Siswa" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['nama_siswa']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-angkatan_legalisir">
                                        <th class="title"> Angkatan Legalisir: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['angkatan_legalisir']; ?>" 
                                                data-pk="<?php echo $data['no_agenda'] ?>" 
                                                data-url="<?php print_link("legalisir/editfield/" . urlencode($data['no_agenda'])); ?>" 
                                                data-name="angkatan_legalisir" 
                                                data-title="Enter Angkatan Legalisir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['angkatan_legalisir']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-file_surat">
                                        <th class="title"> File Surat: </th>
                                        <td class="value"><?php Html :: page_link_file($data['file_surat']); ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
