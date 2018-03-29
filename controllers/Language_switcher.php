<?php
/**
*STEPS TO USE LANGUAGE FACILITY :-
*
*@ ADD : applications/languages->lists of languages
*@ CONSTRUCT : $this->lang->load('calendar','arabic');
*@ START : application/config/autoload->$autoload['libraries'] = array('session') - Not necessary in beginning;
* 
*/ 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /**
 * This is to teach how to bulid multilanguage website
 */
 class Language_switcher extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();

 		//$this->load->model('language_switcher_model');

 		//$this->lang->load('calendar','hindi');
  	}

 	public function index()
 	{

 		$this->load->view('language/language_switcher');
 		//$this->language_model->select_language('hindi');
 		

 	}  

 	/*
 	*Language page will redirect here
 	*/
 	public function l()
 	{
 		if(isset($_POST['language']))
	 	{
	 		$language = $_POST['language'] ; 
	 		$this->language_switcher_model->load_lang_all_files($language);
	 		$this->language_switcher_model->select_language($language);
	 		$this->load->view('language/language_switcher');
	 	}
	 		echo $this->lang->line('cal_su').'</br>';
			echo lang('cal_su').'</br>';

			echo $this->lang->line('email_must_be_array').'</br>';
			echo lang('email_must_be_array').'</br>';
 	}


 }