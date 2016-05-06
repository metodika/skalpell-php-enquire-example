<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Skalpell CRM Enquiry</title>
</head>
<body>

<div id="container">

<?
	if($_GET['result'])
	{
		print '<div>'.$_GET['result'].'</div>';
	}
?>
	
	<div>
	<form method="post" action="enquiry.php">

		<input name="SalesChannel_Code" type="hidden" value="WEB" />

		<h2>URL (example: https://yourdomain.com:8043/4DSOAP)</h2>
		<input name="url" class="text" size="100" value="" /><br />
		<br />

		<h2>Username</h2>
		<input name="username" class="text" value="username" /><br />
		<br />

		<h2>Password</h2>
		<input name="password" class="text" value="password" /><br />
		<br />

		<h2>PatientNumber</h2>
		<input name="PatientNumber" class="text" value="198402050044" /><br />
		<br />

		<h2>FirstName</h2>
		<input name="FirstName" type="FirstName" class="text" value="Anna" /><br />
		<br />

		<h2>LastNamePrefix</h2>
		<input name="LastNamePrefix" type="LastNamePrefix" class="text" value="Von" /><br />
		<br />

		<h2>LastName</h2>
		<input name="LastName" type="LastName" class="text" value="Anka" /><br />
		<br />

		<h2>Address</h2>
		<input name="Address" type="Address" class="text" value="Junibacken 123" /><br />
		<br />

		<h2>City</h2>
		<input name="City" type="City" class="text" value="Ankeborg" /><br />
		<br />

		<h2>PostCode</h2>
		<input name="PostCode" type="PostCode" class="text" value="123 45" /><br />
		<br />

		<h2>Country</h2>
		<input name="Country" type="Country" class="text" value="Ankland" /><br />
		<br />

		<h2>Email</h2>
		<input name="Email" type="Email" class="text" value="anna@anka.com" /><br />
		<br />

		<h2>PhoneHome</h2>
		<input name="PhoneHome" type="PhoneHome" class="text" value="08555000" /><br />
		<br />

		<h2>PhoneWork</h2>
		<input name="PhoneWork" type="PhoneWork" class="text" value="09555000" /><br />
		<br />

		<h2>PhoneCell</h2>
		<input name="PhoneCell" type="PhoneCell" class="text" value="+467555000" /><br />
		<br />

		<h2>Gender</h2>
		<select name="Gender">
			<option value="Male">Male</option>
			<option value="Female" selected="selected">Female</option>
		</select>
		<br />

		<h2>BirthDate</h2>
		<input name="BirthDate" type="BirthDate" class="text" value="1984-02-05" /><br />
		<br />

		<h2>Description</h2>
		<input name="Description" type="Description" class="text" value="Enquiry description" /><br />
		<br />

		<h2>Comment</h2>
		<input name="Comment" type="Comment" class="text" value="Enquiry comment" /><br />
		<br />

		<h2>Company Code</h2>
		<select name="CompanyCode">
			<option value="Company1">Company1</option>
			<option value="Company99">Company99</option>
			<option value="company_sweden">Stockholm</option>
			<option value="company_germany">Germany</option>
			<option value="company_main">Main Company</option>
			<option value="company_sub">Sub Company</option>
		</select>
		<br />

		<h2>Location Code</h2>
		<select name="LocationCode">
			<option value="location1">Location1</option>
			<option value="location2">Location2</option>
			<option value="location99">Location99</option>
		</select>
		<br />

		<h2>Source</h2>
		<select name="Source_Code">
			<option value="source1">Source 1</option>
			<option value="source2">Source 2</option>
			<option value="source3">Source 3</option>
		</select>
		<br />

		<h2>Product</h2>
			<input name="Product_Code[1]" type="checkbox" value="prod_1" /> <input name="Product_Comment[1]" value="" /> - Arm and Thigh Lift
			<br /><input name="Product_Code[2]" type="checkbox" value="prod_2" /> <input name="Product_Comment[2]" value="" /> - Breast Surgery
			<br /><input name="Product_Code[3]" type="checkbox" value="prod_3" checked="checked" /> <input name="Product_Comment[3]" value="Look a bit skinny" /> - Chin Implants
			<br /><input name="Product_Code[4]" type="checkbox" value="prod_4" /> <input name="Product_Comment[4]" value="" /> - Cosmetic Gynaecology
		<br />
		<br /><br />
		<input type="submit" value="Send &#187;" />

	</form>
	</div>

</div>

</body>
</html>