<?php

use App\Api\Nps;

require 'vendor/autoload.php';


$nps = new Nps();
$nps->getGoogle();
