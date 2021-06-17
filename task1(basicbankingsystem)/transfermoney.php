<br>
<a href="customer.php"><img style="width: 60px; height: 60px;  margin-left:9%;"
 alt=""
 src="images/b2.png"></a>
<br>
<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount)<0)
    {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")'; 
        echo '</script>';
    }


    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else 
         {
        
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
        
                $sender = $sql1['customername'];
                $receiver = $sql2['customername']; 
                $sql = "INSERT INTO history(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                             window.location='index.html';        
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	       *{
	                padding: 0;
	                margin: 0;
	                box-sizing: border-box;
	                font-family: sans-serif;
                }
                h2{
	                font-size: 40px;
                        text-align: center;
			font-size: xx-large;
                        font-family: sans-serif;
                        font-weight: bolder;
                        color: white;
        text-shadow:3px 3px 0 #000,3px 3px 0 #000,3px 3px 0 #000, 3px 3px 0 #000;

                }
                table{
	                letter-spacing: 1.2px;
			margin: 0 auto;
			font-size: large;
			border: 2px solid black;
                        background-color:white;                       
                        width:80%;
                        
                       
                }
                th,td{
	                text-align: center;
                        border: 2px solid black;
                        height:50px;
                        background-color:black;
                        color:white;
                }
            

  		button{
			border-color:#4CAF50;
			background:#4CAF50;
                        margin:auto;
                        display:block;
                        font-size: 30px;
                        padding:15px 25px;
                        color:white;                    
                }
              
	        button:hover{
			background-color:#4CAF50;
			transform: scale(1.1);
			color:white;
		}
                select,input{
                        width:80%;
                        padding:10px 17px;
                        margin-left:10%;
                        border: 2px solid black;		
                }

    </style>
</head>

<body background="images/mt.jpg">
<br>
        <h2>MONEY TRANSFER</h2><br>
            <?php
         include 'config.php';

                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
            <table>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">BALANCE $</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['customername'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        <br><br><br><br>
           <label></label>
            <select name="to" required>
            <option value="" disabled selected>Transfer To [select]</option>
          </table>
            <?php
               include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['customername'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select>
        <br><br><br><br>
            <label></label>
            <input type="number"  name="amount" required placeholder="Enter Amount $">  
            <br><br><br><br>
            <button  name="submit" type="submit">Transfer</button>
             <br><br><br><br> <br><br><br><br>
            
        </form>
</body>
</html>