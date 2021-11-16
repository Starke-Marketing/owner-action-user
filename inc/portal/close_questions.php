<?php 
	/**** start ****/
		$close_choose_business = get_user_meta($user_id, 'close_choose_business', true);
		if(!empty($close_choose_business)){
			if($close_choose_business == 'Sole proprietorship'){
				$org[] = 69;
			}
			if($close_choose_business == 'Limited partnership'){
				$org[] = 65;
			}
			if($close_choose_business == 'General partnership'){
				$org[] = 64;
			}
			if($close_choose_business == 'Limited liability corporation(LLC)'){
				$org[] = 66;
			}
			if($close_choose_business == 'S-corporation'){
				$org[] = 67;
			}
			if($close_choose_business == 'C-corporation'){
				$org[] = 77;
			}
		}
	/**** end ****/
	
	/**** start ****/
		$close_any_employees = get_user_meta($user_id, 'close_any_employees', true);
		if($close_any_employees == 'Yes'){
			$org[] = 77;
		}
	/**** end ****/
		
	/**** start ****/
		$close_physical_location = get_user_meta($user_id, 'close_physical_location', true);
		if($close_physical_location == 'Yes'){
			$org[] = 114;
		}elseif($close_physical_location == 'Yes_leases'){
			$org[] = 113;
		}
	/**** end ****/
?>