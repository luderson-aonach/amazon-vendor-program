<?php
require_once __DIR__ . "/vendor/autoload.php";

use EDI\Parser;

$c = new Parser();
$c->load("files/edi_example.edi");

var_dump($c->get());
