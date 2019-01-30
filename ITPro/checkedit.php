<?php
//include ('config.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itpromo";

$objConnet = mysql_connect("localhost","root","")or die ("Error connect to DB");
$objDB= mysql_select_db("itpromo");
$strSQL = "UPDATE member SET ";
$strSQL .="mb_id = '".$_POST['mb_id']."' ";
$strSQL .=",mb_username = '".$_POST["mb_username"]."' ";
$strSQL .=",mb_name = '".$_POST["mb_name"]."' ";
$strSQL .=",mb_email = '".$_POST["mb_email"]."' ";
$strSQL .=",mb_phone = '".$_POST["mb_phone"]."' ";
$strSQL .=",mb_status = '".$_POST["mb_status"]."' ";
$strSQL .=",mb_gender = '".$_POST["mb_gender"]."' ";


$strSQL .="WHERE mb_id = '".$_POST["mb_id"]."' ";

$objectQuery = mysql_query($strSQL);
if($objectQuery)
{
//echo "Save Done";
}
else
{
//echo "Error Save [".$strSQL."]";
}
	

mysql_close($objConnet);
?>
    <?php
include('profile.php');

?>

</body>

</html>




