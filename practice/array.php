// <h2>simple array</h2>
// <?php
//     $myarray=[1,2,3];
//       echo $myarray[2]."<br>";
// ?>



// <h2>simple array with differnt style</h2>
// <?php
//     $myarray=array(2,3,4);
//     echo $myarray[2]."<br>";
// ?>


// <h2>array with for loop</h2>
// <?php
//     $myarray=array(2,3,4);
   
//     for($i=0; $i < count($myarray); $i++){
//         echo $myarray[$i]."<br>";
//     }
// ?>


// <h2>Associative array</h2>
// <?php
//     $myarray=array("one" => 1,"two" => 2, "three" => 3);
//        foreach($myarray as $key => $value){
//            echo $key."=>".$value."<Br>";
//        }

// ?>


// <h2>array practice</h2>
// <?php
// $myarray = array(
//                         1,2,3,4,
//                         array('one','two','three','four',array(1,2,3,4)),
//                         array('o','t','f',5,6),
//                         array(array('one'=>1,'two'=>2,3))
//                     );
  
//             for($i=0; $i < count($myarray); $i++){
//                 if(is_array($myarray[$i])){
//                         for($j=0; $j<count($myarray[$i]); $j++){
//                             if(is_array($myarray[$i][$j])){
//                                foreach($myarray[$i][$j] as $key => $val){
//                                    echo $key."=>".$val."<br>";
//                                }
//                             }
//                             else{
//                                 echo $myarray[$i][$j]."<br>";
//                             }
//                         }
//                 }else{
//                     echo $myarray[$i]."<br>";   
//                 }
//             }



// ?>


<h2>practice 2</h2>
<?php
 $myarray = array(

                        1,2,3,4,5, 
                        array('two','three','four',array('o','t','th')),
                        array('one'=>1,'two'=>2,'three'=>3),
                        array('one','two',3,5,6,array('hello','world')),
                        array(array(5,6,7,8))
                    );


                    for($i=0; $i<count($myarray); $i++){
                        if(is_array($myarray[$i])){
                          //  echo "<pre";
                           // print_r($myarray[$i]);
                           foreach($myarray[$i] as $key => $val){
                               if(is_array($val)){
                                   echo "hii"."<Br>";
                               }else{
                                   echo $val."<br>";
                               }
                           }
                        }else{
                            echo $myarray[$i]."<br>";
                        }
                    }
?>