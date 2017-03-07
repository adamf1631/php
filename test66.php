
  <?php

  try

  {

    //open the database

    $db = new PDO('sqlite:spiceworks_prod.db');
	 
 

   

    //now output the data to a simple html table...

   //print "<table border=1>";

    //print "<tr><td>Id</td><td>Name</td><td>Last Name</td></tr>";

    $result = $db->query('SELECT * FROM test');

    //foreach($result as $row)

    //{

      //print "<tr><td>".$row['id']."</td>";

     // print "<td>".$row['name']."</td>";

     // print "<td>".$row['lname']."</td>";

     
    //}

   // print "</table>";

 

    // close the database connection

    $db = NULL;

  }

  catch(PDOException $e)

  {

    print 'Exception : '.$e->getMessage();

  }

 try

  {

    //open the database

    $db = new PDO('sqlite:spiceworks_prod.db');
	 
 

    

    //now output the data to a simple html table...

    //print "<table border=2>";

   // print "<tr><td>Id</td><td>Fruit</td><td>Veggie</td></tr>";

    $result2 = $db->query('SELECT * FROM test44');

    //foreach($result as $row)

    //{

      //print "<tr><td>".$row['id']."</td>";

      //print "<td>".$row['fruit']."</td>";

      //print "<td>".$row['veggie']."</td>";

     
    //}

    //print "</table>";

 

    // close the database connection

    $db = NULL;

  }

  catch(PDOException $e)

  {

    print 'Exception : '.$e->getMessage();

  }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Test Table</title>
		<link href="helpdesk_style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
	<h1>Test</h1>
	<table>
		<?php foreach ($result as $row) {?>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Last Name</th>
		</tr>
		<tr>
			<td><?php echo $row['id']; ?> </td>
			<td><?php echo $row['name']; ?> </td>
			<td><?php echo $row['lname']; ?> </td>
		</tr>
		
		<?php }?>
		</table>
		<table>
		<h1>Test</h1>
		<?php foreach ($result2 as $row) {?>
		<tr>
			<th>Id</th>
			<th>Fruit</th>
			<th>Veggie</th>
		</tr>
			<td><?php echo $row['id']; ?> </td>
			<td><?php echo $row['fruit']; ?> </td>
			<td><?php echo $row['veggie']; ?> </td>
		</tr>
		
		<?php }?>
		</table>
	</body>
</html>
