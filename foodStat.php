<?php include "header.php" ?>

<form method="GET" action="searchFood.php">
    <label>Type in name of the food: </label>
    <input type="text" required name="food">
    <input type="submit" value="Search">
</form>

<?php include "footer.php" ?>