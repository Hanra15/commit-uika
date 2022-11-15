<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }
	public function loadTemplate($page_content)
	{

        $data["page_content"] = $page_content["page"];
        $data["css"] = $page_content["css"];
        $data["js"] = $page_content["js"];
        $data["title"] = $page_content["title"];

        $data["data"] = $page_content["data"]; 
        
        $this->load->view("templates/app", $data);  
    }
}
