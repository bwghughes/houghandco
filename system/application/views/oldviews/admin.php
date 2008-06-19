<html>
<head>
<title>Admin Page</title>
</head>
<body>
<h1>All Content</h1>
	
<table>
<?php foreach($rows as $row)?>
<tr>
    <td><? echo $rows['id'];?></td>
    <td><? echo $rows['url'];?></td>
    <td><? echo $rows['content'];?></td>    
</tr>


</table>
	
</body>
</html>
