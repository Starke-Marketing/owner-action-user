<?php
if ( is_user_logged_in() ) { 
	$current_user = wp_get_current_user();
	
    $user_id = $current_user->ID;
    $user_data = get_user_meta($user_id);
	
	$company_name = get_user_meta( $user_id, 'company_name', true );
	$contact_name = get_user_meta( $user_id, 'contact_name', true );
	$email_address = get_user_meta( $user_id, 'email_address', true );
	$physical_address = get_user_meta( $user_id, 'physical_address', true );
	$city = get_user_meta( $user_id, 'city', true );
	$state = get_user_meta( $user_id, 'state', true );
	$zip = get_user_meta( $user_id, 'zip', true );
	
	$expertise = get_user_meta( $user_id, 'expertise', true );
	
	$services = get_user_meta( $user_id, 'services', true );
	$others_services = get_user_meta( $user_id, 'others_services', true );
	
	$firm = get_user_meta( $user_id, 'firm', true );
	$others_firm = get_user_meta( $user_id, 'others_firm', true );

	$firm_two = get_user_meta( $user_id, 'firm_two', true );
	$others_firm_two = get_user_meta( $user_id, 'others_firm_two', true );
	
	$consulting = get_user_meta( $user_id, 'consulting', true );
	$others_consulting = get_user_meta( $user_id, 'others_consulting', true );

	$marketing = get_user_meta( $user_id, 'marketing', true );
	$others_marketing = get_user_meta( $user_id, 'others_marketing', true );

	$web_devlopement = get_user_meta( $user_id, 'web_devlopement', true );
	$others_web_devlopement = get_user_meta( $user_id, 'others_web_devlopement', true );
	
	$national = get_user_meta( $user_id, 'national', true );
	$msa_states = get_user_meta( $user_id, 'msa_states', true );

?>
	<!--  welcome-sec -->
	<section class="welcome-sec">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="update-text">
						<h1>Update my information/preferences</h1>					
					</div>
					<div class="purchase form-area">
						<div class="form-part">
							<form id="update_register"> 
								<aside class="full-lenth">
									<label>Company Name:</label>
									<input type="text" placeholder="" name="company_name"  value="<?php if(!empty($company_name)){echo $company_name;}?>" required>
								</aside>
								<aside class="full-lenth">
									<label>Primary contact's name (optional):</label>
									<input type="text" placeholder="" name="contact_name"  value="<?php if(!empty($contact_name)){echo $contact_name;}?>" required>
									 </aside> 
								<aside>
									<label>Email Address</label>
									<input type="text" placeholder="" name="email_address" value="<?php if(!empty($email_address)){echo $email_address;}?>" required>
								</aside>
								<aside>						
									<label>Physical Address:</label>
									<input type="text" placeholder="" name="physical_address" value="<?php if(!empty($physical_address)){echo $physical_address;}?>" required >
								</aside>
								<aside class="full-lenth">
									<label>City:</label>
									<input type="text" placeholder=""  name="city" value="<?php if(!empty($city)){echo $city;}?>" required>
								</aside>
								<aside>
									<label>State:</label>
									<input type="text" placeholder=""  name="state" value="<?php if(!empty($state)){echo $state;}?>" required>
								</aside>
								<aside>
									<label>Zip:</label>						
									<input type="text" placeholder="" name="zip" value="<?php if(!empty($zip)){echo $zip;}?>" required>
								</aside>
								<aside class="full-power">
									<input type="hidden" placeholder="" name="user_id" value="<?php if(!empty($user_id)){echo $user_id;}?>" >
									<input type="submit" value="Change my payment info">
									<a href="#" class="update_password">Update my password</a>
								</aside>
								<div id="own-msg"></div>
							</form>
						</div>
					</div>
					<div class="updatepassword form-area">
						<form id="update_password"> 
							<aside class="full-lenth">
								<label>Password:</label>
								<input type="password" placeholder="" id="password" name="password">
							</aside>
							<aside class="full-lenth">
								<label>Confirm Password:</label>
								<input type="password" placeholder="" id="confirm_password" name="confirm_password">
							</aside>
							<aside class="full-lenth">
								<input type="submit" value="Update Password">
							</aside>
						</form>
						<div id="own-msg"></div>
					</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!--  legal-sec -->
	<section class="legal-sec">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hr-part">
					<?php if(!empty($expertise) && $expertise == 2){ ?>
						<div class="staffing">
						   <h6>Accounting/Financial</h6>
						   <form>
								<input type="checkbox" class="services" name="services[]" id="bookkeeping" value="Bookkeeping" <?php if(in_array("Bookkeeping", $services)){echo 'checked';}?>>
								<label for="bookkeeping">Bookkeeping</label><br>
								<input type="checkbox" class="services" name="services[]" id="business-banking" value="Business banking" <?php if(in_array("Business banking", $services)){echo 'checked';}?>>
								<label for="business-banking">Business banking</label><br>
								<input type="checkbox" class="services" name="services[]" id="business-plan-writing" value="Business plan writing" <?php if(in_array("Business plan writing", $services)){echo 'checked';}?>>
								<label for="business-plan-writing">Business plan writing</label><br>
								<input type="checkbox" class="services" class="services" name="services[]" id="business-valuation" value="Business valuation" <?php if(in_array("Business valuation", $services)){echo 'checked';}?>>
								<label for="business-valuation">Business valuation</label><br>
								<input type="checkbox" class="services" name="services[]" id="collections" value="Collections" <?php if(in_array("Collections", $services)){echo 'checked';}?>>
								<label for="collections">Collections</label><br>
								<input type="checkbox" class="services" name="services[]" id="outsourced-cfo" value="Outsourced CFO" <?php if(in_array("Outsourced CFO", $services)){echo 'checked';}?>>
								<label for="outsourced-cfo">Outsourced CFO</label><br>
								<input type="checkbox" class="services" name="services[]" id="payment-processing" value="Payment processing" <?php if(in_array("Payment processing", $services)){echo 'checked';}?>>
								<label for="payment-processing">Payment processing</label><br>
								<input type="checkbox" class="services" name="services[]" id="payroll-processing" value="Payroll processing" <?php if(in_array("Payroll processing", $services)){echo 'checked';}?>>
								<label for="payroll-processing">Payroll processing</label><br>
								<input type="checkbox" class="services" name="services[]" id="personal-financial-planning" value="Personal financial planning" <?php if(in_array("Personal financial planning", $services)){echo 'checked';}?>>
								<label for="personal-financial-planning">Personal financial planning</label><br>
								<input type="checkbox" class="services" name="services[]" id="tax-accounting" value="Tax accounting" <?php if(in_array("Tax accounting", $services)){echo 'checked';}?>>
								<label for="tax-accounting">Tax accounting</label><br>
								<input type="checkbox" class="services" name="services[]" id="wealth-management" value="Wealth management" <?php if(in_array("Wealth management", $services)){echo 'checked';}?>>
								<label for="wealth-management">Wealth management</label><br>
								<input type="checkbox" name="services[]" id="service-others" value="Other" <?php if(in_array("Other", $services)){echo 'checked';}?>>
								<label for="service-others">Other</label><br>
								<input type="text" id="others_services" name="others_services" value="<?php if(!empty($others_services)){echo $others_services;}?>" placeholder="Other">
							</form>	 
						</div>
					<?php }
					if(!empty($expertise) && $expertise == 3){ ?>
						<div class="staffing">
						   <h6>Legal</h6>
						   <form>
								<input type="checkbox" class="firms" name="firm[]" id="bankruptcy" value="Bankruptcy" <?php if(in_array("Bankruptcy", $firm)){echo 'checked';}?>>
								<label for="bankruptcy">Bankruptcy</label><br>
								<input type="checkbox" class="firms" name="firm[]" id="business-formation" value="Business formation" <?php if(in_array("Business formation", $firm)){echo 'checked';}?>>
								<label for="business-formation">Business formation</label>
								<input type="checkbox" class="firms" name="firm[]" id="estate-planning" value="Estate planning"<?php if(in_array("Estate planning", $firm)){echo 'checked';}?>>
								<label for="estate-planning">Estate planning</label>
								<input type="checkbox" class="firms" name="firm[]" id="litigation" value="Litigation" <?php if(in_array("Litigation", $firm)){echo 'checked';}?>>
								<label for="litigation">Litigation</label>
								<input type="checkbox" class="firms" name="firm[]" id="mergers-and-acquisitions" value="Mergers and acquisitions" <?php if(in_array("Mergers and acquisitions", $firm)){echo 'checked';}?>>
								<label for="mergers-and-acquisitions">Mergers and acquisitions</label>
								<input type="checkbox" class="firms" name="firm[]" id="patent-law" value="Patent law" <?php if(in_array("Patent law", $firm)){echo 'checked';}?>>
								<label for="patent-law">Patent law</label>
								<input type="checkbox" class="firms" name="firm[]" id="tax" value="Tax" <?php if(in_array("Tax", $firm)){echo 'checked';}?>>
								<label for="tax">Tax</label>
								<input type="checkbox" name="firm[]" id="firm-other" value="Other" <?php if(in_array("Other", $firm)){echo 'checked';}?>>
								<label for="firm-other">Other</label>
								<input type="text" id="others_firm" name="others_firm" value="<?php if(!empty($others_firm)){echo $others_firm;}?>" placeholder="Other"> 
							</form>
						</div>
					<?php }
					if(!empty($expertise) && $expertise == 4){ ?>
						<div class="staffing">
						   <h6>Business Brokerage</h6>
						   <form>
								<input type="checkbox" class="firm_two" name="firm_two[]" id="business-brokerage-buyer-agent" value="Business brokerage buyer’s agent" <?php if(in_array("Business brokerage buyer’s agent", $firm_two)){echo 'checked';}?>>
								<label for="business-brokerage-buyer-agent">Business brokerage buyer’s agent</label><br>
								<input type="checkbox" class="firm_two" name="firm_two[]" id="business-brokerage-seller-agent" value="Business brokerage seller’s agent" <?php if(in_array("Business brokerage seller’s agent", $firm_two)){echo 'checked';}?>>
								<label for="business-brokerage-seller-agent">Business brokerage seller’s agent</label><br>
								<input type="checkbox" class="firm_two" name="firm_two[]" id="commercial-loan-brokerage" value="commercial-loan-brokerage" <?php if(in_array("commercial-loan-brokerage", $firm_two)){echo 'checked';}?>>
								<label for="commercial-loan-brokerage">Commercial loan brokerage</label><br>
								<input type="checkbox" class="firm_two" name="firm_two[]" id="commercial-real-estate-brokerage" value="Commercial real estate brokerage" <?php if(in_array("Commercial real estate brokerage", $firm_two)){echo 'checked';}?>>
								<label for="commercial-real-estate-brokerage">Commercial real estate brokerage</label><br>
								<input type="checkbox" name="firm_two[]" id="firm-two-other" value="Other" <?php if(in_array("Other", $firm_two)){echo 'checked';}?>>
								<label for="firm-two-other">Other</label><br>
								<input type="text" id="others_firm_two" name="others_firm_two" value="<?php if(!empty($others_firm_two)){echo $others_firm_two;}?>" placeholder="Other">
							</form>
						</div>
					<?php }
					if(!empty($expertise) && $expertise == 5){ ?>
						<div class="staffing">
						   <h6>HR/Staffing</h6>
						   <form>
								<input type="checkbox" class="consulting" name="consulting[]" id="consulting-business-plan-writing" value="Business plan writing" <?php if(in_array("Business plan writing", $consulting)){echo 'checked';}?>>
								<label for="consulting-business-plan-writing">Business plan writing</label><br>
								<input type="checkbox" class="consulting" name="consulting[]" id="consulting-outsourced-hr" value="Outsourced HR" <?php if(in_array("Outsourced HR", $consulting)){echo 'checked';}?>>
								<label for="consulting-outsourced-hr">Outsourced HR</label><br>
								<input type="checkbox" class="consulting" name="consulting[]" id="payroll-processing" value="Payroll processing" <?php if(in_array("Payroll processing", $consulting)){echo 'checked';}?>>
								<label for="payroll-processing">Payroll processing</label><br>
								<input type="checkbox" class="consulting" name="consulting[]" id="staffing" value="Staffing" <?php if(in_array("Staffing", $consulting)){echo 'checked';}?>>
								<label for="staffing">Staffing</label><br>
								<input type="checkbox" name="consulting[]" id="consulting-other" value="Other" <?php if(in_array("Other", $consulting)){echo 'checked';}?>>
								<label for="consulting-other">Other</label><br>
								<input type="text" id="others_consulting" name="others_consulting" value="<?php if(!empty($others_consulting)){echo $others_consulting;}?>" placeholder="Other">
							</form>
						</div>
					<?php }
					if(!empty($expertise) && $expertise == 6){ ?>
						<div class="staffing">
						   <h6>Marketing/Advertising</h6>
						   <form>
								<input type="checkbox" class="marketing" name="marketing[]" id="advertising" value="Advertising" <?php if(in_array("Advertising", $marketing)){echo 'checked';}?>>
								<label for="advertising">Advertising</label><br>
								<input type="checkbox" class="marketing" name="marketing[]" id="branding" value="Branding" <?php if(in_array("Branding", $marketing)){echo 'checked';}?>>
								<label for="branding">Branding</label><br>
								<input type="checkbox" class="marketing" name="marketing[]" id="graphic-design" value="Graphic design" <?php if(in_array("Graphic design", $marketing)){echo 'checked';}?>>
								<label for="graphic-design">Graphic design</label><br>
								<input type="checkbox" class="marketing" name="marketing[]" id="seo-consulting" value="SEO consulting" <?php if(in_array("SEO consulting", $marketing)){echo 'checked';}?>>
								<label for="seo-consulting">SEO consulting</label><br>
								<input type="checkbox" name="marketing[]" id="marketing-other" value="Other" <?php if(in_array("Other", $marketing)){echo 'checked';}?>>
								<label for="marketing-other">Other</label><br>
								<input type="text" id="others-marketing" name="others_marketing" value="<?php if(!empty($others_marketing)){echo $others_marketing;}?>" placeholder="Other">
							</form>
						</div>
					<?php }
					if(!empty($expertise) && $expertise == 7){ ?>
						<div class="staffing">
						   <h6>Development/Tech Support</h6>
						   <form>
								<input type="checkbox" class="web_devlopement" name="web_devlopement[]" id="outsourced-it" value="Outsourced IT" <?php if(in_array("Outsourced IT", $web_devlopement)){echo 'checked';}?>>
								<label for="outsourced-it">Outsourced IT</label><br>
								<input type="checkbox" class="web_devlopement" name="web_devlopement[]" id="seo-consulting" value="SEO consulting" <?php if(in_array("SEO consulting", $web_devlopement)){echo 'checked';}?>>
								<label for="graphic-design">SEO consulting</label><br>
								<input type="checkbox" class="web_devlopement" name="web_devlopement[]" id="website-development" value="Website development" <?php if(in_array("Website development", $web_devlopement)){echo 'checked';}?>>
								<label for="website-development">Website development</label>
								<input type="checkbox" name="web_devlopement[]" id="web-devlopement-other" value="Other" <?php if(in_array("Other", $web_devlopement)){echo 'checked';}?>>
								<label for="web-devlopement-other">Other</label>
								<input type="text" id="others-web_devlopement" name="others_web_devlopement" value="<?php if(!empty($web_devlopement)){echo $web_devlopement;}?>" placeholder="Other">
							</form>
						</div>
					<?php } ?>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!--  welcome-sec -->
	<section class="welcome-sec">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="purchase">
						<ul>
						   <li><a href="#" class="do_not_action_update"><i class="fa fa-paper-plane" aria-hidden="true"></i> Do not send Owner Actions updates</a></li>
						   <li><a href="#" class="do_not_send_leads"><i class="fa fa-envelope" aria-hidden="true"></i>  Do not send me leads</a></li>
						   <li><a href="#" class="delete_my_account"><i class="fa fa-trash" aria-hidden="true"></i> Delete my account</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</section>
<?php }else {
	echo '<a href="register">login</a>';
} ?>