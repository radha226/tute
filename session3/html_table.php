<style>
table, tr, td{
    border:1px solid ;
}
</style>



<h1>simple html view</h1>

    <table style="border:1px solid black">
 <?php
         for($i=0; $i<=10; $i++){
     ?>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>

        </tr>
        <?php
        }
        ?>
    </table>




<h1>table of 2</h1>
<table>
    <?php
        for($i=1; $i<=10; $i++){

      
    ?>
        <tr>
            <td>2</td>
            <td>*</td>
            <td><?php echo $i; ?></td>
            <td>=</td>
            <td><?php echo 2*$i; ?></td>
        </tr>

        <?php
              }

        ?>
</table>

