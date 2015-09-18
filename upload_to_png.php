<?php
	$newFileName = time().".png";
	$handle2 = fopen( $newFileName, 'w' );
	$b = fwrite( $handle2, base64_decode( preg_replace( '/^data\:image\/png\;base64\,/', '', $_POST['base64Str'] ) ) );
	fclose( $handle2 );
?>