<table>

<?php

foreach ($students as $student) {
    echo "<tr>
          <td> {$student['id']} </td>
          <td> {$student['name']} </td>
          <td> {$student['email']} </td>";
}
    ?>
</table>
