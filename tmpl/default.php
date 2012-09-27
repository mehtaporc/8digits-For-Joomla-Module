<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

echo '<script type="text/javascript">';
echo 'var _trackingCode =' ;
echo ' "';
echo $htmlscript;
echo '"';
echo ";";
echo	'(function() {
		var wa = document.createElement("script"); wa.type = "text/javascript"; wa.async = true;
		wa.src = ("https:" == document.location.protocol ? "https:// " : "http://") + "tr2-static.8digits.com/js/wm.js?"+ Math.random();
		var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(wa, s);
	})();
</script>';
?>