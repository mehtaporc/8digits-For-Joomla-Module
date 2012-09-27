
<?php

      defined( '_JEXEC' ) or die( 'Restricted access' );

      require_once( dirname(__FILE__).DS.'helper.php' );

      $htmlscript = modEightDigitsModule::getEightDigitsModule( $params );

      require( JModuleHelper::getLayoutPath( 'mod_8digitsForJoomla' ) );

?>