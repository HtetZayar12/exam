<?php 

  $hamburger = 4.95;
  $chocolateMilk = 1.95;
  $cola = 0.85;
  
  $totalSale = (2*$hamburger) + $chocolateMilk + $cola;
  $tax = $totalSale * (7.5/100);
  $preTax = $totalSale * (16/100);
  $postTax = $totalSale * (84/100);

  $subTotal = $totalSale + $tax + $preTax + $postTax;

  echo "<table border=1 cellpadding=10 cellspacing=0>";
  echo "<tr><th>Items</th><th>Quanity</th><th>Price</th></tr>";

  echo "<tr><td>Hamburger</td>";
  echo "<td>2</td>";
  echo "<td>".(2*$hamburger)."</td></tr>";

  echo "<tr><td>Chocolate Milkshake</td>";
  echo "<td>1</td>";
  echo "<td>$chocolateMilk</td></tr>";

  echo "<tr><td>Cola</td>";
  echo "<td>1</td>";
  echo "<td>$cola</td></tr>";

  echo "<tr><td colspan=2>totalSale</td>";
  echo "<td>$totalSale</td></tr>";

  echo "<tr><td colspan=2>Tax</td>";
  echo "<td>$tax</td></tr>";

  echo "<tr><td colspan=2>Pre tax</td>";
  echo "<td>$preTax</td></tr>";

  echo "<tr><td colspan=2>Post tax</td>";
  echo "<td>$postTax</td></tr>";

  echo "<tr><td colspan=2>SubTotal</td>";
  echo "<td>$subTotal</td></tr>";
 ?>