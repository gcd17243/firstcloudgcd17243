<!DOCTYPE html>
<html>
    <head>
        <title>Customer information</title>
    </head>
    <body>

        <h1>My first PHP page</h1>

   <?php
$result = mysqli_query($con, "SELECT description, due_date FROM wishes WHERE wisher_id=" . $wisherID);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . htmlentities($row["description"]) . "</td>";
    echo "<td>" . htmlentities($row["due_date"]) . "</td></tr>\n";
}
mysqli_free_result($result);
mysqli_close($con);
?>
    </body>
</html>