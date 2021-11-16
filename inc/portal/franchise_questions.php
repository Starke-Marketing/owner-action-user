<?php 
/**** start ****/
		$have_you = get_user_meta($user_id, 'have_you', true);
		if($have_you == 'No'){
			$org[] = 118;
		}
		
/**** start ****/		
		$entity = get_user_meta($user_id, 'entity', true);
		if($entity == 'Yes'){
			$organizational_structure = get_user_meta($user_id, 'organizational_structure', true);
			if($organizational_structure == 'Sole proprietorship'){
				$org[] = 69;
			} else if($organizational_structure == 'Limited partnership'){
				$org[] = 65;
			}else if($organizational_structure == 'General partnership'){
				$org[] = 64;
			}else if($organizational_structure == 'Limited liability corporation(LLC)'){
				$org[] = 66;
			}else if($organizational_structure == 'S-corporation'){
				$org[] = 67;
			}else if($organizational_structure == 'C-corporation'){
				$org[] = 77;
			}	
		}else if($organizational_structure == 'No'){
			$org[] = 68;
		}
		

/**** start ****/
		$franchise_partner = get_user_meta($user_id, 'franchise_partner', true);
		if($franchise_partner == 'Yes'){
			$org[] = 91;
		}else if($franchise_partner == 'Not sure'){
			$org[] = 91;
		}
		

/**** start ****/
		$physical_site = get_user_meta($user_id, '+', true);
		if($physical_site == 'Yes'){
			$physical_site_apply = get_user_meta($user_id, 'physical_site_apply', true);
				if(!empty($physical_site_apply) && is_array($physical_site_apply)){
					foreach($physical_site_apply as $physical_single_val){
						if($physical_single_val == 'Retail site'){
							$org[] = 80;
						}
						if($physical_single_val == 'Office space'){
							$org[] = 86;
						}
						if($physical_single_val == 'Industrial site'){
							$org[] = 87;
						}
						if($physical_single_val == 'Other real estate'){
							$org[] = 88;
						}
					}
				}
		}else if($physical_site == 'Not sure'){
			$org[] = 85;
		}else if($physical_site == 'No'){
			$org[] = 112;
		}
		
/**** start ****/
		$physical_product = get_user_meta($user_id, 'physical_product', true);
		if($physical_product == 'Yes'){
			$org[] = 76;
		}else if($physical_product == 'No'){
			$org[] = 76;
		}
		
/**** start ****/
		$fee_service = get_user_meta($user_id, 'fee_service', true);
		if($fee_service == 'Yes'){
			$org[] = 123;
		}else if($fee_service == 'Not sure'){
			$org[] = 123;
		}
		
/**** start ****/
		$selling_food = get_user_meta($user_id, 'selling_food', true);
		if($selling_food == 'Yes'){
			$org[] = 124;
		}else if($selling_food == 'Not sure'){
			$org[] = 124;
		}
		
		
/**** start ****/
		$medical_services = get_user_meta($user_id, 'medical_services', true);
		if($medical_services == 'Yes'){
			$org[] = 92;
		}else if($medical_services == 'Not sure'){
			$org[] = 92;
		}
		
/**** start ****/
		$specialized_equipment = get_user_meta($user_id, 'specialized_equipment', true);
		if($specialized_equipment == 'Yes'){
			$org[] = 125;
		}else if($specialized_equipment == 'Not sure'){
			$org[] = 125;
		}
		

/**** start ****/
		$fleet = get_user_meta($user_id, 'fleet', true);
		if($fleet == 'Yes'){
			$org[] = 93;
		}else if($fleet == 'Not sure'){
			$org[] = 93;
		}
		
		
/**** start ****/
		$hire_employees = get_user_meta($user_id, 'hire_employees', true);
		if($hire_employees == 'Yes'){
			$org[] = 77;
		}else if($hire_employees == 'Not sure'){
			$org[] = 77;
		}
		
		
/**** start ****/
		$debt_financing = get_user_meta($user_id, 'debt_financing', true);
		if($debt_financing == 'Yes'){
			$org[] = 111;
		}else if($debt_financing == 'Not sure'){
			$org[] = 111;
		}
		
/**** start ****/
		$distribute_products = get_user_meta($user_id, 'distribute_products', true);
		if($distribute_products == 'Yes'){
			$org[] = 76;
		}else if($distribute_products == 'Not sure'){
			$org[] = 76; 
		}
		
?>