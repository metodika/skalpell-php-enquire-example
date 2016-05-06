<?php

	

	

	error_reporting(0); // Do not display php errors when generated
	error_reporting(E_ERROR);

	
	$callToUrl = $_POST['url'];

	// BUILD UP XML - START
	
		$xmlBody = '';

		$xmlBody .= '<Enquiry>';
		$xmlBody .= '<PatientNumber>'.$_POST['PatientNumber'].'</PatientNumber>';
		$xmlBody .= '<FirstName>'.$_POST['FirstName'].'</FirstName>';
		$xmlBody .= '<LastNamePrefix>'.$_POST['LastNamePrefix'].'</LastNamePrefix>';
		$xmlBody .= '<LastName>'.$_POST['LastName'].'</LastName>';
		$xmlBody .= '<Address>'.$_POST['Address'].'</Address>';
		$xmlBody .= '<City>'.$_POST['City'].'</City>';
		$xmlBody .= '<PostCode>'.$_POST['PostCode'].'</PostCode>';
		$xmlBody .= '<Country>'.$_POST['Country'].'</Country>';
		$xmlBody .= '<Email>'.$_POST['Email'].'</Email>';
		$xmlBody .= '<PhoneHome>'.$_POST['PhoneHome'].'</PhoneHome>';
		$xmlBody .= '<PhoneWork>'.$_POST['PhoneWork'].'</PhoneWork>';
		$xmlBody .= '<PhoneCell>'.$_POST['PhoneCell'].'</PhoneCell>';
		$xmlBody .= '<Gender>'.$_POST['Gender'].'</Gender>';
		$xmlBody .= '<BirthDate>'.$_POST['BirthDate'].'</BirthDate>';
		$xmlBody .= '<Description>'.$_POST['Description'].'</Description>';
		$xmlBody .= '<Comment>'.$_POST['Comment'].'</Comment>';
		$xmlBody .= '<CompanyCode>'.$_POST['CompanyCode'].'</CompanyCode>';
		$xmlBody .= '<LocationCode>'.$_POST['LocationCode'].'</LocationCode>';

		
		$xmlBody .= '<Source>';
		if($_POST['Source_Code'])
		{
			if(is_array($_POST['Source_Code']))
			{
				if(count($_POST['Source_Code'])>0)
				{
					foreach($_POST['Source_Code'] as $v_source)
						$xmlBody .= '<Code>'.$v_source.'</Code>';
				}
			}
			else
			{
				$xmlBody .= '<Code>'.$_POST['Source_Code'].'</Code>';
			}
		}
		if($_POST['SalesChannel_Code'])
		{
			$xmlBody .= '<SalesChannel><Code>'.$_POST['SalesChannel_Code'].'</Code></SalesChannel>';
		}
		$xmlBody .= '</Source>';
		
		$xmlBody .= '<Products>';
		if(count($_POST['Product_Code'])>0)
		{

			foreach($_POST['Product_Code'] as $k_product => $v_product)
			{
				$xmlBody .= '<Products>';
				$xmlBody .= '<Code>'.$_POST['Product_Code'][$k_product].'</Code>';
				$xmlBody .= '<Comment>'.$_POST['Product_Comment'][$k_product].'</Comment>';
				$xmlBody .= '</Products>';
			}

		}
		$xmlBody .= '</Products>';
		

		$xmlBody .= '</Enquiry>';

		// BUILD UP XML - END

		//CALL WEB SERVICE - START

		$username=$_POST['username'];
		$password=$_POST['password'];
		$xml=$xmlBody;


		// Define web service parameters
		$params = array(
							'username'=>$username,
							'password'=>$password,
							'xml'=>$xml);

		// Pull in the NuSOAP code
		require_once('nusoap-0.7.3/lib/nusoap.php');

		// create the NuSOAP client
		$client = new nusoap_client($callToUrl);

		// Call the SOAP method
		$soap_result = $client->call('CRM_enquiryWsCreate',$params);

		// check the result
		if($client->getError()) // if error
		{
			
			$result = $soap_result['SOAP_Error'];
			
		}
		else // else OK
		{
			$result = 'Successfull!! - Created enquiry: '.$soap_result;
			
		}

		//CALL WEB SERVICE - END
	

	header('location: index.php?result='.urlencode($result))

?>