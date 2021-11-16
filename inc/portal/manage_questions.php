<?php 
/**** start ****/
		$choose_business = get_user_meta($user_id, 'choose_business', true);
		if(!empty($choose_business)){
			if($choose_business == 'Sole proprietorship'){
				$org[] = 69;
			}else if($choose_business == 'Limited partnership'){
				$org[] = 65;
			}else if($choose_business == 'General partnership'){
				$org[] = 64;
			}else if($choose_business == 'Limited liability corporation(LLC)'){
				$org[] = 66;
			}else if($choose_business == 'S-corporation'){
				$org[] = 67;
			}else if($choose_business == 'C-corporation'){
				$org[] = 77;
			}
		}
/**** end ****/

/**** start ****/
		$is_franchies = get_user_meta($user_id, 'is_franchies', true);
		if($is_franchies == 'No'){
			$org[] = 118;
		}	
/**** end ****/

/**** start ****/
		$hired_employees = get_user_meta($user_id, 'hired_employees', true);
		if($hired_employees == 'Yes'){
			$org[] = 77;
		}
/**** end ****/

/**** start ****/
		$hired_employees_soon = get_user_meta($user_id, 'hired_employees_soon', true);
		if($hired_employees_soon == 'Yes'){
			$org[] = 77;
		}else if($hired_employees_soon == "I'm not sure"){
			$org[] = 77;
		}
/**** end ****/

/**** start ****/
		$physical_product = get_user_meta($user_id, 'physical_product', true);
		if($physical_product == 'Yes'){
			$org[] = 76;
		}
/**** end ****/

/**** start ****/
		$free_service = get_user_meta($user_id, 'free_service', true);
		if($free_service == 'Yes'){
			$org[] = 123;
		}
/**** end ****/
		
/**** start ****/
		$sell_food = get_user_meta($user_id, 'sell_food', true);
		if($sell_food == 'Yes'){
			$org[] = 124;
		}
/**** end ****/		

/**** start ****/
		$physical_site = get_user_meta($user_id, 'physical_site', true);
		if($physical_site == 'Yes'){
			$physical_site_apply = get_user_meta($user_id, 'physical_site_apply', true);
			if(!empty($physical_site_apply) && is_array($physical_site_apply)){
				foreach($physical_site_apply as $physical_site_single_val){
					if($physical_site_single_val == 'Retail site'){
						$org[] = 80;
					}
					if($physical_site_single_val == 'Office space'){
						$org[] = 86;
					}
					if($physical_site_single_val == 'Industrial site'){
						$org[] = 87;
					}
					if($physical_site_single_val == 'Other real estate'){
						$org[] = 88;
					}
				}
			}
		}
/**** end ****/
		
/**** start ****/
		$medical_services = get_user_meta($user_id, 'medical_services', true);
		if($medical_services == 'Yes'){
			$org[] = 92;
		}
/**** end ****/
		
/**** start ****/
		$specialized_equipment = get_user_meta($user_id, 'specialized_equipment', true);
		if($specialized_equipment == 'Yes'){
			$org[] = 125;
		}
/**** end ****/

/**** start ****/
		$fleet = get_user_meta($user_id, 'fleet', true);
		if($fleet == 'Yes'){
			$org[] = 93;
		}
/**** end ****/
		
/**** start ****/
		$others_produce = get_user_meta($user_id, 'others_produce', true);
		if($others_produce == 'Yes'){
			$org[] = 76;
		}
/**** end ****/
		
/**** start ****/
		$outside_investors = get_user_meta($user_id, 'outside_investors', true);
		if($outside_investors == 'Yes'){
			$org[] = 91;
		}
/**** end ****/
?>