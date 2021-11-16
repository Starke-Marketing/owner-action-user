<?php 
	/**** start ****/
		$choose_business = get_user_meta($user_id, 'choose_business', true);
		if(!empty($choose_business)){
			if($choose_business == 'Sole proprietorship'){
				$org[] = 69;
			}
			if($choose_business == 'Limited partnership'){
				$org[] = 65;
			}
			if($choose_business == 'General partnership'){
				$org[] = 64;
			}
			if($choose_business == 'Limited liability corporation(LLC)'){
				$org[] = 66;
			}
			if($choose_business == 'S-corporation'){
				$org[] = 67;
			}
			if($choose_business == 'C-corporation'){
				$org[] = 77;
			}
		}
	/**** end ****/
	
	/**** start ****/
		$sell_any_employees = get_user_meta($user_id, 'sell_any_employees', true);
		if($sell_any_employees == 'Yes'){
			$org[] = 77;
		}
	/**** end ****/
	
	/**** start ****/
		$physical_location = get_user_meta($user_id, 'physical_location', true);
		if($physical_location == 'Yes'){
			$org[] = 114;
		}
		
	/**** start ****/
		$business_brokers = get_user_meta($user_id, 'business_brokers', true);
		if($business_brokers == 'Yes'){
			$org[] = 115;
		}else if($business_brokers == 'No'){
			$org[] = 116;
		}
	/**** end ****/
?>