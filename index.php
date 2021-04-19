<?php
require "core/app.php";

const __ROOT__ = __DIR__.'\\';

use Core\App;

$app = App::make('Controller');

//echo $app->index();

print_r($app->index());



//$b1 = App::make('Services\a\b1');
//print_r($b1->index());

