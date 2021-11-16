<?php 
$user_id = $_GET['user_id'];
$your_name = get_user_meta($user_id, 'your_name', true);
$email = get_user_meta($user_id, 'username', true);
$business_portal = get_user_meta($user_id, 'business_portal', true);

$have_you_start = get_user_meta($user_id, 'have_you', true);
$have_you = get_user_meta($user_id, $business_portal.'_have_you', true);
$business_name = get_user_meta($user_id, $business_portal.'_business_name', true);

$year = get_user_meta($user_id, $business_portal.'_year', true);
$industry = get_user_meta($user_id, $business_portal.'_industry', true);
$organizational_structure = get_user_meta($user_id, 'organizational_structure', true);
$determined = get_user_meta($user_id, 'determined', true);
$physical_product = get_user_meta($user_id, 'physical_product', true);
$fee_based = get_user_meta($user_id, 'fee_based', true);
$distribute_products = get_user_meta($user_id, 'distribute_products', true);
$selling_food = get_user_meta($user_id, 'selling_food', true);
$medical_services = get_user_meta($user_id, 'medical_services', true);
$physical_site = get_user_meta($user_id, 'physical_site', true);
$physical_site_apply = get_user_meta($user_id, 'physical_site_apply', true);
$specialized_equipment = get_user_meta($user_id, 'specialized_equipment', true);
$vehicles = get_user_meta($user_id, 'vehicles', true);
$outside_investors = get_user_meta($user_id, 'outside_investors', true);
$hired_employees = get_user_meta($user_id, 'hired_employees', true);
$employees_soon = get_user_meta($user_id, 'employees_soon', true);

// franchise
if($business_portal == 'franchise'){
	$have_you = get_user_meta($user_id, 'have_you', true);
	$entity = get_user_meta($user_id, 'entity', true);
	$franchise_partner = get_user_meta($user_id, 'franchise_partner', true);
	$franchise_unit = get_user_meta($user_id, 'physical_site', true);
}

// buy
$buy_business = get_user_meta($user_id, 'buy_business', true);
$structure_selected = get_user_meta($user_id, 'organizational_structure', true);
$require_debt = get_user_meta($user_id, 'require_debt', true);
$have_employees = get_user_meta($user_id, 'have_employees', true);
$entity = get_user_meta($user_id, 'entity', true);


// manage
$choose_business = get_user_meta($user_id, 'choose_business', true);
$is_franchies = get_user_meta($user_id, 'is_franchies', true);
$franchise_name = get_user_meta($user_id, $business_portal.'_franchise_name', true);
$hired_employees_soon = get_user_meta($user_id, 'hired_employees_soon', true);

// sell
$any_employees = get_user_meta($user_id, 'any_employees', true);
$physical_location = get_user_meta($user_id, 'physical_location', true);
$business_brokers = get_user_meta($user_id, 'business_brokers', true);

//if check yes
$sell_any_employees = get_user_meta($user_id, 'sell_any_employees', true);
$sell_employees_soon_yes = get_user_meta($user_id, 'sell_employees_soon_yes', true);
$sell_physical_product = get_user_meta($user_id, 'sell_physical_product', true);
$fee_based_service = get_user_meta($user_id, 'fee_based_service', true);
$drinks_to_customers = get_user_meta($user_id, 'drinks_to_customers', true);
$medical_advice = get_user_meta($user_id, 'medical_advice', true);
$sell_retail_site = get_user_meta($user_id, 'sell_retail_site', true);
$office_space = get_user_meta($user_id, 'office_space', true);
$industrial_site = get_user_meta($user_id, 'industrial_site', true);
$operate_business = get_user_meta($user_id, 'operate_business', true);
$sell_specialized_equipment = get_user_meta($user_id, 'sell_specialized_equipment', true);
$fleet_of_vehicles = get_user_meta($user_id, 'fleet_of_vehicles', true);
$sell_distribute_products = get_user_meta($user_id, 'sell_distribute_products', true);
$outside_investors = get_user_meta($user_id, 'outside_investors', true);

// something else
$your_subject = get_user_meta($user_id, 'your_subject', true);
$your_message = get_user_meta($user_id, 'your_message', true);

?>

<div class="question_portal_view">
	<a href="admin.php?page=view-questions" class="back">Back</a>
	<h2 class="question_portal_view_head">What is your name?: <?php echo $your_name;?></h2>
	<hr>
	<div class="question_view_data">
		<h3>Which of the following statements best describe your business objective? : <?php echo $business_portal;?></h3>
		<!-- start -->
		<?php if(!empty($business_portal) && $business_portal == 'start'){ ?>
			<div class="questions_row">
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already started your business?</div>
				<div class="col"> 
					<?php if(!empty($have_you_start) && $have_you_start == 'Yes'){ ?>
						<div class="have_you_yes">
							<?php if(!empty($business_name)){?>
								<div class="have_you heading">Business Name:</div><div class="have_you"><?php echo $business_name;?></div>
							<?php } ?>
							<?php if(!empty($industry)){?><div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div><?php } ?>
							<?php if(!empty($year)){?> <div class="have_you heading">Year:</div> <div class="have_you"><?php echo $year;?></div><?php } ?>
						</div>
					<?php }else{
						echo $have_you;
					}?>
				</div>
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you determined how you'll structure your business? </div>
				<div class="col">
					<?php if(!empty($determined) && $determined == 'Yes'){ 
					?>
						<div class="have_you_yes">
							<div class="have_you heading">If so, which organizational structure have you selected?</div>
							<div class="have_you"><?php echo $organizational_structure;?></div>
						</div>
					<?php }else{
						echo $determined;
					}?>
				</div>
				<?php if(!empty($physical_product)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business produce a physical product? </div>
					<div class="col"><?php if(!empty($physical_product)){ echo $physical_product;}?></div>
				<?php } ?>
				
				<?php if(!empty($fee_based)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you offer a fee-based service? </div>
					<div class="col"><?php if(!empty($fee_based)){ echo $fee_based;}?></div>
				<?php } ?>
				
				<?php if(!empty($distribute_products)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that others produce? </div>
					<div class="col"><?php if(!empty($distribute_products)){ echo $distribute_products;}?></div>
				<?php } ?>
				
				<?php if(!empty($selling_food)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be selling food or drinks to customers?  </div>
					<div class="col"><?php if(!empty($selling_food)){ echo $selling_food;}?></div>
				<?php } ?>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be providing medical services or medical advice to your client base?  </div>
				<div class="col"><?php if(!empty($medical_services)){ echo $medical_services;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business require a physical site? </div>
				<div class="col">
					<?php if(!empty($physical_site) && $physical_site == 'Yes'){ ?>
						<div class="have_you_yes">
							<div class="have_you heading">If so, which organizational structure have you selected?</div>
							<div class="have_you"><?php foreach($physical_site_apply as $physical_apply){ echo $physical_apply. ", ";}?></div>
						</div>
					<?php }else{
						echo $physical_site;
					}?>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require specialized equipment to execute your idea? </div>
				<div class="col"><?php if(!empty($specialized_equipment)){ echo $specialized_equipment;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to operate a fleet of vehicles?</div>
				<div class="col"><?php if(!empty($vehicles)){ echo $vehicles;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to raise equity from outside investors?</div>
				<div class="col"><?php if(!empty($outside_investors)){ echo $outside_investors;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you hired any employees?</div>
				<div class="col"><?php if(!empty($hired_employees)){ echo $hired_employees;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees soon?</div>
				<div class="col"><?php if(!empty($employees_soon)){ echo $employees_soon;}?></div>
				
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
				
			</div>
		<?php }?>
		
		<!-- franchise -->
		<?php if(!empty($business_portal) && $business_portal == 'franchise'){ ?>
			<div class="questions_row">
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already selected the franchise you intend to buy?</div>
				<div class="col"> 
					<?php if(!empty($have_you) && $have_you == 'Yes'){ ?>
						<div class="have_you_yes">
							<?php if(!empty($business_name)){?>
								<div class="have_you heading">Franchise Name:</div><div class="have_you"><?php echo $business_name;?></div>
							<?php } ?>
							<?php if(!empty($industry)){?><div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div><?php } ?>
							<?php if(!empty($year)){?> <div class="have_you heading">Year:</div> <div class="have_you"><?php echo $year;?></div><?php } ?>
						</div>
					<?php }else{
						echo $have_you;
					}?>
				</div>
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already established an entity that will buy the business? </div>
				<div class="col">
					<?php if(!empty($entity) && $entity == 'Yes'){ ?>
						<div class="have_you_yes">
							<div class="have_you heading">If so, which organizational structure have you selected?</div>
							<div class="have_you"><?php echo $organizational_structure;?></div>
						</div>
					<?php }else{
						echo $entity;
					}?>
				</div>
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> What is the name of the legal entity you established? If you haven't created an entity, type N/A.</div>
				<div class="col">Business Name: <?php if(!empty($business_name)){ echo $business_name;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Are you planning to buy this franchise with a partner(s)? </div>
				<div class="col"><?php if(!empty($franchise_partner)){ echo $franchise_partner;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you need to find a site for your new franchise unit?</div>
				<div class="col">
					<?php if(!empty($franchise_unit) && $franchise_unit == 'Yes'){ ?>
						<div class="have_you_yes">
							<div class="have_you heading">If so, which organizational structure have you selected?</div>
							<div class="have_you"><?php if(!empty($physical_site_apply)){
								foreach($physical_site_apply as $physical_apply){
									echo $physical_apply. ", ";
								}
							}?></div>
						</div>
					<?php }else{
						echo $franchise_unit;
					}?>
				</div>
				<?php if(!empty($physical_product)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Will your business produce a physical product? </div>
					<div class="col"><?php echo $physical_product;?></div>
				<?php } ?>
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
			</div>
		<?php }?>
		
		<!-- buy -->
		<?php if(!empty($business_portal) && $business_portal == 'buy'){ ?>
			<div class="questions_row">
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already sourced the business you plan to buy? </div>
				<div class="col"> 
					<?php if(!empty($have_you) && $have_you == 'Yes'){ ?>
						<div class="have_you_yes">
							<?php if(!empty($business_name)){?>
								<div class="have_you heading">Business Name:</div><div class="have_you"><?php echo $business_name;?></div>
							<?php } ?>
							<?php if(!empty($industry)){?><div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div><?php } ?>
							<?php if(!empty($year)){?> <div class="have_you heading">Year:</div> <div class="have_you"><?php echo $year;?></div><?php } ?>
						</div>
					<?php }else{
						echo $have_you;
					}?>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Are you planning to buy this business with a partner(s)? </div>
				<div class="col"><?php if(!empty($buy_business)){ echo $buy_business;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Have you already established an entity that will buy the business? </div>
				<div class="col">
					<?php if(!empty($entity) && $entity == 'Yes'){ 
						echo $entity;
					}?>
				</div>
				<div class="col">
					<?php if(!empty($entity) && $entity == 'Yes'){ ?>
						<div class="have_you_yes">
							<div class="have_you heading">If so, which organizational structure have you selected?</div>
							<div class="have_you"><?php echo $structure_selected;?></div>
						</div>
					<?php }else{
						echo $entity;
					}?>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business produce a physical product? </div>
				<div class="col"><?php if(!empty($physical_product)){ echo $physical_product;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business offer a fee-based service? </div>
				<div class="col"><?php if(!empty($fee_based)){ echo $fee_based;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business serve food or drinks to customers? </div>
				<div class="col"><?php if(!empty($selling_food)){ echo $selling_food;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you provide medical services or medical advice to your client base? </div>
				<div class="col"><?php if(!empty($medical_services)){ echo $medical_services;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business require specialized equipment? </div>
				<div class="col"><?php if(!empty($specialized_equipment)){ echo $specialized_equipment;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Will your business operate a fleet of vehicles? </div>
				<div class="col"><?php if(!empty($vehicles)){ echo $vehicles;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that other produce? </div>
				<div class="col"><?php if(!empty($distribute_products)){ echo $distribute_products;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Will you require debt financing?</div>
				<div class="col"><?php if(!empty($require_debt)){ echo $require_debt;}?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business have employees?</div>
				<div class="col"><?php if(!empty($have_employees)){ echo $have_employees;}?></div>
				
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
			</div>
			
		<?php }?>
		
		<!-- manage -->
		<?php if(!empty($business_portal) && $business_portal == 'manage'){ ?>
			<div class="questions_row">
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  What is your business legal name? </div>
				<div class="col">
					<div class="have_you_yes">
						<div class="have_you heading">Business Name:</div><div class="have_you"><?php echo $business_name;?></div>
					</div>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within? </div>
				<div class="col">
					<div class="have_you_yes">
						<div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div>
					</div>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> When was your business founded? </div>
				<div class="col">
					<div class="have_you_yes">
						<div class="have_you heading">Year:</div><div class="have_you"><?php echo $year;?></div>
					</div>
				</div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business? </div>
				<div class="col"><?php echo $choose_business;?></div>
				
				<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Is your business a franchise? </div>
				<div class="col">
					<?php if(!empty($is_franchies) && $is_franchies == 'Yes'){ ?>
						<div class="have_you_yes">
							<div class="have_you heading">Franchise Name:</div>
							<div class="have_you"><?php echo $franchise_name;?></div>
						</div>
					<?php }else{
						echo $is_franchies;
					}?>
				</div>
				<?php if(!empty($hired_employees)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you hired any employees? </div>
					<div class="col"><?php echo $hired_employees;?></div>
				<?php } ?>
				<?php if(!empty($hired_employees_soon)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees soon? </div>
					<div class="col"><?php echo $hired_employees_soon;?></div>
				<?php } ?>
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
			</div>
		<?php }?>
		
		<!-- sell -->
		<?php if(!empty($business_portal) && $business_portal == 'sell'){ ?>
			<div class="questions_row">
				<?php if(!empty($business_name)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  What is your business's name? </div>
					<div class="col">	
						<div class="have_you_yes">
							<div class="have_you heading">Business Name:</div><div class="have_you"><?php echo $business_name;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($industry)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within? </div>
					<div class="col">
						<div class="have_you_yes">
							<div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($year)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> When was your business founded? </div>
					<div class="col">
						<div class="have_you_yes">
							<div class="have_you heading">Year:</div><div class="have_you"><?php echo $year;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($choose_business)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business? </div>
					<div class="col"><?php echo $choose_business;?></div>
				<?php } ?>
				
				<?php if(!empty($physical_location)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you have any employees? </div>
					<div class="col"><?php echo $any_employees;?></div>
				<?php } ?>
				
				<?php if(!empty($physical_location)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business have a physical location? </div>
					<div class="col"><?php echo $physical_location;?></div>
				<?php } ?>
				
				<?php if(!empty($business_brokers)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Do you plan to work with a business brokers? </div>
					<div class="col"><?php echo $business_brokers;?></div>
					
					<div class="business_brokers">
						<h1>(If they have sourced a business)</h1>
						
						<?php if(!empty($sell_any_employees)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your target business have any employees? </div>
							<div class="col"><?php echo $sell_any_employees;?></div>
						<?php } ?>
						
						<?php if(!empty($sell_employees_soon)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to hire employees soon? </div>
							<div class="col"><?php echo $sell_employees_soon;?></div>
						<?php } ?>
						
						<?php if(!empty($sell_physical_product)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will your business produce a physical product? </div>
							<div class="col"><?php echo $sell_physical_product;?></div>
						<?php } ?>
						
						<?php if(!empty($fee_based_service)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you offer a fee-based service? </div>
							<div class="col"><?php echo $fee_based_service;?></div>
						<?php } ?>
						
						<?php if(!empty($drinks_to_customers)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be selling food or drinks to customers? </div>
							<div class="col"><?php echo $drinks_to_customers;?></div>
						<?php } ?>
						
						<?php if(!empty($medical_advice)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you be providing medical services or medical advice to your client base?</div>
							<div class="col"><?php echo $medical_advice;?></div>
						<?php } ?>
						
						<?php if(!empty($sell_retail_site)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require a retail site?</div>
							<div class="col"><?php echo $sell_retail_site;?></div>
						<?php } ?>
						
						<?php if(!empty($office_space)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require office space?</div>
							<div class="col"><?php echo $office_space;?></div>
						<?php } ?>
						
						<?php if(!empty($industrial_site)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require an industrial site?</div>
							<div class="col"><?php echo $industrial_site;?></div>
						<?php } ?>
						
						<?php if(!empty($operate_business)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Will you need other real estate to operate your business?</div>
							<div class="col"><?php echo $operate_business;?></div>
						<?php } ?>
						
						<?php if(!empty($sell_specialized_equipment)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business require specialized equipment?</div>
							<div class="col"><?php echo $sell_specialized_equipment;?></div>
						<?php } ?>
						
						<?php if(!empty($fleet_of_vehicles)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to operate a fleet of vehicles?</div>
							<div class="col"><?php echo $fleet_of_vehicles;?></div>
						<?php } ?>
						
						<?php if(!empty($sell_distribute_products)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Will you sell or distribute products that others produce?</div>
							<div class="col"><?php echo $sell_distribute_products;?></div>
						<?php } ?>
						
						<?php if(!empty($outside_investors)){ ?>
							<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you plan to raise equity from outside investors?</div>
							<div class="col"><?php echo $outside_investors;?></div>
						<?php } ?>
						
					</div>
				<?php } ?>
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
			</div>
		<?php }?>
		
		<!-- close -->
		<?php if(!empty($business_portal) && $business_portal == 'close'){ ?>
			<div class="questions_row">
				<?php if(!empty($business_name)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  What is your business's name? </div>
					<div class="col">	
						<div class="have_you_yes">
							<div class="have_you heading">Business Name:</div><div class="have_you"><?php echo $business_name;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($industry)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which industry does your business operate within? </div>
					<div class="col">
						<div class="have_you_yes">
							<div class="have_you heading">Industry Name:</div><div class="have_you"><?php echo $industry;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($year)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> When was your business founded? </div>
					<div class="col">
						<div class="have_you_yes">
							<div class="have_you heading">Year:</div><div class="have_you"><?php echo $year;?></div>
						</div>
					</div>
				<?php } ?>
				
				<?php if(!empty($choose_business)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Which organizational structure did you choose for your business? </div>
					<div class="col"><?php echo $choose_business;?></div>
				<?php } ?>
				
				<?php if(!empty($any_employees)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Do you have any employees? </div>
				<div class="col"><?php echo $any_employees;?></div>
				<?php } ?>
				
				<?php if(!empty($physical_location)){ ?>
					<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i> Does your business own real estate? </div>
					<div class="col"><?php echo $physical_location;?></div>
				<?php } ?>
				<div class="something_else_msg">
					<?php if(!empty($your_subject) || !empty($your_message) ){ ?>
						<div class="col main_heading"><i class="fa fa-caret-right" aria-hidden="true"></i>  Something else</div>
						<div class="col"><strong>Your Subject:</strong> <?php if(!empty($your_subject)){ echo $your_subject;}?></div>
						<div class="col"><strong>Your Message:</strong> <?php if(!empty($your_message)){ echo $your_message;}?></div>
					<?php }?>
				</div>
			</div>
		<?php }?>
		
		
	</div>
</div>