<html>
<head>
<title>Admin Page</title>
<style type="text/css">
table.sample {
	border-width: 5px 5px 5px 5px;
	border-spacing: 1px;
	border-style: outset outset outset outset;
	border-color: black black black black;
	border-collapse: collapse;
	background-color: white;
}
table.sample th {
	border-width: 1px 1px 1px 1px;
	padding: 5px 5px 5px 5px;
	border-style: dotted dotted dotted dotted;
	border-color: gray gray gray gray;
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.sample td {
	border-width: 1px 1px 1px 1px;
	padding: 5px 5px 5px 5px;
	border-style: dotted dotted dotted dotted;
	border-color: gray gray gray gray;
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
</style>
</head>
<body>
<h1>All Content</h1>
	
<table class="sample">
<?php foreach($results as $row):?>
<tr>
    <td><a href=""><?=$row['id'];?></a></td>
    <td><?=$row['url'];?></td>
    <td><?=$row['content'];?></td>
    <td>Edit</td>
</tr>

<?php endforeach;?>

</table>
	
</body>
</html>
