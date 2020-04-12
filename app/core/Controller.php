<?php 

class Controller {
	public function view($view, $data = []) //nilai data default dibuat array agar fleksibel, ada data atau enggak agar gak error.
	{
		require_once '../app/views/' . $view . '.php';
	}
}