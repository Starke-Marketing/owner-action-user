<section class="welcome-sec get-started-sec start" id="start_number">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="oppnity-text">
					<h1>Sounds Great.</h1>
					<p>Now, let's tailor your checklist to your specific business needs. Check the boxes that apply to you.</p>
				</div>
				<div class="already">
					<div>
						<div class="founded">
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already started your business?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="yes" name="have_you" value="Yes">
										<label for="yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="no" name="have_you" value="No">
										<label for="no">No</label>
									</figure>
								</div>
								<div class="start_check">
									<label>If so, please share your business's name, the industry it operates within, and the year in which it was founded. </label>
									<label>Business Name:</label>
									<input type="text" placeholder="" name="start_business_name">
									<label>Industry Name:</label>
									<select name="start_industry">
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
									<label>What year was the business formed?:</label>
									<input type="number" placeholder="" name="start_year" class="question_year" min="0" max="9999" maxlength="4">
									<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="<?php echo get_permalink(904);?>">Privacy Policy</a>
									</p>
								</div>
							</aside>
						  
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you determined how you'll structure your business? </h6>
							<aside>
							<div class="source">
								<figure>
									<input type="radio" id="determined_yes" name="determined" value="Yes">
									<label for="determined_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="determined_no" name="determined" value="No">
									<label for="determined_no">No</label>
								</figure>
							</div>
							<div class="start_structure">
								<div class="source-area">
									<p>If so, which organizational structure have you selected?</p>
									<figure>
										<input type="radio" id="sole_proprietorship" name="organizational_structure" value="Sole proprietorship">
										<label for="sole_proprietorship">Sole proprietorship</label>
									</figure>
									<figure>
										<input type="radio" id="limited_partnership" name="organizational_structure" value="Limited partnership">
										<label for="limited_partnership">Limited partnership</label>
									</figure>
									<figure>
										<input type="radio" id="general_partnership" name="organizational_structure" value="General partnership">
										<label for="general_partnership">General partnership</label>
									</figure>
									<figure>
										<input type="radio" id="llc" name="organizational_structure" value="Limited liability corporation(LLC)">
										<label for="llc">Limited liability corporation (LLC) </label>
									</figure>
									<figure>
										<input type="radio" id="s_corporation" name="organizational_structure" value="S-corporation">
										<label for="s_corporation">S-corporation</label>
									</figure>
									<figure>
										<input type="radio" id="c_corporation" name="organizational_structure" value="C-corporation">
										<label for="c_corporation">C-corporation</label>
									</figure>
								</div>
							</div>
							</aside>
							
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business produce a physical product?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="physical_product_yes" name="physical_product" value="Yes">
										<label for="physical_product_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="physical_product_no" name="physical_product" value="No">
										<label for="physical_product_no">No</label>
									</figure>
									<!--<figure>
										<input type="radio" id="physical_product" name="physical_product" value="not sure">
										<label for="physical_product_not_sure">I'm not sure</label>
									</figure>-->
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you offer a fee-based service?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="fee_based_yes" name="fee_based" value="Yes">
										<label for="fee_based_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="fee_based_no" name="fee_based" value="No">
										<label for="fee_based_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="fee_based_not_sure" name="fee_based" value="Not sure">
										<label for="fee_based_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that others produce?</h6>
							<aside>
								<div class="sourced">
								<figure>
									<input type="radio" id="distribute_products_yes" name="distribute_products" value="Yes">
									<label for="distribute_products_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="distribute_products_no" name="distribute_products" value="No">
									<label for="distribute_products_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="distribute_products_not_sure" name="distribute_products" value="not sure">
									<label for="distribute_products_not_sure">I'm not sure</label>
								</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be selling food or drinks to customers?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="selling_food_yes" name="selling_food" value="Yes">
										<label for="selling_food_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="selling_food_no" name="selling_food" value="No">
										<label for="selling_food_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="selling_food_not_sure" name="selling_food" value="Not sure">
										<label for="selling_food_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be providing medical services or medical advice to your client base?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="medical_services_yes" name="medical_services" value="Yes">
										<label for="medical_services_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="medical_services_no" name="medical_services" value="No">
										<label for="medical_services_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="medical_services_not_sure" name="medical_services" value="Not sure">
										<label for="medical_services_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business require a physical site?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="physical_site_yes" name="physical_site" value="Yes">
										<label for="physical_site_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="physical_site_no" name="physical_site" value="No">
										<label for="physical_site_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="physical_site_not_sure" name="physical_site" value="Not sure">
										<label for="physical_site_not_sure">I'm not sure</label>
									</figure>
								</div>
								
								<div class="physical_site "> 
									<p>If so, choose all that apply:</p>
									<div class="source-area pro-duce start_physical_site">
										<figure>
											<input type="checkbox" id="business_require_all_retails" name="physical_site_apply[]" value="Retail site">
											<label for="business_require_all_retails">Retail site</label>
										</figure>
										<figure>
											<input type="checkbox" id="business_require_all_office" name="physical_site_apply[]" value="Office space">
											<label for="business_require_all_office">Office space</label>
										</figure>
										<figure>
											<input type="checkbox" id="business_require_industrial" name="physical_site_apply[]" value="Industrial site">
											<label for="business_require_industrial">Industrial site</label>
										</figure>
										<figure>
											<input type="checkbox" id="business_require_real" name="physical_site_apply[]" value="Other real estate">
											<label for="business_require_real">Other real estate </label>
										</figure>
									</div>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require specialized equipment to execute your idea?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="specialized_equipment_yes" name="specialized_equipment" value="Yes">
										<label for="specialized_equipment_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="specialized_equipment_no" name="specialized_equipment" value="No">
										<label for="specialized_equipment_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="specialized_equipment_not_sure" name="specialized_equipment" value="Not sure">
										<label for="specialized_equipment_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to operate a fleet of vehicles?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="vehicles_yes" name="vehicles" value="Yes">
										<label for="vehicles_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="vehicles_no" name="vehicles" value="No">
										<label for="vehicles_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="vehicles_not_sure" name="vehicles" value="Not sure">
										<label for="vehicles_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to raise equity from outside investors?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="investors_yes" name="outside_investors" value="Yes">
										<label for="investors_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="investors_no" name="outside_investors" value="No">
										<label for="investors_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="investors_not_sure" name="outside_investors" value="Not sure">
										<label for="investors_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you hired any employees?</h6>
							<aside>
								<div class="source">
									<figure>
										<input type="radio" id="hired_employees_yes" name="hired_employees" value="Yes">
										<label for="hired_employees_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="hired_employees_no" name="hired_employees" value="No">
										<label for="hired_employees_no">No</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees soon?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="employees_soon_yes" name="employees_soon" value="Yes">
										<label for="employees_soon_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="employees_soon_no" name="employees_soon" value="No">
										<label for="employees_soon_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="employees_soon_not_sure" name="employees_soon" value="No sure">
										<label for="employees_soon_not_sure">I'm not sure</label>
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
								<a href="#" screen_id="2" class="next-screen close-next">Next</a>
								<a href="#" screen_id="2" class="next-screen if-next" physical="start">Next</a>
							</div>
						</div>	
					</div>	
				</div>
			</div>	
		</div>
	</div>
</section>