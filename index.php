<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
<<<<<<< HEAD
<h1> Hello World! </h1>
=======
<h1> Hello World, </h1>
>>>>>>> e8fd06b595a6068502c4cd3a5f27e33413595179
?>
Something is wrong with the XAMPP installation :-(
