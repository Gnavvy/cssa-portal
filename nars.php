<?php
    $con = mysqli_connect("localhost", "root", "root", "nars);
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $query = "SELECT COUNT(date) AS headcount, date AS date FROM newbie GROUP BY date";
    if (mysqli_query($con, $query)) {
        echo "Database my_db created successfully";
    }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
?>
    $result = mysqli_query($con, $query);

    echo "<table border='1'>
        <tr>
        <th>headcount</th>
        <th>date</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['headcount'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
    echo "</table>";

    mysqli_close($con);
?>

<?php
// Create connection
$con=mysqli_connect("example.com","peter","abc123","my_db");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>