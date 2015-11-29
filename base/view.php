<?php 
	$diccionary = array(
		'sing' => array(
			'VIEW_SET_USER' => MODULE_USER.VIEW_SET_USER.'/', 
		)
	);

	function get_template($html_template="get")
	{
		$file = '../site_media/html/'.$html_template.'.php';
		$template = file_get_contents($file);
		return $template;
	}

	function render_dinamic_data($html, $data)
	{
		foreach ($data as $key => $value)
		{
			$html = str_replace('{'.$key.'}', $value, $html);
		}
		return $html;
	}

	function return_view($view, $data=array())
	{
		global $diccionary;
		$html = get_template('index_template');
		$html = str_replace('{content}', get_template($view), $html);
		$html = render_dinamic_data($html, $diccionary['sing']);
		print $html;
	}
?>