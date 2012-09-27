<?php


class modEightDigitsModule
   {
     function getEightDigitsModule( $params )
      {
        global $mainframe;
        if (trim( $params->get('EightDigitsTrackingCode')) == null) {
			 $htmlscript .= '<span style="color:red;">Please enter valid Tracking Code from 8digits Monitoring.</span><br/>';
			
  		} else {

			$htmlscript .= ''.trim( $params->get( 'EightDigitsTrackingCode' ) );
			
			return $htmlscript;
		}
                
    }
}

?>