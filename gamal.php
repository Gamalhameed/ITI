<?php
echo "<h2>Welcome</h2>";
print "<h2>my fav. team Zamalk </h2>";
$x=5;
$y="Welcome";
$z=true;
echo '<p> Type of $x  is '.gettype($x)."</p>";
echo '<p> Type of $y  is '.gettype($y)."</p>";
echo '<p> Type of $z  is '.gettype($z)."</p>";

echo "<hr />";
echo "<p> <p> For Loop </p>";
for($i=0;$i<=15;$i++){
    echo $i." &nbsp; ";
}
echo "</p>";

echo "<p> <p> While Loop </p>";
$i=0;
while($i<=15){
    echo $i." &nbsp; ";
    $i++;
}
echo "</p>";
echo "<hr />";
echo "<p> Define a Constant </p>";
define("DEF_1","ITI");
const DEF_2 = "ITI";

echo "<p>".DEF_1."</p>";
echo "<p>".DEF_2."</p>";

echo "<hr />";
$m=5;
$n=7;
$res  = $m+$n;
if($res > 50){
    echo "<p> TRUE </p>";
}else{
    echo "<p> FALSE </p>";
}

$A = 1000;
$B = 2000;
$C = 3000;

?>
<?php
function to_string($var){
    $change = (string) $var;
    return gettype($change);
}
echo  '<p> Change Type of $x From '.gettype($x);
echo  " To ".to_string($x)."</p>";
?>