<html>
<head>
    <link src="style.css">
</head>
<body>
<?php
$myfile = fopen("OCR Text.txt", "r") or die("Unable to open file!");
$a=array();
for($i=0;;$i++){
    $temp=fgets($myfile);
    if($temp==FALSE){
    break;
    }
    else{
        array_push($a,$temp);
    }
}?>
<center>
<font size=40px><?php echo $a[0]?></font></center>
<div class="main" style="padding-left:100px">
<?php
for($j=1;$j<$i;$j++){
    echo "$a[$j]";
    echo '<input type="text">';
    echo "<br>";
}
fclose($myfile);
?>
</div>
</body>
</html>