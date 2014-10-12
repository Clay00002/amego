<?php
require_once('lib/smtemplate.php');



$tpl = new SMTemplate();

$data = array
    (
        'title'    => 'this is title',
        'footer'   => 'this is footer',
	'receiver' => 'JR',
	'date'     => time(),
    );

$tpl->render('body', $data);
?>