<br>
<a href="index.html"><img style="width: 70px; height: 70px;margin-left:80%"
 alt=""
 src="images/hh.png"></a>

<?php
include 'config.php';
$sql = "SELECT * FROM history  ";
$query =mysqli_query($conn, $sql);     
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 2px solid black;
                        width:70%;
                        background-color:white;
              
		}

		h1 {
			text-align: center;
			font-size: xx-large;
		        font-size: 30px;
                        font-family: sans-serif;
                        font-weight: bolder;
		}

		td {
			
			border: 1px solid black;
		}
             
		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align:center;
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

<body background="images/tb.jpg">

	<section>
		<h1 id="van">TRANSACTION HISTORY</h1>
		<table>
			<tr>
				<th>SI NO:</th>
                                <th>SENDER</th>
                                <th>RECEIVER</th>				
				<th>AMOUNT</th>
                                <th>DATE&TIME</th>
			</tr>
		  
			<?php
				while($rows = mysqli_fetch_assoc($query))
				{
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
	                        <td><?php echo $rows['sender'];?></td>
                                <td><?php echo $rows['receiver'];?></td>
				<td><?php echo $rows['amount'];?></td>
                                <td><?php echo $rows['dt'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
<br><br>
</body>
</html>