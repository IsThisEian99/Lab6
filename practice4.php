<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
  <style>
    table { border-collapse: collapse; margin-top: 20px; }
    td, th { border: 1px solid black; padding: 8px 12px; text-align: center; }
    th { background-color: #ccc; }
  </style>
</head>
<body>

  <h1>Multiplication Table</h1>

  <form method="POST">
    Enter a number: <input type="number" name="n" min="1" max="20">
    <button type="submit">Generate</button>
  </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = (int) $_POST['n'];

    if ($n < 1 || $n > 20) {
        echo "<p style='color:red'>Please enter a number between 1 and 20.</p>";
    } else {
        echo "<table>";

        // Header row (column indexes)
        echo "<tr><th>×</th>";
        for ($col = 1; $col <= $n; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // Data rows
        for ($row = 1; $row <= $n; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // row index
            for ($col = 1; $col <= $n; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>

</body>
</html>
