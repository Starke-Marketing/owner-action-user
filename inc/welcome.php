<?php 
if ( is_user_logged_in() ) { 
	$current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $user_data = get_user_meta($user_id);
	$contact_name = get_user_meta( $user_id, 'contact_name', true );
?>
	<!--  welcome-sec -->
	<section class="welcome-sec">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="oppnity-text">
						<h1>Welcome back, <?php echo $contact_name;?></h1>
						<h2>What can we help you with today?</h2>					
					</div>
					<div class="purchase">
						<ul>
						   <li><a href="<?php echo home_url();?>/purchased-leads/" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View my purchased leads</a></li>
						   <li><a href="<?php echo home_url();?>/update/" target="_blank"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update my information/preferences</a></li>
						   <li><a href="<?php echo home_url();?>/something-else"><i class="fa fa-check-square" aria-hidden="true"></i> Something else</a></li>
						   <li><a href="<?php echo home_url();?>/portal-checklist"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Portal Flow</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</section>
	 
	<!-- pro-sec -->
	<section class="pro-sec">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<h2>Pro Tips</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="dreamer">
						<figure>
							<img src="<?php echo plugins_url()?>/owner-action-user/assets/images/pro_img.jpg" alt="" class="img-fluid ">
						</figure>
						<aside>
						   <h5>why seller financing can be great source of capital</h5>
						   <h6><i class="fa fa-calendar" aria-hidden="true"></i> April 9, 2021</h6>
						   <p>An attonery can be an invaluable member of your team,especially as you work through the complex parts of a...  </p>
						   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
						</aside>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="dreamer">
						<figure>
							<img src="<?php echo plugins_url()?>/owner-action-user/assets/images/pro_img.jpg" alt="" class="img-fluid ">
						</figure>
						<aside>
						   <h5>why seller financing can be great source of capital</h5>
						   <h6><i class="fa fa-calendar" aria-hidden="true"></i> April 9, 2021</h6>
						   <p>An attonery can be an invaluable member of your team,especially as you work through the complex parts of a...  </p>
						   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
						</aside>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="dreamer">
						<figure>
							<img src="<?php echo plugins_url()?>/owner-action-user/assets/images/pro_img.jpg" alt="" class="img-fluid ">
						</figure>
						<aside>
						   <h5>why seller financing can be great source of capital</h5>
						   <h6><i class="fa fa-calendar" aria-hidden="true"></i> April 9, 2021</h6>
						   <p>An attonery can be an invaluable member of your team,especially as you work through the complex parts of a...  </p>
						   <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
						</aside>
						
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else {
	wp_redirect(home_url().'/register');
	exit();
}
?>