<?php 
	/**** start ****/
		
		$determined_check = get_user_meta($user_id, 'determined', true);
		if($determined_check == 'Yes'){
			$organizational_structure = get_user_meta($user_id, 'organizational_structure', true);
			if($organizational_structure == 'Sole proprietorship'){
				$org[] = 69;
			}else if($organizational_structure == 'Limited partnership'){
				$org[] = 65;
			}else if($organizational_structure == 'General partnership'){
				$org[] = 64;
			}else if($organizational_structure == 'Limited liability corporation(LLC)'){
				$org[] = 66;
			}else if($organizational_structure == 'S-corporation'){
				$org[] = 67;
			}else if($organizational_structure == 'C-corporation'){
				$org[] = 63;
			}	
		}else if($determined_check == 'No'){
			$org[] = 68;
		}
	
	/**** end ****/
	
	/**** start ****/
		$physical_product = get_user_meta($user_id, 'physical_product', true);
		if($physical_product == 'Yes'){
			$org[] = 75;
		}elseif($physical_product == 'No'){
			$org[] = 75;
		}
	/**** end ****/
	
		
	/**** start ****/
		$fee_based = get_user_meta($user_id, 'fee_based', true);
		if($fee_based == 'Yes'){
			$org[] = 123;
		}elseif($fee_based == 'No'){
			$org[] = 123;
		}
	/**** end ****/
	
	/**** start ****/
		$distribute_products = get_user_meta($user_id, 'distribute_products', true);
		if($distribute_products == 'Yes'){
			$org[] = 76;
		}else if($distribute_products == 'not sure'){
			$org[] = 76;
		}
	/**** end ****/
	
	/**** start ****/
		$selling_food = get_user_meta($user_id, 'selling_food', true);
		if($selling_food == 'Yes'){
			$org[] = 124;
		}elseif($selling_food == 'Not sure'){
			$org[] = 124;
		}
	/**** end ****/
	
	/**** start ****/
		$medical_services = get_user_meta($user_id, 'medical_services', true);
		if($medical_services == 'Yes'){
			$org[] = 92;
		}elseif($medical_services == 'Not sure'){
			$org[] = 92;
		}
	/**** end ****/
	
	/**** start ****/
		$physical_site = get_user_meta($user_id, 'physical_site', true);
		if($physical_site == 'Yes'){
			$physical_site_apply = get_user_meta($user_id, 'physical_site_apply', true);
			if(!empty($physical_site_apply) && is_array($physical_site_apply)){
				foreach($physical_site_apply as $physingle_single){
					if($physingle_single == 'Retail site'){
						$org[] = 80;
					}
					if($physingle_single == 'Office space'){
						$org[] = 86;
					}
					if($physingle_single == 'Industrial site'){
						$org[] = 87;
					}
					if($physingle_single == 'Other real estate'){
						$org[] = 88;
					}
				}
			}
		}else if($physical_site == 'Not sure'){
			$org[] = 85;
		}else if($physical_site == 'No'){
			$org[] = 112;
		}
	/**** end ****/
	
	/**** start ****/
		$specialized_equipment = get_user_meta($user_id, 'specialized_equipment', true);
		if($specialized_equipment == 'Yes'){
			$org[] = 125;
		}elseif($specialized_equipment == 'Not sure'){
			$org[] = 125;
		}
	/**** end ****/
	
	/**** start ****/	
		$vehicles = get_user_meta($user_id, 'vehicles', true);
		if($vehicles == 'Yes'){
			$org[] = 93;
		}else if($vehicles == 'Not sure'){
			$org[] = 93;
		}
	/**** end ****/
	
	/**** start ****/	
		$outside_investors = get_user_meta($user_id, 'outside_investors', true);
		if($outside_investors == 'Yes'){
			$org[] = 91;
		}elseif($outside_investors == 'Not sure'){
			$org[] = 91;
		}
	/**** end ****/
	
	/**** start ****/	
		$hired_employees = get_user_meta($user_id, 'hired_employees', true);
		if($hired_employees == 'Yes'){
			$org[] = 77;
		}
	/**** end ****/
	
	/**** start ****/	
		$employees_soon = get_user_meta($user_id, 'employees_soon', true);
		if($employees_soon == 'Yes'){
			$org[] = 77;
		}elseif($employees_soon == 'No sure'){
			$org[] = 77;
		}
?>