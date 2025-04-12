<?php

require './class/atclass.php';

?>

<center>
    <h2>Category Wise Product Report</h2>
</center>
<hr />
<?php
echo " Date:" . date("d-m-Y");
?>
<br />
<a href="#" onclick="window.print();">Print</a>


<form method="get">

    Category :<?php
                $cq = mysqli_query($connection,"SELECT * FROM tbl_category");
                echo "<select name='cid'>";
                    while ($cdata= mysqli_fetch_array($cq)){
                        echo "<option value='{$cdata['category_id']}'>{$cdata['category_name']}</option>";
                    }

                echo "</select>";
            ?>

    <input type="submit" value="GetData">

</form>


<?php

if (isset($_GET['cid'])) {

    $cid = $_GET['cid'];
    $q = mysqli_query($connection, "SELECT * from tbl_product where  category_id  ='{$cid}'");

    $count = mysqli_num_rows($q);

    echo "<br/><center>$count Records Found</center>";
    if ($count > 0) {

        echo "<table align='center' width='50%' border='1'> ";
        echo "<tr>";

      echo "  <th>#</th> 
      <th>Name</th>
      <th>price </th> 
      <th>photo path</th> 
    
      <th>stock</th> 
      <th>category id</th> 
      <th>company id</th> ";

        echo "</tr>";
        while ($productrow = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo"<td>{$productrow['prod_id']}</td>";
            echo"<td>{$productrow['prod_name']}</td>";
            echo"<td>{$productrow['prod_price']}</td>";
            echo"<td><img style='width: 50px'src='uploads/{$productrow['prod_photo']}'></td>";
            
            echo"<td>{$productrow['prod_stock']}</td>";
            
            echo"<td>{$productrow['category_id']}</td>";
            echo"<td>{$productrow['company_id']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No Records Found";
    }
}
?>