<?php  
// INC FILE
session_start(); 
include 'inc/config.php';
include 'inc/function.php';
include 'lib/database/DB.php';
include 'controller/controller.php';

$olx = new Controller();

$page = ( ! empty( $_GET['page'] ) ) ? $_GET['page'] : '' ;

switch ( $page ) {
	case 'code':
		$mobile  = ( ! empty( $_GET['mobile'] ) ) ? $_GET['mobile'] : '' ;
		$olx->GetCode( $mobile );
		break;
	case 'check_code':
		$mobile = ( ! empty( $_POST['mobile'] ) ) ? $_POST['mobile'] : '' ;
		$code = ( ! empty( $_POST['code'] ) ) ? $_POST['code'] : '' ;
		$olx->check_code( $mobile , $code );
		break;	
	case 'setting_alert':
		$olx->setting_alert();
		break;		
	case 'set_alert':
		$olx->set_alert();
		break;		
	
	default:
		$olx->index();
}


?>