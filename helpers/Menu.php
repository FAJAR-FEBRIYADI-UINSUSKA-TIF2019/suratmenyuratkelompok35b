<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home fa-2x"></i>'
		),
		
		array(
			'path' => 'suratmasuk', 
			'label' => 'Surat Masuk', 
			'icon' => '<i class="fa fa-envelope fa-2x"></i>'
		),
		
		array(
			'path' => 'disposisi', 
			'label' => 'Disposisi', 
			'icon' => '<i class="fa fa-forward fa-2x"></i>'
		),
		
		array(
			'path' => 'suratkeluar', 
			'label' => 'Surat Keluar', 
			'icon' => '<i class="fa fa-paper-plane fa-2x"></i>'
		),
		
		array(
			'path' => 'legalisir', 
			'label' => 'Legalisir', 
			'icon' => '<i class="fa fa-legal fa-2x"></i>'
		),
		
		array(
			'path' => 'pengguna', 
			'label' => 'Pengguna', 
			'icon' => '<i class="fa fa-user fa-2x"></i>'
		)
	);
		
	
	
			public static $level = array(
		array(
			"value" => "kepsek", 
			"label" => "kepsek", 
		),
		array(
			"value" => "kepala", 
			"label" => "kepala", 
		),
		array(
			"value" => "staf", 
			"label" => "staf", 
		),
		array(
			"value" => "resepsionis", 
			"label" => "resepsionis", 
		),
		array(
			"value" => "pemohon", 
			"label" => "pemohon", 
		),);
		
			public static $tujuan = array(
		array(
			"value" => "Kepala Tata Usaha", 
			"label" => "Kepala Bagian", 
		),
		array(
			"value" => "Staf", 
			"label" => "Staf", 
		),
		array(
			"value" => "Bendahara", 
			"label" => "Bendahara", 
		),
		array(
			"value" => "Sekretaris", 
			"label" => "Sekretaris", 
		),);
		
			public static $sifat_surat = array(
		array(
			"value" => "Segera", 
			"label" => "Segera", 
		),
		array(
			"value" => "Rahasia", 
			"label" => "Rahasia", 
		),);
		
}