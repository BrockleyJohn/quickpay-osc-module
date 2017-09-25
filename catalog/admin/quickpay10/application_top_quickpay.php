<?php
include('quickpay10.php');

include($_SERVER["DOCUMENT_ROOT"].DIR_WS_CATALOG.DIR_WS_CLASSES.'QuickpayApi.php');
	$api= new QuickpayApi();

	$api->setOptions(MODULE_PAYMENT_QUICKPAY_ADVANCED_USERAPIKEY);


?>