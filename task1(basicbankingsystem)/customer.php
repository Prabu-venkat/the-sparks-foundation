<br>
<a href="index.html"><img style="width: 70px; height: 70px;margin-left:80%;"
 alt=""
 src="images/hh.png"></a>
<?php
include 'config.php';
$sql = "SELECT * FROM customers";
$query =mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customer List</title>
    <style>
               button:hover{
			background-color:#4CAF50;
			transform: scale(1.1);
			color:white;
		}
                table {
                        letter-spacing: 1.2px;
			margin: 0 auto;
			font-size: large;
			border: 3px solid black;
                        width:80%;
                        background-color:white;
		}

		h1 {
			text-align: center;
			font-size: xx-large;
		        font-size: 40px;
                        font-family: sans-serif;
                        font-weight: bolder;                       
                        color: white;
                        text-shadow:3px 3px 0 #000,3px 3px 0 #000,3px 3px 0 #000, 3px 3px 0 #000;
		}

		td {
			
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 2px solid black;
			padding: 10px;
			text-align: center;
                        background-color:black;
                        color:white;
		}

                  #van{
                         margin-top: 20px;
                         padding: 20px;
                         color: white;
                         text-shadow:3px 3px 0 #000,3px 3px 0 #000,3px 3px 0 #000, 3px 3px 0 #000;
	

               }

    </style>
</head>
<body background="images/mb.png">
<div class="container">
<h1  id="van" class="text-center pt-4"><big>CUSTOMER DETAILS</big></h1>
 <div class="row">
 <div class="col">
 <div class="table-responsive-sm">
 <table style="text-align: center">
            <tr > 
          <th>SI NO:</th>
            <th >CUSTOMER NAME </th>
            <th >EMAIL </th>
            <th >BALANCE $ </th>
            <th >PAY</th>
          </tr>
                     <?php
		         while($rows = mysqli_fetch_assoc($query))
				{
	             ?>
                        <tr>
                              <td><?php echo $rows['id'];?></td>
                              <td><?php echo $rows['customername'];?></td>
		              <td><?php echo $rows['email'];?></td>
			      <td><?php echo $rows['balance'];?></td>
                              <td><a href="transfermoney.php?id= <?php echo $rows['id'] ;?>"> <button type="button" style="background-color:#4CAF50;border-color:#4CAF50;color:white;
font-size:20px">TRANSFER</button></a></td>
                        </tr>
                        <?php
				
				}
			?>

      </table></div>  </div> </div> </div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>         
</body>
</html>