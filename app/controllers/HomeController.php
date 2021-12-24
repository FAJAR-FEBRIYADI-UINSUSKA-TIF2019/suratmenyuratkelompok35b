<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		if(strtolower(USER_ROLE) == 'kepsek'){
			$this->render_view("home/kepsek.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'kepala'){
			$this->render_view("home/kepala.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'resepsionis'){
			$this->render_view("home/resepsionis.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'pemohon'){
			$this->render_view("home/pemohon.php" , null , "main_layout.php");
		}
		elseif(strtolower(USER_ROLE) == 'staf'){
			$this->render_view("home/staf.php" , null , "main_layout.php");
		}
		else{
			$this->render_view("home/index.php" , null , "main_layout.php");
		}
	}
}
