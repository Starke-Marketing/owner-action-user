<?php 
/**** start ****/
			$buy_have_you = get_user_meta($user_id, 'buy_have_you', true);
			if($buy_have_you == 'No'){
				$org[] = 122;
			}
		/*** end ****/
		
		/**** start ****/
			$buy_business = get_user_meta($user_id, 'buy_business', true);
			if($buy_business == 'No' || $buy_business == 'not sure'){
				$org[] = 91;
			}
		/**** end ****/
		
		/***	start   **/
		$entity = get_user_meta($user_id, 'entity', true);
		if($entity == 'Yes'){
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
		} else if($entity == 'No'){
			$org[] = 68;
		}
		/*****end ***/
		
		/* start  ****/
		$physical_site = get_user_meta($user_id, 'physical_site', true);
		if($physical_site == 'No'){
			$org[] = 112;
		}else if($physical_site == 'Not Sure'){
			$org[] = 85;
		}else if($physical_site == 'Yes'){
			$physical_site_apply = get_user_meta($user_id, 'physical_site_apply', true);
			if(!empty($physical_site_apply) && is_array($physical_site_apply)){
				foreach($physical_site_apply as $singleVal){
					if($singleVal == 'Retail site'){
						$org[] = 80;
					}
					if($singleVal == 'Office space'){
						$org[] = 86;
					}
					if($singleVal == 'Other real estate'){
						$org[] = 87;
					}
					}
				}
		}
		/****end ***/
		
		/**** start ***/
		$physical_product = get_user_meta($user_id, 'physical_product', true);
		if($physical_product == 'Yes'){
			$org[] = 76;
		}
		/**** end ***/
		
		/**** start ***/
		$fee_based = get_user_meta($user_id, 'fee_based', true);
			if($fee_based == 'Yes'){
				$org[] = 123;
			}elseif($fee_based == 'Not sure'){
				$org[] = 123;
			}
		/**** end ***/
		
		
		/*** start ***/
		$selling_food = get_user_meta($user_id, 'selling_food', true);
		if($selling_food == 'Yes'){
			$org[] = 124;
		}elseif($selling_food == 'Not sure'){
			$org[] = 124;
		}
		/**** end ***/
		
		/*** start ****/
		$medical_services = get_user_meta($user_id, 'medical_services', true);
		if($medical_services == 'Yes'){
			$org[] = 92;
		}elseif($medical_services == 'Not sure'){
			$org[] = 92;
		}
		/****end ***/
		
		
		$specialized_equipment = get_user_meta($user_id, 'specialized_equipment', true);
		if($specialized_equipment == 'Yes'){
			$org[] = 125;
		}elseif($specialized_equipment == 'Not sure'){
			$org[] = 125;
		}
		
		
		$vehicles = get_user_meta($user_id, 'vehicles', true);
		if($vehicles == 'Yes'){
			$org[] = 93;
		}elseif($vehicles == 'Not sure'){
			$org[] = 93;
		}
		
		$distribute_products = get_user_meta($user_id, 'distribute_products', true);
		if($distribute_products == 'Yes'){
			$org[] = 76;
		}else if($distribute_products == 'not sure'){
			$org[] = 76;
		}
		
		$require_debt = get_user_meta($user_id, 'require_debt', true);
		if($require_debt == 'Yes'){
			$org[] = 111;
		}elseif($require_debt == 'Not sure'){
			$org[] = 111;
		}
		
		$have_employees = get_user_meta($user_id, 'have_employees', true);
		if($have_employees == 'Yes'){
			$org[] = 77;
		}elseif($have_employees == 'Not sure'){
			$org[] = 77;
		}
		
		$outside_investors = get_user_meta($user_id, 'outside_investors', true);
		if($outside_investors == 'Yes'){
			$org[] = 91;
		}elseif($outside_investors == 'Not sure'){
			$org[] = 91;
		}
		
		$location_house = get_user_meta($user_id, 'location_house', true);
		if(!empty($location_house) && is_array($location_house)){
			foreach($location_house as $location_house_val){
				if($location_house_val == 'Industrial site'){
					$org[] = 114;
				}
				if($location_house_val == 'Other real estate'){
					$org[] = 112;
				}
				if($location_house_val == 'plantobuildthespace'){
					$org[] = 119;
				}
			}
		}

?>