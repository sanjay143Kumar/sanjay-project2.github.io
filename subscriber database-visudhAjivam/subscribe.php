<?php
include("con-subs.php");
error_reporting(0);

?>
<html>

<head>
    <title>

    </title>
    <style>
     
        .table1 {
            color: white;
            border-radius: 20px;
            align-self: center;
            width: 300px;
            height: 300px;
            padding: 20px;
            border-spacing: 15px;
            font-size: 20px;
            
        }
        .table1 tr td input{
            width: 250px;
            height: 30px;
            border-radius: 10px;
            outline: none;
        }
        .table1 tr td{
            color: black;
        }
         

        #button {
            color: white;
            background-color: blue;
            border-radius: 20px;
            width: 95px;
            height: 45px;
            margin-top: 20px;
        }

        body {
            /* background: linear-gradient(red, blue); */
            background-color: whitesmoke;
            display: flex;
            align-items: center;
            justify-content: center;
            
             
        }
    </style>
</head>

<body>
    <form  class="form">
        <table class="table1" style="border:7px solid blue">
            <tr>
                <td>Email</th>
                <td class="email"><input type="email" name="email" placeholder="email" autocomplete="off"></td>
            </tr>
            <tr>

                <td colspan="2" style="align-items:center"><a href="login.html"><input type="submit" name="submit" id="button" onclick="alert('login successful')"></td>
            
            </tr>
        </table>
    </form>

</body>

</html>
<?php
$email = $_GET['email'];
 
 
 
$query="INSERT INTO subscribe VALUES('$email')";
$data=mysqli_query($conn,$query);


if($data){
    // echo " <br><br><br><br><br><br><br><br><br><b>your reponse have been submitted<b>";
} 
else{
    // echo "Not submitted!Try again";
}


?>