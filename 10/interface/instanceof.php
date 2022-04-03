<?php
require_once 'Triangle.php';
// require_once 'Square.php';

$figs = [];
$figs[] = new Triangle(10, 5);
$figs[] = new Triangle(20, 5);
$figs[] = new Triangle(50, 5);

foreach ($figs as $fig) {
    if ($fig instanceof IFigure) {
        print get_Class($fig) . ":" . $fig->getArea() . " - ";
    }
}
