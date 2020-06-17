<?php
include_once "Vogel.class.php";
include_once "Vis.class.php";

class Freek
{
    public function geefEten($dier) {
        $dier -> eet();
    }

    public function brengNaarBed($dier) {
        $dier -> slaap();
    }
}

$vis = new Vis();
$vogel = new Vogel();
$freek = new Freek();

$freek->geefEten($vis);
$freek->geefEten($vogel);
$freek->brengNaarBed($vis);
$freek->brengNaarBed($vogel);

?>