<!-- <form id="star_form">-->
	<section class="welcome-sec get-started-sec franchise" id="welcome_portal_franchise">
	   <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="oppnity-text">
						<h1>Sounds Great.</h1>
						<p>Now, let's tailor your checklist to your specific business needs. Check the boxes that apply to you.</p>
					</div>
					<div class="already">
						<div class="founded">
						<h6><i class="fa fa-caret-right" aria-hidden="true"></i>Have you already selected the franchise you intend to buy?</h6>
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
									<input type="text" placeholder="Franchise Name" name="franchise_business_name">
									<label>Industry Name:</label>
									<select name="franchise_industry">
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
									<input type="number" placeholder="" name="franchise_year" class="question_year" min="0" max="9999" maxlength="4">
									<p class="worrry">Don't worry. We won't share this information with others without your express consent. <a href="#">Privacy Policy</a>
									</p>
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
											<input type="radio" id="franchise_sole_proprietorship" name="organizational_structure" value="Sole proprietorship">
											<label for="franchise_sole_proprietorship">Sole proprietorship</label>
										</figure>
										<figure>
											<input type="radio" id="franchise_limited_partnership" name="organizational_structure" value="Limited partnership">
											<label for="franchise_limited_partnership">Limited partnership</label>
										</figure>
										<figure>
											<input type="radio" id="franchise_general_partnership" name="organizational_structure" value="General partnership">
											<label for="franchise_general_partnership">General partnership</label>
										</figure>
										<figure>
											<input type="radio" id="franchise_llc" name="organizational_structure" value="Limited liability corporation(LLC)">
											<label for="franchise_llc">Limited liability corporation (LLC) </label>
										</figure>
										<figure>
											<input type="radio" id="franchise_s_corporation" name="organizational_structure" value="S-corporation">
											<label for="franchise_s_corporation">S-corporation</label>
										</figure>
										<figure>
											<input type="radio" id="franchise_c_corporation" name="organizational_structure" value="C-corporation">
											<label for="franchise_c_corporation">C-corporation</label>
										</figure>
									</div>
								</div>
							
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> What is the name of the legal entity you established?<br>
								If you haven't created an entity, type N/A.</h6>
							<aside>
								<label>Business Name:</label>
								<input type="text" placeholder="" name="franchise_bussiness_name">
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Are you planning to buy this franchise with a partner(s)?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="franchise_partner_yes" name="franchise_partner" value="Yes">
										<label for="franchise_partner_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="franchise_partner_no" name="franchise_partner" value="No">
										<label for="franchise_partner_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="franchise_partner_sure" name="franchise_partner" value="Not sure">
										<label for="franchise_partner_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you need to find a site for your new franchise unit?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="franchise_unit_yes" name="physical_site" value="Yes">
										<label for="franchise_unit_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="franchise_unit_no" name="physical_site" value="No">
										<label for="franchise_unit_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="franchise_unit_not_sure" name="physical_site" value="Not sure">
										<label for="franchise_unit_not_sure">I'm not sure</label>
									</figure>
								</div>
								<div class="physical_site franchise_physical">
									<p>If so, choose all that apply:</p>
									<div class="source-area pro-duce franchise_unit_yes">
										<figure>
											<input type="checkbox" id="franchise_retail" name="physical_site_apply[]" value="Retail site">
											<label for="franchise_retail">Retail site</label>
										</figure>
										<figure>
											<input type="checkbox" id="franchise_office_space" name="physical_site_apply[]" value="Office space">
											<label for="franchise_office_space">Office space</label>
										</figure>
										<figure>
											<input type="checkbox" id="franchise_industrial_site" name="physical_site_apply[]" value="Industrial site">
											<label for="franchise_industrial_site">Industrial site</label>
										</figure>
										<figure>
											<input type="checkbox" id="franchise_real_estate" name="physical_site_apply[]" value="Other real estate">
											<label for="franchise_real_estate">Other real estate </label>
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
										<input type="radio" id="physical_product_not_sure" name="physical_product" value="Not sure">
										<label for="physical_product_not_sure">I'm not sure</label>
									</figure>-->
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you offer a fee-based service?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="fee_service_yes" name="fee_service" value="Yes">
										<label for="fee_service_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="fee_service_no" name="fee_service" value="No">
										<label for="fee_service_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="fee_service_not_sure" name="fee_service" value="Not sure">
										<label for="fee_service_not_sure">I'm not sure</label>
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
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require specialized equipment?</h6>
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
										<input type="radio" id="fleet_yes" name="fleet" value="Yes">
										<label for="fleet_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="fleet_no" name="fleet" value="No">
										<label for="fleet_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="fleet_not_sure" name="fleet" value="Not sure">
										<label for="fleet_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside> 
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="hire_employees_yes" name="hire_employees" value="Yes">
										<label for="hire_employees_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="hire_employees_no" name="hire_employees" value="No">
										<label for="hire_employees_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="hire_employees_not_sure" name="hire_employees" value="Not sure">
										<label for="hire_employees_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside>
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you require debt financing?</h6>
							<aside>
								<div class="sourced">
									<figure>
										<input type="radio" id="debt_financing_yes" name="debt_financing" value="Yes">
										<label for="debt_financing_yes"> Yes</label>
									</figure>
									<figure>
										<input type="radio" id="debt_financing_no" name="debt_financing" value="No">
										<label for="debt_financing_no">No</label>
									</figure>
									<figure>
										<input type="radio" id="debt_financing_not_sure" name="debt_financing" value="Not sure">
										<label for="debt_financing_not_sure">I'm not sure</label>
									</figure>
								</div>
							</aside> 
							<h6><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that other produce?</h6>
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
										<input type="radio" id="distribute_products_not_sure" name="distribute_products" value="Not sure">
										<label for="distribute_products_not_sure">I'm not sure</label>
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
								<a href="#" screen_id="4" class="next-screen close-next">Next</a>
								<a href="#" screen_id="4" class="next-screen if-next" physical="franchise">Next</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>
 <!-- </form>-->	