<?php 

require 'start_session.php';

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
$mercury->inhabitants = "Inhabitants";
$mercury->price = "Price"; 
$mercury->checkbox_html = "<input type='checkbox' name='products[]' value='mercury'>";


$venus = new Product;
$venus->planet = "Venus";
$venus->radius = "3,760.4 mi";
$venus->description = "Description";
$venus->inhabitants = "Inhabitants";
$venus->price = "Price"; 
$venus->checkbox_html = "<input type='checkbox' name='products[]' value='venus'>";

$earth = new Product;
$earth->planet = "Earth";
$earth->radius = "3,958.8 mi";
$earth->description = "Description";
$earth->inhabitants = "Inhabitants";
$earth->price = "Price"; 
$earth->checkbox_html = "<input type='checkbox' name='products[]' value='earth'>";

$mars = new Product;
$mars->planet = "Mars";
$mars->radius = "2,106.1 mi";
$mars->description = "Description";
$mars->inhabitants = "Inhabitants";
$mars->price = "Price"; 
$mars->checkbox_html = "<input type='checkbox' name='products[]' value='mars'>";

$jupiter = new Product;
$jupiter->planet = "Jupiter";
$jupiter->radius = "43,441 mi";
$jupiter->description = "Description";
$jupiter->inhabitants = "Inhabitants";
$jupiter->price = "Price"; 
$jupiter->checkbox_html = "<input type='checkbox' name='products[]' value='jupiter'>";

$saturn = new Product;
$saturn->planet = "Saturn";
$saturn->radius = "36,184 mi";
$saturn->description = "Description";
$saturn->inhabitants = "Inhabitants";
$saturn->price = "Price"; 
$saturn->checkbox_html = "<input type='checkbox' name='products[]' value='saturn'>";

$uranus = new Product;
$uranus->planet = "Uranus";
$uranus->radius = "15,759 mi";
$uranus->description = "Description";
$uranus->inhabitants = "Inhabitants";
$uranus->price = "Price"; 
$uranus->checkbox_html = "<input type='checkbox' name='products[]' value='uranus'>";

$neptune = new Product;
$neptune->planet = "Neptune";
$neptune->radius = "15,299 mi";
$neptune->description = "Description";
$neptune->inhabitants = "Inhabitants";
$neptune->price = "Price"; 
$neptune->checkbox_html = "<input type='checkbox' name='products[]' value='neptune'>";

array_push($product_array, $mercury);
array_push($product_array, $venus);
array_push($product_array, $earth);
array_push($product_array, $mars);
array_push($product_array, $jupiter);
array_push($product_array, $saturn);
array_push($product_array, $uranus);

$_SESSION["products"] = $product_array;

foreach($product_array as $product) {
    echo "<tr> <td>" . $product->planet . "</td>";
    echo "<td>" . $product->radius . "</td>";
    echo "<td>" . $product->description . "</td>";
    echo "<td>" . $product->inhabitants. "</td>";
    echo "<td>" . $product->price . "</td>";
    echo "<td>" . $product->checkbox_html . "</td>";

    echo "</tr>";
}

$_SESSION["products"] = $product_array;

?>
