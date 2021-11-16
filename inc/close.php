<!--  get-started-sec -->
<section class="welcome-sec get-started-sec close" id="welcome_portal_close">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="oppnity-text">
				   <!-- <h1>Close</h1>-->
					<p>Okay Now, let's tailor your checklist to your specific business needs. Check the boxes that apply to you.</p>
	            </div>
				<div class="already">
				    <form>
					<div class="founded">
				    <h6><i class="fa fa-caret-right" aria-hidden="true"></i> What is your business's name?  </h6>
					    <aside>
							<label>Business Name:</label>
							<input type="text" placeholder="" name="close_business_name">
							<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="<?php echo get_permalink(904);?>">Privacy Policy</a>
							</p>
						</aside>
                        <h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within?</h6>
					    <aside>
							<label>Industry Name:</label>
							<select name="close_industry" id="close_industry">
								<option>Select Industry</option>
								<option value="Agriculture/forestry">Agriculture/forestry</option>
								<option value="Child care">Child care</option>
								<option value="Construction/utilities">Construction/utilities</option>
								<option value="Entertainment">Entertainment</option>
								<option value="Financial services">Financial services</option>
								<option value="Gaming">Gaming</option>
								<option value="Health/medical services">Health/medical services</option>
								<option value="Home care service">Home care service</option>
								<option value="Hospitality">Hospitality</option>
								<option value="Legal services">Legal services</option>
								<option value="Personal services">Personal services</option>
								<option value="Professional services">Professional services</option>
								<option value="Real estate">Real estate</option>
								<option value="Retail sales">Retail sales</option>
								<option value="Safety/security services">Safety/security services</option>
								<option value="Technology">Technology</option>
								<option value="Transportation">Transportation</option>
								<option value="Other">Other</option>
							</select>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> When was your business founded?</h6>
						<aside>
							<label>What year was the business formed?:</label>
							<input type="number" placeholder="" name="close_year" class="question_year" min="0" max="9999" maxlength="4">
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business?</h6>
						<aside>
							<div class="source-area organizational_stru">
								<figure>
									<input type="radio" id="close_sole_proprietorship" name="close_choose_business" value="Sole proprietorship">
									<label for="close_sole_proprietorship">Sole proprietorship</label>
								</figure>
								<figure>
									<input type="radio" id="close_limited_partnership" name="close_choose_business" value="Limited partnership">
									<label for="close_limited_partnership">Limited partnership</label>
								</figure>
								<figure>
									<input type="radio" id="close_general_partnership" name="close_choose_business" value="General partnership">
									<label for="close_general_partnership">General partnership</label>
								</figure>
								<figure>
									<input type="radio" id="close_limited_liability_corporation" name="close_choose_business" value="Limited liability corporation (LLC)">
									<label for="close_limited_liability_corporation">Limited liability corporation (LLC) </label>
								</figure>
								<figure>
									<input type="radio" id="close_s_corporation" name="close_choose_business" value="S-corporation">
									<label for="close_s_corporation">S-corporation</label>
								</figure>
								<figure>
									<input type="radio" id="close_c_corporation" name="close_choose_business" value="C-corporation">
									<label for="close_c_corporation">C-corporation</label>
								</figure>
							</div>
						</aside>
						
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you have any employees?</h6>
						<aside>
							<div class="source">
								<figure>
									<input type="radio" id="close_any_employees_yes" name="close_any_employees" value="Yes">
									<label for="close_any_employees_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="close_any_employees_no" name="close_any_employees" value="No">
									<label for="close_is_franchies_no">No</label>
								</figure>
							</div>
						</aside>
						
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business own real estate?</h6>
						<aside>
							<div class="sourced have-any">
								<figure>
									<input type="radio" id="close_physical_location_owns" name="close_physical_location" value="Yes">
									<label for="close_physical_location_owns">Yes, my business owns real estate</label>
								</figure>
								<figure>
									<input type="radio" id="close_physical_location_leases" name="close_physical_location" value="Yes_leases">
									<label for="close_physical_location_leases">Yes, my business leases real estate</label>
								</figure>
								<figure>
									<input type="radio" id="close_physical_location_no" name="close_physical_location" value="No">
									<label for="close_physical_location_no">No</label>
								</figure>
							</div>
						</aside>
						
					</div>	
					<p class="error_button">Please complete every option.</p>
					<div class="btn_next_prev">
						<div class="back-main">
							<a href="#" class="back_btn back_btn_id_two">Back</a>
						</div>
						<div class="next-main">
							<a href="#" class="next-screen close-next">Next</a>
						</div>
					</div>
				</div>
			</div>	
        </div>
	</div>
</section>