<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach($upload_data as $item => $value):
if($item == 'file_name'){$filelink = $value;}?>

<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

The link to the image is: <a href="<?=base_url(); ?>/public/images/uploaded/<?=$filelink;?>"><?=$filelink;?></a>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>