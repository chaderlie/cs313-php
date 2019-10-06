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
$mercury->inhabitants = "None";
$mercury->price = "$3,555,020"; 
$mercury->checkbox_html = "<input type='checkbox' name='products[]' value='mercury'>";


$venus = new Product;
$venus->planet = "Venus";
$venus->radius = "3,760.4 mi";
$venus->description = "Description";
$venus->inhabitants = "None";
$venus->price = "$8,817,200"; 
$venus->checkbox_html = "<input type='checkbox' name='products[]' value='venus'>";

$earth = new Product;
$earth->planet = "Earth";
$earth->radius = "3,958.8 mi";
$earth->description = "Description";
$earth->inhabitants = "Humans and various other species";
$earth->price = 928151000000; 
$earth->checkbox_html = "<input type='checkbox' name='products[]' value='earth'>";

$mars = new Product;
$mars->planet = "Mars";
$mars->radius = "2,106.1 mi";
$mars->description = "Description";
$mars->inhabitants = "None";
$mars->price = 4938570; 
$mars->checkbox_html = "<input type='checkbox' name='products[]' value='mars'>";

$jupiter = new Product;
$jupiter->planet = "Jupiter";
$jupiter->radius = "43,441 mi";
$jupiter->description = "Description";
$jupiter->inhabitants = "None";
$jupiter->price = 101869145; 
$jupiter->checkbox_html = "<input type='checkbox' name='products[]' value='jupiter'>";

$saturn = new Product;
$saturn->planet = "Saturn";
$saturn->radius = "36,184 mi";
$saturn->description = "Description";
$saturn->inhabitants = "None";
$saturn->price = 84851480; 
$saturn->checkbox_html = "<input type='checkbox' name='products[]' value='saturn'>";

$uranus = new Product;
$uranus->planet = "Uranus";
$uranus->radius = "15,759 mi";
$uranus->description = "Description";
$uranus->inhabitants = "None";
$uranus->price = 36954855; 
$uranus->checkbox_html = "<input type='checkbox' name='products[]' value='uranus'>";

$neptune = new Product;
$neptune->planet = "Neptune";
$neptune->radius = "15,299 mi";
$neptune->description = "Description";
$neptune->inhabitants = "None";
$neptune->price = 35876155; 
$neptune->checkbox_html = "<input type='checkbox' name='products[]' value='neptune'>";

array_push($product_array, $mercury);
array_push($product_array, $venus);
array_push($product_array, $earth);
array_push($product_array, $mars);
array_push($product_array, $jupiter);
array_push($product_array, $saturn);
array_push($product_array, $uranus);


foreach($product_array as $product) {
    echo "<tr> <td>" . $product->planet . "</td>";
    echo "<td>" . $product->radius . "</td>";
    echo "<td>" . $product->description . "</td>";
    echo "<td>" . $product->inhabitants. "</td>";
    echo "<td>$" . $product->price . "</td>";
    echo "<td>" . $product->checkbox_html . "</td>";

    echo "</tr>";
}
?>
