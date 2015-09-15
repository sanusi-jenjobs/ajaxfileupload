<?php
	$fileName = explode( '.', $_POST['filename'] );
	$fileNameExtension = end( $fileName );
	
	$handle2 = fopen( time().".$fileNameExtension", 'w' );
	$b = fwrite( $handle2, base64_decode( $_POST['base64Str'] ) );
	fclose( $handle2 );
?>