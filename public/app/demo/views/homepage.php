<?php

class homepageView extends \Loader {

	public function index($view, $data) {

		$body =$this->view(APP.APPLICATION."/views/snippets/".$view.'.html',$data);
		//echo $body;
	}
}
?>
