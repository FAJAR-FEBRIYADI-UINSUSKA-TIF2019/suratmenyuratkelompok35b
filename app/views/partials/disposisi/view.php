<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("disposisi/add");
$can_edit = ACL::is_allowed("disposisi/edit");
$can_view = ACL::is_allowed("disposisi/view");
$can_delete = ACL::is_allowed("disposisi/delete");
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
                    <h4 class="record-title">View  Disposisi</h4>
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
                        $rec_id = (!empty($data['id_disposisi']) ? urlencode($data['id_disposisi']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id_disposisi">
                                        <th class="title"> Id Disposisi: </th>
                                        <td class="value"> <?php echo $data['id_disposisi']; ?></td>
                                    </tr>
                                    <tr  class="td-agenda_surat_masuk">
                                        <th class="title"> Agenda Surat Masuk: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/disposisi_agenda_surat_masuk_option_list'); ?>' 
                                                data-value="<?php echo $data['agenda_surat_masuk']; ?>" 
                                                data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="agenda_surat_masuk" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['agenda_surat_masuk']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tujuan">
                                        <th class="title"> Tujuan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $tujuan); ?>' 
                                                data-value="<?php echo $data['tujuan']; ?>" 
                                                data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="tujuan" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['tujuan']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-isi">
                                        <th class="title"> Isi: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['isi']; ?>" 
                                                data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="isi" 
                                                data-title="Enter Isi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['isi']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-batas_waktu">
                                        <th class="title"> Batas Waktu: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['batas_waktu']; ?>" 
                                                data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="batas_waktu" 
                                                data-title="Enter Batas Waktu" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['batas_waktu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-sifat_surat">
                                        <th class="title"> Sifat Surat: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $sifat_surat); ?>' 
                                                data-value="<?php echo $data['sifat_surat']; ?>" 
                                                data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="sifat_surat" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['sifat_surat']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-catatan">
                                        <th class="title"> Catatan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-pk="<?php echo $data['id_disposisi'] ?>" 
                                                data-url="<?php print_link("disposisi/editfield/" . urlencode($data['id_disposisi'])); ?>" 
                                                data-name="catatan" 
                                                data-title="Enter Catatan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['catatan']; ?> 
                                            </span>
                                        </td>
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
