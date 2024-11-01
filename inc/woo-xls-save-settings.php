<?php 
	function viwxe_wxe_save_woo_products(){
		$products = array();
		$products = $_REQUEST['products'];
		if( empty ( $products ) )
			update_option( 'wxe_selected_products', '' );
		else
			update_option( 'wxe_selected_products', $products );
		die;
	}
	
	function viwxe_wxe_save_woo_category(){
		$categories = array();
		$categories = $_REQUEST['categories'];
		if( empty ( $categories ) )
			update_option( 'wxe_selected_categories', '' );
		else
			update_option( 'wxe_selected_categories', $categories );
		die;
	}
?>