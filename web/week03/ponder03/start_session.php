<?php
session_start();
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

class Product {
    public $planet;
    public $radius;
    public $description;
    public $price;
    public $inhabitants;
    public $checkbox_html;
}

$product_array = array();

$mercury = new Product;
$mercury->planet = "Mercury";
$mercury->radius = "1,516 mi";
$mercury->description = "Description";
$mercury->inhabitants = "None";
$mercury->price =3555020; 
$mercury->checkbox_html = "<input type='checkbox' name='products[]' value='Mercury'>";


$venus = new Product;
$venus->planet = "Venus";
$venus->radius = "3,760.4 mi";
$venus->description = "Description";
$venus->inhabitants = "None";
$venus->price = 8817200; 
$venus->checkbox_html = "<input type='checkbox' name='products[]' value='Venus'>";

$earth = new Product;
$earth->planet = "Earth";
$earth->radius = "3,958.8 mi";
$earth->description = "Description";
$earth->inhabitants = "Humans and various other species";
$earth->price = 928151000000; 
$earth->checkbox_html = "<input type='checkbox' name='products[]' value='Earth'>";

$mars = new Product;
$mars->planet = "Mars";
$mars->radius = "2,106.1 mi";
$mars->description = "Description";
$mars->inhabitants = "None";
$mars->price = 4938570; 
$mars->checkbox_html = "<input type='checkbox' name='products[]' value='Mars'>";

$jupiter = new Product;
$jupiter->planet = "Jupiter";
$jupiter->radius = "43,441 mi";
$jupiter->description = "Description";
$jupiter->inhabitants = "None";
$jupiter->price = 101869145; 
$jupiter->checkbox_html = "<input type='checkbox' name='products[]' value='Jupiter'>";

$saturn = new Product;
$saturn->planet = "Saturn";
$saturn->radius = "36,184 mi";
$saturn->description = "Description";
$saturn->inhabitants = "None";
$saturn->price = 84851480; 
$saturn->checkbox_html = "<input type='checkbox' name='products[]' value='Saturn'>";

$uranus = new Product;
$uranus->planet = "Uranus";
$uranus->radius = "15,759 mi";
$uranus->description = "Description";
$uranus->inhabitants = "None";
$uranus->price = 36954855; 
$uranus->checkbox_html = "<input type='checkbox' name='products[]' value='Uranus'>";

$neptune = new Product;
$neptune->planet = "Neptune";
$neptune->radius = "15,299 mi";
$neptune->description = "Description";
$neptune->inhabitants = "None";
$neptune->price = 35876155; 
$neptune->checkbox_html = "<input type='checkbox' name='products[]' value='Neptune'>";


if (!isset($_SESSION['all_products'])) {
    $_SESSION['all_products'] = [];
    array_push($_SESSION['all_products'], $mercury, $venus, $earth, $mars, $jupiter, $saturn, $uranus, $neptune);
}

?>