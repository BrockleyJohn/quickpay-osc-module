<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script language="javascript"><!-- 
    function qp_check_confirm(confirm_text) {
        return confirm(confirm_text);
    }

    function qp_check_capture(amount_big, amount_small, confirm_text) {

			
        if (Number(document.transaction_form.amount_big.value) == Number(amount_big) && Number(document.transaction_form.amount_small.value) == Number(amount_small)) {
            return true;
        } else {
            return confirm("<?php echo CONFIRM_CAPTURE; ?>");
        }
    }
    //--></script>