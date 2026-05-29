<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MetaPixelHook
{
	private $excludedSegments = array(
		'admin',
		'admindashbord',
		'adminlogout',
		'causesverification',
		'transactionverification',
		'contact_submissions',
	);

	public function inject($params = NULL)
	{
		$CI =& get_instance();
		$segment = strtolower((string) $CI->uri->segment(1));

		if (in_array($segment, $this->excludedSegments, TRUE))
		{
			return;
		}

		$output = $CI->output->get_output();

		if ($CI->output->get_content_type() !== 'text/html'
			|| $output === ''
			|| stripos($output, '</head>') === FALSE
			|| strpos($output, "fbq('init', '1619952105910672')") !== FALSE)
		{
			return;
		}

		$pixel = $CI->load->view('meta_pixel', array(), TRUE);
		$output = preg_replace('/<\/head>/i', $pixel.PHP_EOL.'</head>', $output, 1);

		$CI->output->set_output($output);
	}
}
