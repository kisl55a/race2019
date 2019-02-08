<?php include "header.php"; ?>
<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=kidonam";
	 $db = new PDO ($dsn, 'phpUser', 'phpPass');
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
?>
<h4>Test</h4>
<?php
    $selection = '%'.$_GET['food'].'%';
    $stmt = $db->prepare("SELECT * FROM ingredients WHERE name_ing LIKE :a_name");
	$stmt->bindParam(':a_name',$selection);
	$stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <td>Name of the food</td>
        <td>Calories</td>
        <td>Carb</td>
        <td>Protein</td>
        <td>Fat</td>
        <td>Fibre</td>
    </tr>
<?php
    foreach($result as $row){
        echo '<tr>';
        echo '<td>'.$row['name_ing'].'</td>'.'<td>'.$row['energy'].'</td>'.'<td>'.$row['carb'].'</td>'.'<td>'.$row['protein'].'</td>'.'<td>'.$row['fat'].'</td>'.'<td>'.$row['fibre'].'</td>';
        echo '</tr>';
    }
?>
</table>
<?php include "footer.php" ?>