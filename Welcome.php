<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		for($i = 0; $i < 11; $i++)
    	echo "<h2>Ini perulangan ke-$i</h2>";
	}
}
