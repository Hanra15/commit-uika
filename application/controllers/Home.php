<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->template->load('templates/template','home');
	}
}
