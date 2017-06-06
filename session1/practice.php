<!--table of 2-->
<h2>table of 2</h2>
<?php
for($a=1; $a<=10; $a++){
  echo '2'."*".$a."="."2"*$a;
  echo"<br>";
}

?>
<Br><Br><Br>

<!--table of 3 -->
<h2>table of 3</h2>
<?php
for($i=1; $i<=10; $i++){
  echo "3"."*".$i."="."3"*$i;
  echo "<br>";
}

?>
<br><Br><Br>


<!---swapping of numbers in table -->
<h2>table of 2 with middle number swap</h2>
<?php
    for($e=1; $e<=10; ){
     
    
        if($e==5){
          echo "2"."*"."9"."="."2"*$e;
          echo "<br>";
        }
        elseif($e==9){
          echo "2"."*"."5"."="."2"*$e;
          echo "<br>";
        }
        else{
          echo "2"."*".$e."="."2"*$e;
          echo "<br>";
        }

       
        $e++;
    }
    

?>


<br><Br><Br>

<!---swapping of whole numbers in table -->
<h2>table of 2 with whole line swap of 5 nd 9</h2>

<?php
for($x=1; $x<=10;){
    if($x==5){
      echo "2"."*"."9"."="."2"*"9";
      echo "<br>";
    }
    elseif($x==9){
       echo "2"."*"."5"."="."2"*"5";
      echo "<br>";
    }
    else{
          echo "2"."*".$x."="."2"*$x;
          echo "<br>";
        }
  


  $x++;
}

?>


