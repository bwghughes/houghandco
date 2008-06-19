<? $this->load->view('professional_services_header'); ?>
		<!-- navigation -->
		<ul class="nav" id="nav">
			<li class="home"><a href="<?=site_url();?>" class="active"><span><strong><em>home</em></strong></span></a></li>
			<li class="p-services active"><a href="<?=site_url();?>/professional-services"><span><strong><em>professional services</em></strong></span></a></li>
			<li class="a-services"><a href="<?=site_url();?>/auction-services"><span><strong><em>auction services</em></strong></span></a></li>
			<li class="contact"><a href="<?=site_url();?>/contact-us"><span><strong><em>contact us</em></strong></span></a></li>
		</ul>
		<!-- content -->
		<div id="content">
			<!-- column -->
			<div class="column">
				<div class="column-decor">
					<? if(isset($content)){ echo $content; } ?>
				</div>
			</div>
			<? $this->load->view('side_bar'); ?>
		</div>
<? $this->load->view('footer'); ?>