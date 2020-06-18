<?php
require_once ('db.php');
require_once ('component.php');
$con = createdb();
displayequip();
function displayequip()
{   $sql2 = "select s.user_id from signup s where s.loggedin='yes'";
    $result2 = mysqli_query($GLOBALS['con'], $sql2);
    if (mysqli_num_rows($result2) > 0) {
        while ($row2 = mysqli_fetch_assoc($result2)) {

            $user_id = $row2['user_id'];
            echo "hello";
            echo $user_id
            ;                     }
    }
    $sql="select * from trekequipments";
    $result = mysqli_query($GLOBALS['con'],$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result))
            {
               $name= $row['equipment_name'];
               echo $name;
               $eid= $row['equipment_id']
              ?>
                <img src="<?php echo $row['equip_image']?>" style="width:300px; height:300px">
                <?php
                $sql1="select p.amount,p.restrictions,t.equipment_id from trekequipments t,price p where t.equipment_id='$eid' and t.pricecode=p.price_code";
                $result1 = mysqli_query($GLOBALS['con'],$sql1);
                if(mysqli_num_rows($result1)>0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        $price = $row1['amount'];
                        echo $price;
                        echo $row1['restrictions'];

                    }
                }
                   ?>
                <button onclick="myFunction(<?php echo $user_id?> ,<?php echo $eid?> ,<?php echo $name?> ,<?php echo $price?>)">Click me</button>





<?php


            }}
}?>
<script>
function myFunction(user_id ,eid ,namee, price)
{
    <?php
    $sql10="insert into mycart values(user_id,eid,namee,price) ";
    echo "hellloooooooooooo";
    ?>
}
</script>
