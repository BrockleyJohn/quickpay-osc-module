<?php
 $oID = '';
 
if (tep_not_null($action)) {
	  $oID = $_GET['oID'];
      $amount = $_POST['amount_big'] . $_POST['amount_small'];
  
    switch ($action) {

        case 'quickpay_reverse':
          
            $result = get_quickpay_reverse($oID);

            tep_redirect(tep_href_link(FILENAME_ORDERS, tep_get_all_get_params(array('action')) . 'action=edit'));
            break;

        case 'quickpay_capture':
         
            if (!isset($_POST['amount_big']) || $_POST['amount_big'] == '' || $_POST['amount_big'] == 0) {
                tep_redirect(tep_href_link(FILENAME_ORDERS, tep_get_all_get_params(array('action')) . 'action=edit'));
            }
		    
		    $result = get_quickpay_capture($oID, $amount);

            tep_redirect(tep_href_link(FILENAME_ORDERS, tep_get_all_get_params(array('action')) . 'action=edit'));
            break;
        case 'quickpay_credit':
            
			
			$result = get_quickpay_credit($oID, $amount);

            tep_redirect(tep_href_link(FILENAME_ORDERS, tep_get_all_get_params(array('action')) . 'action=edit'));
            break;

    }
}


?>
