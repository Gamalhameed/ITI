<h2>========= 5 string functions ==========</h2>
<?php
$str = "Front, Back";
$newStr = str_replace("Back", "End", $str);
echo $newStr."<br/>";
$str2 = "The Club Of The Century Is Zamalk";
$wordCount = str_word_count($str2);
echo "Number of words : $wordCount"."<br/>";
$upper = strtoupper('gamal');
echo "$upper" . '<br>';
$str3 = "We Are Coming Back";
$result = wordwrap($str3, 6, "<br/>");
echo $result."<br/>";
$result = metaphone("ZAMALK");
echo $result."<br/>";
?>

<h2>========= 5 array functions =========</h2><br/>
<?php
$club=[];
$club=array_fill(0,3,'zamalk');
for($i=0;$i<3;$i++)
{
    echo "element of index ". "($i)" ."=" ."$club[$i]".'<br>';
}
$club=['masry','enbi','mahala'];
$club2=['zamalk','pyramids','ahly'];
$merge=array_merge($club,$club2);
print_r($merge);
var_dump($merge);
$reversedLetters = array_reverse($merge);
print_r($reversedLetters);
echo "<br/>";
$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers);
echo "<br/>";
?>
<h2>========= form validation =========</h2>
<?php
function validate($data){
    $data=strip_tags($data);
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
function is_required($data){
    if(empty($data)){
        echo"no it is required";
    }else{
        return validate($data);
    }

}
echo is_required($_POST["fn"]);
?>
<div class="row">
    <div class="col-4">
        <form class="row g-3" method="post" action="?<php echo $_SERVER['PHP_SELF']?>">
            <h3 class="display-3">Please Sign in!</h3>
            <div class="col-12">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="FN" name="fn" >
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">last name</label>
                <input type="text" class="form-control" id="LN" name="ln" >
            </div>
            <br/>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


