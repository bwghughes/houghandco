<? $this->load->view('auction_header'); ?>
		<ul class="nav" id="nav">
			<li class="a-services"><a href="<?=site_url();?>/auction-services"><span><strong><em>auction services</em></strong></span></a></li>
			<li class="pink auction "><a href="<?=site_url();?>/auction-services/auction-dates"><span><strong><em>auction<br/> dates</em></strong></span></a></li>
			<li class="pink enter"><a href="<?=site_url();?>/auction-services/enter-property"><span><strong><em>enter a <br/> property</em></strong></span></a></li>
			<li class="pink estate"><a href="<?=site_url();?>/auction-services/estate-agents"><span><strong><em>estate<br/> agents</em></strong></span></a></li>
			<li class="pink active"><a href="<?=site_url();?>/auction-services/auction-catalogue"><span><strong><em>catalogue<br/> of properties</em></strong></span></a></li>
			<li class="pink contact-1"><a href="<?=site_url();?>/contact-us"><span><strong><em>contact</em></strong></span></a></li>
		</ul>
		<!-- content -->
		<div id="content">
			<div class="holder">
				<div class="column-holder">
					<? foreach($query->result() as $property){ ?>
					<h2 class="image-head">lot <strong><?=$property->lot_number; ?></strong></h2>
					<!-- column -->
					<div class="column">
						<div class="column-decor">
							<!-- box -->
							<div class="box">
								<div class="box-bg">
									<h3 class="price">Guide price - £<?=$property->guide_price; ?></h3>

									<div class="box-content">
										<img src="images/uploaded/<?=$property->picture; ?>" alt="testing" />
									</div>
									<p class="foot-bar"><strong>Info:</strong><?=$property->selling_info; ?></p>
								</div>
							</div>
							<div class="info">

								<ul>
									
									<li>
										<h3>Address</h3>
										<p><?=$property->address;?></p>
									</li>
									<li>
										<h3>Postcode</h3>
										<p><?=$property->post_code; ?></p>
									</li>
									<li>
										<h3>Location</h3>
										<p><?=$property->location;?></p>
									</li>
									<li>
										<h3>Description</h3>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$property->description;?></p>
									</li>
									<li>
										<h3>Marketing With:</h3>
											<p>&nbsp;<? if(isset($property->agent_picture)){echo "<img src=".base_url()."public/images/uploaded/".$property->agent_picture."/>";}?></p>
								    </li>
									<li>
										<h3>Agent Details:</h3>
										<p><?=$property->agent_message;?></p>
									
								</ul>
								<a href="<?=site_url(); ?>/auction-services/auction-catalogue/<?=$offset+1; ?>" class="next-btn">next property</a>
								
							</div><!-- end box -->
							
						</div>
					</div>

				</div>
				<? } ?>
				<? $this->load->view('side_bar'); ?>
				<a href="<?=site_url(); ?>" class="btn">return home page</a>
			</div>
		</div>
		<a href="#" class="logo-rics logo-rics-small">RICS</a>
		<p id="footer">&copy; 2008 Hough &amp; Co Chartered Surveyors</p>

	</div>
</body>
</html>
