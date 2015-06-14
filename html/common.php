<?php

/*
 * Comon functions used by mhvtl-gui
 */

function exit_if_tgtd_not_eabled() {

	$filename = '../ENABLE_TGTD_SCSI_TARGET';
	if (!file_exists($filename)) {
		echo "<FORM ACTION=stgt.php><INPUT TYPE=SUBMIT VALUE=Return></FORM>";
		exit("<FONT COLOR='#000000'>STGT Disabled($filename)</FONT>");
	}
}

?>
