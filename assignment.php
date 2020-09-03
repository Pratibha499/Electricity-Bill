<!DOCTYPE html>
<html>
<body>
<style type="text/css">
body{
background:maroon;
}
h1{
text-align: center;
text-decoration: underline;
color: white;
font-size: 40px;
}
div{
border: 3px double gold;
margin-left: 120px;
margin-right: 120px;
padding: 50px;
transform: .5s background-color;
}
div:hover{
background-color:grey;
}
h2{
text-align: center;
color: black;
font-size: 40px;
}
</style>
<?php
echo " <h1> <i>Calculate Electricity Bill</i> </h1><br>";
$U=350;
echo " <div><h1 > Elecricity Consumed= ".$U."Rs<br></h1>";
if($U>0 and $U<=100){
$amt=$U*3.30;
$totalamt=$amt+(3.30*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
elseif ($U>100 and $U<=200) {
$amt=(100*3.30)+(($U-100)*4);
$totalamt=$amt+(4*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
elseif ($U>200 and $U<=300) {
$amt=(100*3.30)+(100*4)+(($U-200)*5.25);
$totalamt=$amt+(5.25*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2>";
}
else{
$amt=(100*3.30)+(100*4)+(100*5.25)+(($U-300)*6.25);
$totalamt=$amt+(6.25*(10/100));
echo " <h2>Total amount= ".$totalamt."Rs<br></h2></div>";
}
?>
</body>
</html>