<html>
<head>
<script language="javascript" type="text/javascript" src="<?= base_url() ?>public/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	theme : "advanced",
	mode : "textareas",
	editor_selector : "mceEditor"

});
</script>

<title>Admin Page</title>
</head>
<body>
<h1>All Content</h1>
	
<table>

<tr>
    <td><? echo $rows['id'];?></td>
    <td><? echo $rows['url'];?></td>
    <td><textarea rows="20" cols="200" class="mceEditor"><? echo $rows['content'];?></textarea></td>    
</tr>

</table>
	
</body>
</html>
