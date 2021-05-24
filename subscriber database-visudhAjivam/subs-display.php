<html> 
    <head>
        <title>Display database </title>
         <style>
         table{
             margin: 10px;
             padding: 10px;
             width: 40%;
             margin-left: 30%;
             
              
             
        }
        h2{
            margin: 10px;
             padding: 30px;
             width: 40%;
             margin-left: 32%;
             
        }
        tr{
            font-weight: bold;
            font-size:15px;
        }
</style>
    </head>
    <body>
    <h2>Subscriber Table Of Visudh Ajivam</h2>
        <table border="2px" width="30%"  cellspacing="0px" cellpadding="10px">
        <tr>
            <td>Email</td>
             
        </tr>

<?php
error_reporting(0);
include("con-subs.php");
$query ="SELECT * FROM subscribe";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


if($total!=0){
     while($result=mysqli_fetch_assoc($data)){
         echo"
         <tr>
         <td>".$result['email']."</td>
         </tr>";

        }
    }
else{
    echo"records not found";
}
?>
 </table>
 </body>
</html>