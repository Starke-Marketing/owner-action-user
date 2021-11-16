
	<!--  get-started-sec -->
	<section class="welcome-sec get-started-sec manage" id="owner_mange">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="oppnity-text">
						<h1>Sounds Great.</h1>
						<p>Now, let's tailor your checklist to your specific business needs. Check the boxes that apply to you.</p>
					</div>
					<div class="already">
						<div class="founded">
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> What is your business's legal name?  </h6>
							<aside>
								<label>Business Name:</label>
								<input type="text" placeholder="" name="manage_business_name">
								<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="<?php echo get_permalink(904);?>">Privacy Policy</a>
								</p>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within?</h6>
							<aside>
								<label>Industry Name:</label>
								<select name="manage_industry" id="manage_industry">
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
							<!--<h6><i class="fa fa-caret-right" aria-hidden="true"></i> When was your business founded?</h6>-->
							<aside>
								<label>What year was the business formed?:</label>
								<input type="number" placeholder="" name="manage_year" class="question_year" min="0" max="9999" maxlength="4">
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business?</h6>
							<aside>
								<div class="source-area organizational_stru">
									<figure>
										<input type="radio" id="manage_sole_proprietorship" name="choose_business" value="Sole proprietorship">
										<label for="manage_sole_proprietorship">Sole proprietorship</label>
									</figure>
									<figure>
										<input type="radio" id="manage_limited_partnership" name="choose_business" value="Limited partnership">
										<label for="manage_limited_partnership">Limited partnership</label>
									</figure>
									<figure>
										<input type="radio" id="manage_general_partnership" name="choose_business" value="General partnership">
										<label for="manage_general_partnership">General partnership</label>
									</figure>
									<figure>
										<input type="radio" id="manage_limited_liability_corporation" name="choose_business" value="Limited liability corporation (LLC)">
										<label for="manage_limited_liability_corporation">Limited liability corporation (LLC) </label>
									</figure>
									<figure>
										<input type="radio" id="manage_s_corporation" name="choose_business" value="S-corporation">
										<label for="manage_s_corporation">S-corporation</label>
									</figure>
									<figure>
										<input type="radio" id="manage_c_corporation" name="choose_business" value="C-corporation">
										<label for="manage_c_corporation">C-corporation</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Is your business a franchise?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="manage_is_franchies_yes" name="is_franchies" value="Yes">
										<label for="manage_is_franchies_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_is_franchies_no" name="is_franchies" value="No">
										<label for="manage_is_franchies_no">No</label>
									</figure>
								</div>
								<figure>
									<div class="manage_franchise_name">
									<p>If so, what is the name of the franchise? </p>
									<label>Franchise Name:</label>
									<input type="text" placeholder="" name="manage_franchise_name">
									</div>
								</figure>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you hired any employees?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="manage_hired_employees_yes" name="hired_employees" value="Yes">
										<label for="manage_hired_employees_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_hired_employees_yes_no" name="hired_employees" value="No">
										<label for="manage_hired_employees_yes_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees soon?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="manage_hired_employees_soon_yes" name="hired_employees_soon" value="Yes">
										<label for="manage_hired_employees_soon_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_hired_employees_soon_no" name="hired_employees_soon" value="No">
										<label for="manage_hired_employees_soon_no"> No</label>
									</figure>
									<figure>
										<input type="radio" id="manage_hired_employees_soon_not_sure" name="hired_employees_soon" value="I'm not sure">
										<label for="manage_hired_employees_soon_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business produce a physical product?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="manage_business_brokers_yes" name="physical_product" value="Yes">
										<label for="manage_business_brokers_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_business_brokers_no" name="physical_product" value="No">
										<label for="manage_business_brokers_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you offer a fee-based service?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="free_service_yes" name="free_service" value="Yes">
										<label for="free_service_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="free_service_no" name="free_service" value="No">
										<label for="free_service_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you sell food or drinks to customers?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="sell_food_yes" name="sell_food" value="Yes">
										<label for="sell_food_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="sell_food_no" name="sell_food" value="No">
										<label for="sell_food_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you provide medical services or medical advice to your client base?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="medical_services_yes" name="medical_services" value="Yes">
										<label for="medical_services_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="medical_services_no" name="medical_services" value="No">
										<label for="medical_services_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business have a physical location?	</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="manage_physical_site_yes" name="physical_site" value="Yes">
										<label for="manage_physical_site_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_physical_site_no" name="physical_site" value="No">
										<label for="manage_physical_site_no">No</label>
									</figure>
								</div>
								
								<div class="physical_site "> 
									<p>If so, choose all that apply:</p>
									<div class="source-area pro-duce start_physical_site">
										<figure>
											<input type="checkbox" id="manage_business_require_all_retails" name="physical_site_apply[]" value="Retail site">
											<label for="manage_business_require_all_retails">Retail site</label>
										</figure>
										<figure>
											<input type="checkbox" id="manage_business_require_all_office" name="physical_site_apply[]" value="Office space">
											<label for="manage_business_require_all_office">Office space</label>
										</figure>
										<figure>
											<input type="checkbox" id="manage_business_require_industrial" name="physical_site_apply[]" value="Industrial site">
											<label for="manage_business_require_industrial">Industrial site</label>
										</figure>
										<figure>
											<input type="checkbox" id="manage_business_require_real" name="physical_site_apply[]" value="Other real estate">
											<label for="manage_business_require_real">Other real estate </label>
										</figure>
									</div>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require specialized equipment?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="manage_specialized_equipment_yes" name="specialized_equipment" value="Yes">
										<label for="manage_specialized_equipment_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="manage_specialized_equipment_no" name="specialized_equipment" value="No">
										<label for="manage_specialized_equipment_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you sell or distribute products that others produce?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="others_produce_yes" name="others_produce" value="Yes">
										<label for="others_produce_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="others_produce_no" name="others_produce" value="No">
										<label for="others_produce_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to raise equity from outside investors?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="outside_investors_yes" name="outside_investors" value="Yes">
										<label for="outside_investors_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="outside_investors_no" name="outside_investors" value="No">
										<label for="outside_investors_no">No</label>
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
								<a href="#" screen_id="6" class="next-screen close-next">Next</a>
								<a href="#" screen_id="6" class="next-screen if-next" physical="start">Next</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>