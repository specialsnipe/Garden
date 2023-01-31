<?php

require_once('../vendor/autoload.php');

use App\Garden\Garden;
use App\Garden\HarvestRepositoryArray;

$harvestRepository = new HarvestRepositoryArray();

$garden = new Garden($harvestRepository);
$garden->plantTrees();
$garden->harvestRipening();
$garden->getHarvest();

