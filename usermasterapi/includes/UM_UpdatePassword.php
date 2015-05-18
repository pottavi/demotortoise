<?php
    /*
     *  $params["id"]: alphanumeric
     *  $params["password"]: alphanumeric
     */
        function fn_UM_UpdatePassword($params){
            $result = array();
			$json_url = EPALS_UM_URL."user/password/change";
			
			$output = CurlRequest($json_url, $params);
			
			if ($output->code==200){
					$result['id'] = $output->user->id;
					$result['error'] = 0;
					$result['reason'] = 'OK';
			}	
			else{
				$result['id'] = 0;
				$result['error'] = $output->code;
                $result['reason'] = $output->reason;
			}
				
            return $result;
        } 
?>