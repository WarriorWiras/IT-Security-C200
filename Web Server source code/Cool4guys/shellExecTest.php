<?php

include("dbFunctions.php");
?>
<?php {
include("CommandInjection.php");
if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'file' ];
// Set blacklist
	$substitutions = array(
		'&&' => '',
		';'  => '',
	);

	// Remove any of the charactars in the array (blacklist).
	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'cat  ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'cat ' . $target );
	}

	// Feedback for the end user
	echo "<pre>{$cmd}</pre>";
}
}

?>
