<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* Google Analytics
*
* Inserts google analytics tracking code into view
* If a tracking code is passed in, then it will use that uacct info
* Otherwise, it will use the value defined in the google.php config file
* If both values do not exist, nothing will be inserted.
*
* @last updated:	2008-2-20
* @access:			public
* @param:			string
* @return:			string
*/
function google_analytics($trackpage = '', $uacct = '')
{
    
    $CI =& get_instance();
    if( $uacct != '' || $CI->config->item('google_uacct') != '' ){

    	$google_analytics_code = '
				<script type="text/javascript">
					var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
					document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
				</script>
				<script type="text/javascript">
					var pageTracker = _gat._getTracker("';

        if($CI->config->item('google_uacct') != ''){
            
            // Found config setting
            $google_analytics_code .= $CI->config->item('google_uacct');
            
        }
        
        // In the event that both the google_uacct variable is set, AND we find that the $uacct
        // Variable is passed in, the return variable $google_analytics_code will be overwritten
        // with the $uacct variable taken priority.
        
        if($uacct != ''){
            
            // Found $uacct variable data
            $google_analytics_code .= $uacct;
            
        }
        
        $google_analytics_code .= '");
					pageTracker._initData();
					pageTracker._trackPageview(';

        if($trackpage != ''){
            
            // Found trackPageview data
            $google_analytics_code .= '"' . $trackpage . '"';
            
        }

		$google_analytics_code .= ');
				</script>';

            return $google_analytics_code;
    
    }
    
}

?>