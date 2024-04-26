<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Sarake 1</th>
                <th>Sarake 2</th>
                <th>Sarake 3</th>
                <th>Sarake 4</th>
                <th>Sarake 5</th>
                <th>Sarake 6</th>
                <th>Sarake 7</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($row = 1; $row <= 3; $row++) {
                echo "<tr>";
                for ($column = 0; $column <= 7; $column++) {
                    $number = $row * 7 - 6 + $column;
                    echo "<td>$number</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>