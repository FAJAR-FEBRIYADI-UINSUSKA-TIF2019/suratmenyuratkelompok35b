<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pengguna_username_value_exist Model Action
     * @return array
     */
	function pengguna_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * pengguna_email_value_exist Model Action
     * @return array
     */
	function pengguna_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * disposisi_agenda_surat_masuk_option_list Model Action
     * @return array
     */
	function disposisi_agenda_surat_masuk_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT no_agenda AS value,nomor_surat AS label FROM suratmasuk";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_suratmasuk Model Action
     * @return Value
     */
	function getcount_suratmasuk(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM suratmasuk";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_suratkeluar Model Action
     * @return Value
     */
	function getcount_suratkeluar(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM suratkeluar";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_legalisir Model Action
     * @return Value
     */
	function getcount_legalisir(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM legalisir";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_disposisi Model Action
     * @return Value
     */
	function getcount_disposisi(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM disposisi";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pengguna Model Action
     * @return Value
     */
	function getcount_pengguna(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pengguna";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
