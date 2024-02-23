
<!-- Data Base -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>


<form action="index.php">
  <label>
    <fieldset>
     
<?php
//  HW1: Make pagetitle and price - constants
// confirme to the naming convention

// HW2: format the total cost 
//      Total cost: 2 x 100.50 = 201.00
$page_title = "Booking confirmation";

$price_adult = 100.50;
$price_adult2 = 0;

$price_children = 78.80;
$price_children2 = 0;

$book_client_vip = false;

$book_adult = 3;
$book_children = 2;

$book_adult_total = $book_adult * $price_adult;
$book_adult_total2 = $book_adult * $price_adult2;
$book_children_total = $book_children * $price_children;
$book_children_total2 = $book_children * $price_children2;


$total_cost = $book_adult_total + $book_children_total;
$total_cost2 = $book_adult_total2 + $book_children_total2;

// ?>

<!-- Template / View -->

<h1><?= $page_title ?></h1>

<li>Price for adult: $100.50</li>
<li>Price for children: $78.80</li>

<h4>You have Rezerv for: </h4>
  <li><?= $book_adult ?> - adult's </li>
  <li><?= $book_children ?> - children! </li><br>


<h4>Cost for Adult's:</h4>
 <li>   
   <?= $book_adult ?> x $<?= $price_adult . $price_adult2 ?> = $<?= $book_adult_total . $book_adult_total2 ?>
  </li>

<h4>Cost for Children's: </h4>
  <li>
    <?= $book_children ?> x $<?= $price_children . $price_children2 ?> = $<?= $book_children_total . $book_children_total2 ?>
</li>


<h4>And the total is:</h4>
<li>$<?= $book_adult_total . $book_adult_total2 ?> (Adult) + $<?= $book_children_total . $book_children_total2 ?> (Children) = $<?= $total_cost . $total_cost2?></li>







<!-- <? if ( $book_client_vip == true): ?>
<p>VIP</p>
<? endif ?>

<? if( $book_client_vip == false ): ?>
    <p>Sorry,but you are not our VIP Client</p>
<? endif?> -->


<input type="submit" value = "Confirm">

    </fieldset>
  </label>
</form>
  

</body>
</html>






























