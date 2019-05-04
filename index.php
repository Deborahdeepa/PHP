<!DOCTYPE html>
<html>
<body>

<h2>Task 1</h2>
<p> I have an xml file. Click the convert button to convert the xml data into csv file. check the same folder having the csv file with the data</p>
  
<form id="myForm" action="index.php" method="post">
 <input name="convert" type="submit" value="Convert">
<br>

<h2>Task 2</h2>
<p>Sting manipulations </p>

  String 1:<br>
  <input type="text" name="string1">
  <br> <br> <br>
  <input type="submit" value="string reverse" name="rev">
   <input type="submit" value="string upper" name="upper">
    <input type="submit" value="string shuffle" name="shuffle">
	
</form> 
<?php 


$result = '';
include ('action.php');

//function xml to csv
if(isset($_POST["convert"])){
if($_POST["convert"]!=''){
$a = convertXmlToCsvFile("FL_emp_detail.xml", "FL_emp_detail.csv");
	if($a == true){
		$result = 'File converted. check the folder with file name FL_emp_detail.csv';
	}
	else{
		$result = 'File not converted';
	}
    }
	}
 
//string reverse
if(isset($_POST["rev"])&&($_POST["string1"]!='')){
	 $string = $_POST["string1"];
	$result = strrev($string);
}
//string upper
if(isset($_POST["upper"])&&($_POST["string1"]!='')){
	 $string = $_POST["string1"];
	$result = strtoupper($string);
}
//string shuffle
if(isset($_POST["shuffle"])&&($_POST["string1"]!='')){
	 $string = $_POST["string1"];
	$result = str_shuffle($string);
}
 
?>

<br><br> 
<h3><?php  echo $result;  ?></h3>

</body>
	</html>
