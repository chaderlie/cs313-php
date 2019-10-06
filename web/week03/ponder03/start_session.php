<?php
session_start();
if (!isset($_SESSION['selected_products'])) {
    $_SESSION['selected_products'] = [];
}


class Product {
    public $planet;
    public $radius;
    public $image;
    public $price;
    public $inhabitants;
    public $checkbox_html;
}

$product_array = array();

$mercury = new Product;
$mercury->planet = "Mercury";
$mercury->radius = "1,516 mi";
$mercury->image = "<img id='mercury' src='mercury.jpg' alt='Photo of Mercury' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\"'>";
$mercury->inhabitants = "None";
$mercury->price =3555020; 
$mercury->checkbox_html = "<input type='checkbox' name='products[]' value='mercury'>";

$venus = new Product;
$venus->planet = "Venus";
$venus->radius = "3,760.4 mi";
$venus->image = "<img id='venus' src='venus.jpg' alt='Photo of Venus' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\"' onmouseout='this.style=\"transform: scale(1);\"'>";
$venus->inhabitants = "None";
$venus->price = 8817200; 
$venus->checkbox_html = "<input type='checkbox' name='products[]' value='venus'>";

$earth = new Product;
$earth->planet = "Earth";
$earth->radius = "3,958.8 mi";
$earth->image = "<img id='earth' src='earth.jpg' alt='Photo of earth' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\"'>";
$earth->inhabitants = "Humans and various other species";
$earth->price = 928151000000; 
$earth->checkbox_html = "<input type='checkbox' name='products[]' value='earth'>";

$mars = new Product;
$mars->planet = "Mars";
$mars->radius = "2,106.1 mi";
$mars->image = "<img id='mars' src='mars.jpg' alt='Photo of mars' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\">";
$mars->inhabitants = "None";
$mars->price = 4938570; 
$mars->checkbox_html = "<input type='checkbox' name='products[]' value='mars'>";

$jupiter = new Product;
$jupiter->planet = "Jupiter";
$jupiter->radius = "43,441 mi";
$jupiter->image = "<img id='jupiter' src='jupiter.jpg' alt='Photo of jupiter' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\"' onmouseout='this.style=\"transform: scale(1);\"'>";
$jupiter->inhabitants = "None";
$jupiter->price = 101869145; 
$jupiter->checkbox_html = "<input type='checkbox' name='products[]' value='jupiter'>";

$saturn = new Product;
$saturn->planet = "Saturn";
$saturn->radius = "36,184 mi";
$saturn->image = "<img id='saturn' src='saturn.jpg' alt='Photo of saturn' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\">";
$saturn->inhabitants = "None";
$saturn->price = 84851480; 
$saturn->checkbox_html = "<input type='checkbox' name='products[]' value='saturn'>";

$uranus = new Product;
$uranus->planet = "Uranus";
$uranus->radius = "15,759 mi";
$uranus->image = "<img id='uranus' src='uranus.jpg' alt='Photo of uranus' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\">";
$uranus->inhabitants = "None";
$uranus->price = 36954855; 
$uranus->checkbox_html = "<input type='checkbox' name='products[]' value='uranus'>";

$neptune = new Product;
$neptune->planet = "Neptune";
$neptune->radius = "15,299 mi";
$neptune->image = "<img id='neptune' src='neptune.jpg' alt='Photo of neptune' width='153' height='153' onmouseover='this.style=\"transform: scale(1.5);\" onmouseout='this.style=\"transform: scale(1);\">";
$neptune->inhabitants = "None";
$neptune->price = 35876155; 
$neptune->checkbox_html = "<input type='checkbox' name='products[]' value='neptune'>";


if (!isset($_SESSION['all_products'])) {
    $_SESSION['all_products'] = [];
    array_push($_SESSION['all_products'], $mercury, $venus, $earth, $mars, $jupiter, $saturn, $uranus, $neptune);
}

?>