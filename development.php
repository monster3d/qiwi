<?php

include "vendor/autoload.php";

$qiwi = new \Qiwi\Qiwi('token');

$qiwi->get();
