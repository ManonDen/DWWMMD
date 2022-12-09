<?php
require_once "../classes/classeTriangleRectangle.php";
require_once "../classes/classesphere.php";
require_once "../classes/classePave.php";
require_once "../classes/classePyramide.php";

echo("Rectangle : \n");
$rectangle1=new Rectangle(5,10);
$rectangle1->AfficherRectangle($rectangle1);

echo("\n\nRectangle (carré) : \n");
$rectangle2=new Rectangle(5,5);
$rectangle2->AfficherRectangle($rectangle2);

echo("\n\nTriangle Rectangle : \n");
$triangleRectangle=new TriangleRectangle(8,5);
$triangleRectangle->AfficherTriangle($triangleRectangle);

echo("\n\nCercle : ");
$cercle=new Cercle(8);
$cercle->AfficherCercle($cercle);

echo("\n\nPave : ");
$pave=new Pave(5,10,7);
$pave->afficher($pave);

echo("\n\nPyramide rectangulaire : ");
$pyramide=new Pyramide(4,3,4);
$pyramide->afficher($pyramide);

echo("\n\nSphère : ");
$sphere=new Sphere(8);
$sphere->afficher($sphere);

?>