<?php
	$fileName = explode( '.', $_POST['file_name'] );
	$fileNameExtension = end( $fileName );
	$newFileName = time().".".$fileNameExtension;
	echo $newFileName;
	$handle2 = fopen( $newFileName, 'w' );
	$b = fwrite( $handle2, base64_decode( $_POST['base64Str'] ) );
	fclose( $handle2 );
?>