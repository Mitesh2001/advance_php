<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
            <?php
                foreach (filter_list() as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".filter_id($value)."</td></tr>";
                }
            ?>
        </table>
</body>
</html>
