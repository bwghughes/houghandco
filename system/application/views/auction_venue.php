<? $this->load->view('auction_header'); ?>
	
		<!-- navigation -->
		<ul class="nav" id="nav">
			<li class="a-services"><a href="<?=site_url();?>/auction-services"><span><strong><em>auction services</em></strong></span></a></li>
			<li class="pink auction "><a href="<?=site_url();?>/auction-services/auction-dates"><span><strong><em>auction<br/> dates</em></strong></span></a></li>
			<li class="pink enter"><a href="<?=site_url();?>/auction-services/enter-property"><span><strong><em>enter a <br/> property</em></strong></span></a></li>
			<li class="pink estate"><a href="<?=site_url();?>/auction-services/estate-agents"><span><strong><em>estate<br/> agents</em></strong></span></a></li>
			<li class="pink"><a href="<?=site_url();?>/auction-services/auction-catalogue"><span><strong><em>catalogue<br/> of properties</em></strong></span></a></li>
			<li class="pink contact-1"><a href="<?=site_url();?>/contact-us"><span><strong><em>contact</em></strong></span></a></li>
		</ul>
		<!-- content -->
		<div id="content">
			<!-- column -->
			<div class="column">
				<div class="column-decor">
				
				</div>
			</div>
			<? $this->load->view('side_bar'); ?>
			
		</div>
<? $this->load->view('footer'); ?>
