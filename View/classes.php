<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
</head>
<body>
<table class="paleBlueRows">
<thead>
<tr>
<th> Name </th>
<th> Location</th>
<th> Teacher </th>
</tr>
</thead>
<tbody>
    <?php
foreach($classesArray as $classes){
    echo "
    <tr>
<td>{$classes['name']}</td>
<td>{$classes['location']}</td>
<td>{$classes['teacher_id']}</td>
<td><button>Edit</button></td>
<td><button>Delete</button></td>
</tr>";
}
?> 
</tbody>
</tr>
</table>

</body>
</html>

<style>
    button{
        margin:10px;
        padding:10px;
        width:50%;
        text-align:center;
    }
    table.paleBlueRows {
  font-family: "Times New Roman", Times, serif;
  border: 1px solid #010216;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.paleBlueRows td, table.paleBlueRows th {
  border: 1px solid #000000;
  padding: 3px 2px;
}
table.paleBlueRows tbody td {
  font-size: 18px;
}
table.paleBlueRows tr:nth-child(even) {
  background: #D0E4F5;
}
table.paleBlueRows thead {
  background: #0B6FA4;
  border-bottom: 5px solid #FFFFFF;
}
table.paleBlueRows thead th {
  font-size: 17px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #FFFFFF;
}
table.paleBlueRows thead th:first-child {
  border-left: none;
}

table.paleBlueRows tfoot td {
  font-size: 14px;
}
</style>