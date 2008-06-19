<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Hough &amp; Co. Chartered Surveyors</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="MSSmartTagsPreventParsing" content="TRUE" />
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv= "pragma" content="no-cache" />
	<meta name="robots" content="all" />
	<meta name="author" content="Ben Hughes - Bright Approach - www.brightapproach.com" />
	<meta name="description" content="Hough &amp; Co Chartered Surveying." />
	<meta name="keywords" content="<? if(isset($keywords)){ echo $keywords; }?>" />


	<base href="<?php echo $this->config->item('base_url') ?>/public/"/>
	<style type="text/css" media="all" >@import "css/all.css";</style>
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen"/><![endif]-->
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/hover.js"></script>
</head>
<body class="inner">
	<div id="main">
		<!-- header -->
		<div id="header">
			<h1><a href="#">Hough</a></h1>
		</div>
		<!-- navigation -->
		<ul class="nav" id="nav">
			<li class="a-services"><a href="<?=site_url();?>/auction-services"><span><strong><em>auction services</em></strong></span></a></li>
			<li class="pink active auction "><a href="<?=site_url();?>/auction-services/auction-dates"><span><strong><em>auction<br/> dates</em></strong></span></a></li>
			<li class="pink enter"><a href="<?=site_url();?>/auction-services/enter-property"><span><strong><em>enter a <br/> property</em></strong></span></a></li>
			<li class="pink estate"><a href="<?=site_url();?>/auction-services/estate-agents"><span><strong><em>estate<br/> agents</em></strong></span></a></li>
			<li class="pink"><a href="<?=site_url();?>/auction-services/auction-catalogue"><span><strong><em>catalogue<br/> of properties</em></strong></span></a></li>
			<li class="pink contact-1"><a href="<?=site_url();?>/contact-us"><span><strong><em>contact us</em></strong></span></a></li>
		</ul>
		<!-- content -->
		<div id="content">
			<div class="holder">
				<!-- column -->
				<div class="column">
					<div class="column-decor">
						<h2>AUCTION DATES FOR 2008</h2>
						<ul class="list">
						<? foreach($query->result() as $row){ ?>
							<li><a href="#"><?=$row->date; ?></a></li>
						<? } ?>
						</ul>
						<p>All auctions start at 2.30pm</p>
					</div>
				</div>
				<? $this->load->view('side_bar'); ?>
				<a href="<?=site_url();?>" class="btn">return home page</a>
			</div>
		</div>
		<a href="#" class="logo-rics">RICS</a>
		<p id="footer">&copy; 2008 Hough &amp; Co Chartered Surveyors</p>
	</div>
</body>
</html>
