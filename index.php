<?php
require_once('lib/smtemplate.php');



$tpl = new SMTemplate();

$data = array
    (
	'receiver' => 'JR',
	'date' => time(),
    );

$tpl->render('home', $data);
?>