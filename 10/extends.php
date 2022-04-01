<?php

require_once 'BusinessPerson.php';

$bp = new BusinessPerson('太郎', ' 山田');
$bp->work();
$bp->show();
