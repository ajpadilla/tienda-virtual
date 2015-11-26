<?php 
	$diccionary = array();

	function get_template($html_template="get")
	{
		$file = '../site_media/html/'.$html_template.'.html';
		$template = file_get_contents($file);
		return $template;
	}

	function render_dinamic_data($html, $data)
	{
		foreach ($data as $key => $value)
		{
			$html = str_replace('{'.$key.'}', $value,$html);
		}
		return $html;
	}

	function return_view($view, $data=array())
	{
		global $diccionary;
		$html = get_template('index_template');
		print $html;
	}
?>