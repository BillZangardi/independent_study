<?php
	//echo "TEST";
	//echo json_encode($_POST['application']);
	foreach($_POST['application'] as $item)
	{
		shell_exec("rm -rf data/backups/temp/apps/" . $item);
	  	//echo $item . "<br>";
	}
	$execute =  'sh ' . 'packAB.sh 2>&1';
    $output = shell_exec($execute);
    header( 'Location: backups.php' ) ;

?>