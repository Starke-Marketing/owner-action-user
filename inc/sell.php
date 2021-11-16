<!--  get-started-sec -->
<section class="welcome-sec get-started-sec sell" id="portal_sell">
   <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="oppnity-text">
				    <h1>Sounds Great.</h1>
					<p>Now, let's tailor your checklist to your specific business needs. Check the boxes that apply to you.</p>
	            </div>
				<div class="already">
					<div class="founded">
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> What is your business's name?</h6>
					    <aside>
							<label>Business Name:</label>
							<input type="text" placeholder="" name="sell_business_name">
							<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="<?php echo get_permalink(904);?>">Privacy Policy</a>
							</p>
						</aside>
                        <h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within?</h6>	
						<aside>
							<label>Industry Name:</label>
							<select name="sell_industry" id="sell_industry">
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
							<input type="number" placeholder="" name="sell_year" class="question_year" min="0" max="9999" maxlength="4">
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business? </h6>
						
						<aside>
							<div class="source-area organizational_stru">
								<figure>
									<input type="radio" id="sole_proprietorship_choose_business" name="choose_business" value="Sole proprietorship">
									<label for="sole_proprietorship_choose_business">Sole proprietorship</label>
								</figure>
								<figure>
									<input type="radio" id="limited_partnership_choose_business" name="choose_business" value="Limited partnership">
									<label for="limited_partnership_choose_business">Limited partnership</label>
								</figure>
								<figure>
									<input type="radio" id="general_partnership_choose_business" name="choose_business" value="General partnership">
									<label for="general_partnership_choose_business">General partnership</label>
								</figure>
								<figure>
									<input type="radio" id="limited_liability_corporation_choose_business" name="choose_business" value="Limited liability corporation (LLC)">
									<label for="limited_liability_corporation_choose_business">Limited liability corporation (LLC) </label>
								</figure>
								<figure>
									<input type="radio" id="s_corporation_choose_business" name="choose_business" value="S-corporation">
									<label for="s_corporation_choose_business">S-corporation</label>
								</figure>
								<figure>
									<input type="radio" id="c_corporation_choose_business" name="choose_business" value="C-corporation">
									<label for="c_corporation_choose_business">C-corporation</label>
								</figure>
							</div>
						</aside>
						
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you have any employees?</h6>
						<aside>
							<div class="source">
								<figure>
									<input type="radio" id="any_employees_yes" name="any_employees" value="Yes">
									<label for="any_employees_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="any_employees_no" name="any_employees" value="No">
									<label for="is_franchies_no">No</label>
								</figure>
							</div>
						</aside>
						
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business have a physical location?</h6>
						<aside>
							<div class="sourced have-any">
								<figure>
									<input type="radio" id="physical_location_owns" name="physical_location" value="Yes">
									<label for="physical_location_owns">Yes, my business owns real estate</label>
								</figure>
								<figure>
									<input type="radio" id="physical_location_leases" name="physical_location" value="Yes_leases">
									<label for="physical_location_leases">Yes, my business leases real estate</label>
								</figure>
								<figure>
									<input type="radio" id="physical_location_no" name="physical_location" value="No">
									<label for="physical_location_no">No</label>
								</figure>
							</div>
						</aside>
						
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to work with a business brokers?</h6>
						<aside>
							<div class="sourced sell_if">
								<figure>
									<input type="radio" id="business_brokers_yes" name="business_brokers" value="Yes">
									<label for="business_brokers_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="business_brokers_no" name="business_brokers" value="No">
									<label for="business_brokers_no">No, I will do it on my own</label>
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
							<a href="#" screen_id="7" class="next-screen close-next">Next</a>
							<a href="#" screen_id="7" class="next-screen if-sell" physical="sell">Next</a>
						</div>
					</div>
				</div>
			</div>	
        </div>
	</div>
</section>