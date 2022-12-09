<?php
require_once "../classes/classeTriangleRectangle.php";
require_once "../classes/classeCercle.php";
require_once "../classes/classePave.php";

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

?>