<html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $title; ?></title>
<style type='text/css'>
<?php $this->file(BASEPATH.'scaffolding/views/stylesheet.css'); ?>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
</head>
<body>
<div id="header">
<div id="header_left">
<h3>Hough &amp; Co Admin Console:&nbsp; <?php echo $title; ?></h3>
</div>
<script language="javascript" type="text/javascript" src="<?= base_url() ?>public/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
    editor_selector : "mceEditor",
    relative_urls : false,
    remove_script_host : false,
    document_base_url : "<?= base_url(); ?>",
    theme : "advanced",
    mode : "textareas",
    height: "400",
    plugins : "table,save,preview,ibrowser",
    theme_advanced_buttons1_add_before : "save,separator",
    theme_advanced_buttons1_add : "fontselect,fontsizeselect",
    theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
    theme_advanced_buttons3_add : "ibrowser",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_path_location : "bottom",
    plugin_insertdate_dateFormat : "%Y-%m-%d",
    plugin_insertdate_timeFormat : "%H:%M:%S",
    extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]"

});
</script>
<div id="header_right">
<?php echo anchor(array($base_uri, 'view'), $scaff_view_records); ?> &nbsp;&nbsp;|&nbsp;&nbsp;
<?php echo anchor(array($base_uri, 'add'),  $scaff_create_record); ?>&nbsp;&nbsp;|&nbsp;&nbsp;

</div>
</div>
<br clear="all">
<div id="outer">
