<?php 

session_start();
class Product {
    public $planet;
    public $radius;
    public $description;
    public $price;
    public $inhabitants;
    public $is_in_cart;
}

$product_array = array();

$mercury = new Product;
$mercury->planet = "Mercury";
$mercury->radius = "1,516 mi";
$mercury->description = "Description";
$mercury->inhabitants = "Inhabitants";
$mercury->price = "Price"; 

$venus = new Product;
$venus->planet = "Venus";
$venus->radius = "3,760.4 mi";
$venus->description = "Description";
$venus->inhabitants = "Inhabitants";
$venus->price = "Price"; 
$venus->image_html = "<input type='checkbox' name='venus' value='venus'> Venus";

$earth = new Product;
$earth->planet = "Earth";
$earth->radius = "3,958.8 mi";
$earth->description = "Description";
$earth->inhabitants = "Inhabitants";
$earth->price = "Price"; 
$earth->image_html = "<input type='checkbox' name='earth' value='earth'> Earth";

$mars = new Product;
$mars->planet = "Mars";
$mars->radius = "2,106.1 mi";
$mars->description = "Description";
$mars->inhabitants = "Inhabitants";
$mars->price = "Price"; 
$mars->image_html = "<input type='checkbox' name='mars' value='mars'> Mars";

$jupiter = new Product;
$jupiter->planet = "Jupiter";
$jupiter->radius = "43,441 mi";
$jupiter->description = "Description";
$jupiter->inhabitants = "Inhabitants";
$jupiter->price = "Price"; 
$jupiter->image_html = "<input type='checkbox' name='jupiter' value='jupiter'> Jupiter";

$saturn = new Product;
$saturn->planet = "Saturn";
$saturn->radius = "36,184 mi";
$saturn->description = "Description";
$saturn->inhabitants = "Inhabitants";
$saturn->price = "Price"; 
$saturn->image_html = "<input type='checkbox' name='saturn' value='saturn'> Saturn";

$uranus = new Product;
$uranus->planet = "Uranus";
$uranus->radius = "15,759 mi";
$uranus->description = "Description";
$uranus->inhabitants = "Inhabitants";
$uranus->price = "Price"; 
$uranus->image_html = "<input type='checkbox' name='uranus' value='uranus'> Uranus";

$neptune = new Product;
$neptune->planet = "Neptune";
$neptune->radius = "15,299 mi";
$neptune->description = "Description";
$neptune->inhabitants = "Inhabitants";
$neptune->price = "Price"; 
$neptune->image_html = "<input type='checkbox' name='neptune' value='neptune'> Neptune";

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
    echo "</tr>";
}

echo ($_SESSION['products']);
?>
