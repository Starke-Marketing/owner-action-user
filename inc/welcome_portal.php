<?php 
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$user_data = get_user_meta($user_id);
?>
<form role="form" id="slider_portal_form">
	<div class="slider_portal">	
		<section class="welcome-sec get-started-sec" id="welcome_portal_1">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="oppnity-text portal-text">
							<h1>Welcome to your owner's portal. </h1>
							<p>Here, you'll find a customized checklist of the actions you need to take to help your new or existing business thrive.</p>					
						</div>
						<div class="purchase about-two your-new">
							<h6>Let's get started.</h6>
							<p>This should only take about two minutes.</p>
							<label>What is your name?</label>
							<div class="hlf-area">
								<div class="first_hlf">
									<label for="first_name">First name </label>
									<input type="text" name="your_name" required id="first_name">
								</div>
								<div class="first_hlf">
									<label for="last_name">Last name </label>
									<input type="text" name="your_name_last" id="last_name">
								</div>
							</div>
							<button class="thanks-next-lets" type="button" thanksval="">Next</button>
						</div>
					</div>	
				</div>
			</div> 
		</section>
		<section class="welcome-sec get-started-sec" id="welcome_portal_2">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="oppnity-text">
							<h1>Thanks, <span id="your_name_text"></span></h1>
						</div>
						<div class="purchase about-two thanks-page would-like">
							<h6>Which of the following statements best describe your business objective? </h6>
							<div class="thanks_portal">
								<input type="radio" id="start" name="business_portal" value="start">
								<label for="start"> I am planning to start a business</label>
								<br>
								<input type="radio" id="buy" name="business_portal" value="buy">
								<label for="buy">I am planning to open a franchise unit</label>
								<br>
								<input type="radio" id="franchise" name="business_portal" value="franchise">
								<label for="franchise">I am planning to buy a business or an existing franchise unit</label>
								<br>
								<input type="radio" id="undecided" name="business_portal" value="undecided">
								<label for="undecided">I would like to become a business owner, but I haven't decided on
								my path yet</label>
								<br>
								<input type="radio" id="manage" name="business_portal" value="manage">
								<label for="manage"> I already own a business and would like to optimize it and help it grow</label>
								<br>
								<input type="radio" id="sell" name="business_portal" value="sell">
								<label for="sell">I am planning to sell my business</label>
								<br>
								<input type="radio" id="close" name="business_portal" value="close">
								<label for="close">I need to close my business</label>
							</div>
							<div class="btn_own_next">
								<button class="thanks-previous" type="button" thanksval="no">Previous</button>
								<a href="#" class="thanks-next" thanksval="">Next</a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<?php include_once('start.php');?>
		<?php include_once('buy.php');?>
		<?php include_once('franchise.php');?>
		<?php include_once('undecided.php');?>
		<?php include_once('manage.php');?>
		<?php include_once('sell.php');?>
		<?php include_once('close.php');?>
		<?php include_once('retail-next-screen.php');?>
		<?php include_once('sourced-business-sell.php');?>
		<?php include_once('email-pass-setup.php');?>
	</div>
</form>