<?php

require './class/atclass.php';

?>
<center>
    <h2>Order Date Wise  Report</h2>
</center>
<hr />
<?php
echo " Date:" . date("d-m-Y");
?>
<br />
<a href="#" onclick="window.print();">Print</a>


<form method="get">

     Start Date : <input type="date" max="<?php echo date('Y-m-d', strtotime('today')) ?>" name='sdate'/>
     End Date : <input type="date" max="<?php echo date('Y-m-d', strtotime('today')) ?>" name='edate'/>
     
    <input type="submit" value="GetData">

</form>


<?php

if (isset($_GET['sdate'])) {
    $sdate = date('d-m-y', strtotime($_GET['sdate']));
    $edate = date('d-m-y', strtotime($_GET['edate']));

    $q = mysqli_query($connection, "SELECT * from  tbl_ordermaster where  order_date between '{$sdate}' and '{$edate}'");

    $count = mysqli_num_rows($q);

    echo "<br/><center>$count Records Found</center>";
    if ($count > 0) {

        echo "<table align='center' width='50%' border='1'> ";
        echo "<tr>";

        echo "<th>ID</th>";
        echo "<th>Date</th>";
        echo "<th>Status</th>";
        echo "<th>Name</th>";
        echo "<th>Mobile</th>";
        echo "<th>Address</th>";
        echo "<th>Mode</th>";

        echo "</tr>";
        while ($data = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>{$data['order_id']}</td>";
            echo "<td>{$data['order_date']}</td>";
            echo "<td>{$data['order_status']}</td>";
            echo "<td>{$data['shipping_name']}</td>";
            echo "<td>{$data['shipping_mobile']}</td>";
            echo "<td>{$data['shipping_address']}</td>";
            echo "<td>{$data['payment_mode']}</td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No Records Found";
    }
}
?>