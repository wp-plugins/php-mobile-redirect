<?php
	
	add_action('init', 'pmr_mobile_redirect');
	
	function pmr_mobile_redirect(){
		
		global $pmr_options;
		
		if ($pmr_options['enabled'] == true)
		{
			$detect = new Mobile_Detect();
			 
			if ($detect->isMobile() && isset($_COOKIE[$pmr_options['mobile_cookie']]))
			{
				$detect = "false";		
			}
			elseif ($detect->isiPad())
			{
				$detect = "false";
			}
			elseif ($detect->isMobile())
			{
				header('Location: http://' . $pmr_options['mobile_url']);
				exit;
			}
		}
	}