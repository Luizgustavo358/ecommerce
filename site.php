<?php

use \Hcode\Page;

// index
$app->get('/', function() {
    $page = new Page();

	$page->setTpl("index");
});

?>