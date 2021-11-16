<section class="welcome-sec get-started-sec buy" id="welcome_portal_buy">
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
					<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already sourced the business you plan to buy? </h6>
						<aside>
							<div class="source">
								<figure>
									<input type="radio" id="buy_have_you_yes" name="buy_have_you" value="Yes">
									<label for="buy_have_you_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_have_you_no" name="buy_have_you" value="No">
									<label for="buy_have_you_no">No</label>
								</figure>
							</div>
							<div class="start_check">
								<label>If so, please share your business's name, the industry it operates within, and the year in which it was founded. </label>
								<label>Business Name:</label>
								<input type="text" placeholder="" name="buy_business_name">
								<label>Industry Name:</label>
								<select name="buy_industry" id="buy_industry">
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
								<input type="number" placeholder="" name="buy_year" class="question_year" min="0" max="9999" maxlength="4">
								<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="<?php echo home_url();?>/privacy-policy/">Privacy Policy</a>
								</p>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Are you planning to buy this business with a partner(s)?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_business_yes" name="buy_business" value="Yes">
									<label for="buy_business_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_business_no" name="buy_business" value="No">
									<label for="buy_business_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_business_not_sure" name="buy_business" value="not sure">
									<label for="buy_business_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already established an entity that will buy the business? </h6>
						<aside>
							<div class="source">
								<figure>
									<input type="radio" id="entity_yes" name="entity" value="Yes">
									<label for="entity_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="entity_no" name="entity" value="No">
									<label for="entity_no">No</label>
								</figure>
							</div>
							<div class="entity_check">
								<div class="source-area">
									<p>If so, which organizational structure have you selected?</p>
									<figure>
										<input type="radio" id="buy_sole_proprietorship" name="organizational_structure" value="Sole proprietorship">
										<label for="buy_sole_proprietorship">Sole proprietorship</label>
									</figure>
									<figure>
										<input type="radio" id="buy_limited_partnership" name="organizational_structure" value="Limited partnership">
										<label for="buy_limited_partnership">Limited partnership</label>
									</figure>
									<figure>
										<input type="radio" id="buy_general_partnership" name="organizational_structure" value="General partnership">
										<label for="buy_general_partnership">General partnership</label>
									</figure>
									<figure>
										<input type="radio" id="buy_llc" name="organizational_structure" value="Limited liability corporation(LLC)">
										<label for="buy_llc">Limited liability corporation (LLC) </label>
									</figure>
									<figure>
										<input type="radio" id="buy_s_corporation" name="organizational_structure" value="S-corporation">
										<label for="buy_s_corporation">S-corporation</label>
									</figure>
									<figure>
										<input type="radio" id="buy_c_corporation" name="organizational_structure" value="C-corporation">
										<label for="buy_c_corporation">C-corporation</label>
									</figure>
								</div>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business require a physical site?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_physical_site_yes" name="physical_site" value="Yes">
									<label for="buy_physical_site_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_physical_site_no" name="physical_site" value="No">
									<label for="buy_physical_site_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_physical_site_not_sure" name="physical_site" value="Not Sure">
									<label for="buy_physical_site_not_sure">I'm not sure</label>
								</figure>
							</div>
							<div class="physical_site buy_physical">
								<p>If so, choose all that apply:</p>
								<div class="source-area pro-duce">
									<figure>
										<input type="checkbox" id="retail_site" name="physical_site_apply[]" value="Retail site">
										<label for="retail_site">Retail site</label>
									</figure>
									<figure>
										<input type="checkbox" id="office_space" name="physical_site_apply[]" value="Office space">
										<label for="office_space">Office space</label>
									</figure>
									<figure>
										<input type="checkbox" id="industrial_site" name="physical_site_apply[]" value="Industrial site">
										<label for="industrial_site">Industrial site</label>
									</figure>
									<figure>
										<input type="checkbox" id="other_real_estate" name="physical_site_apply[]" value="Other real estate">
										<label for="other_real_estate">Other real estate </label>
									</figure>
								</div>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business produce a physical product?</h6>
						<aside>
							<div class="source">
									<figure>
										<input type="radio" id="buy_physical_product_yes" name="physical_product" value="Yes">
										<label for="buy_physical_product_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="buy_physical_product_no" name="physical_product" value="No">
										<label for="buy_physical_product_no">No</label>
									</figure>
									<!--<figure>
										<input type="radio" id="buy_physical_product_not_sure" name="physical_product" value="not sure">
										<label for="buy_physical_product_not_sure">I'm not sure</label>
									</figure>-->
								</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business offer a fee-based service?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_fee_based_yes" name="fee_based" value="Yes">
									<label for="buy_fee_based_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_fee_based_no" name="fee_based" value="No">
									<label for="buy_fee_based_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_fee_based_not_sure" name="fee_based" value="Not sure">
									<label for="buy_fee_based_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business serve food or drinks to customers?</h6>
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
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you provide medical services or medical advice to your client base?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_medical_services_yes" name="medical_services" value="Yes">
									<label for="buy_medical_services_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_medical_services_no" name="medical_services" value="No">
									<label for="buy_medical_services_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_medical_services_not_sure" name="medical_services" value="Not sure">
									<label for="buy_medical_services_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business require specialized equipment?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_specialized_equipment_yes" name="specialized_equipment" value="Yes">
									<label for="buy_specialized_equipment_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_specialized_equipment_no" name="specialized_equipment" value="No">
									<label for="buy_specialized_equipment_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_specialized_equipment_not_sure" name="specialized_equipment" value="Not sure">
									<label for="buy_specialized_equipment_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business operate a fleet of vehicles?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_vehicles_yes" name="vehicles" value="Yes">
									<label for="buy_vehicles_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_vehicles_no" name="vehicles" value="No">
									<label for="buy_vehicles_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_vehicles_not_sure" name="vehicles" value="Not sure">
									<label for="buy_vehicles_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that other produce?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_distribute_products_yes" name="distribute_products" value="Yes">
									<label for="buy_distribute_products_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_distribute_products_no" name="distribute_products" value="No">
									<label for="buy_distribute_products_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_distribute_products_not_sure" name="distribute_products" value="not sure">
									<label for="buy_distribute_products_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you require debt financing?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_require_debt_yes" name="require_debt" value="Yes">
									<label for="buy_require_debt_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_require_debt_no" name="require_debt" value="No">
									<label for="buy_require_debt_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_require_debt_not_sure" name="require_debt" value="Not sure">
									<label for="buy_require_debt_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business have employees?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_have_employees_yes" name="have_employees" value="Yes">
									<label for="buy_have_employees_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_have_employees_no" name="have_employees" value="No">
									<label for="buy_have_employees_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_have_employees_not_sure" name="have_employees" value="Not sure">
									<label for="buy_have_employees_not_sure">I'm not sure</label>
								</figure>
							</div>
						</aside>
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to raise equity from outside investors?</h6>
						<aside>
							<div class="sourced">
								<figure>
									<input type="radio" id="buy_investors_yes" name="outside_investors" value="Yes">
									<label for="buy_investors_yes"> Yes</label>
								</figure>
								<figure>
									<input type="radio" id="buy_investors_no" name="outside_investors" value="No">
									<label for="buy_investors_no">No</label>
								</figure>
								<figure>
									<input type="radio" id="buy_investors_not_sure" name="outside_investors" value="Not sure">
									<label for="buy_investors_not_sure">I'm not sure</label>
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
							<a href="#" screen_id="3" class="next-screen close-next">Next</a>
							<a href="#" screen_id="3" class="next-screen if-next" physical="buy">Next</a>
						</div>
					</div>	
					</div>	
				</div>
			</div>	
		</div>
	</div>
</section>