<?php
require_once '../mysql_connect/dbFunction.php';
 $funObj = new dbFunction();
if(isset($_POST['email']))
{
  $email=$_POST['email'];
  $sql="select email from adminlogin where email='$email'";
  if($result=mysql_query($sql))
  {
    $num_rows = mysql_num_rows($result);
    if($num_rows==0)
    {
$query="select max(id) as max from adminlogin";
if($sql=mysql_query($query))
{
	while($fetch=mysql_fetch_array($sql))
	{
		$max=$fetch['max'];
		if(isset($max))
		{
			$max=intval($max)+1;
		}
		else
		{
			$max=1;
		}
	}
}
else
{
print mysql_error();
	$max=1;
	print $max;
}
$var4="FUNSHOPPERS_admin".$max;
$random1=mt_rand(100,999);
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
for($i=0;$i<strlen($random1);$i++)
{
$r=mt_rand(0,strlen($alphabet)-1);
if(isset($random2))
{
	$random2.=$alphabet[$r];
}
else
{
	$random2=$alphabet[$r];
}
}
$random=$random1.$random2;
for($i=0;$i<strlen($random);$i++)
{
	$r=mt_rand(0,strlen($random)-1);
	if(isset($var6))
	{
		$var6.=$random[$r];
	}
	else
	{
		$var6=$random[$r];
	}
}
$tinsert="insert into adminlogin(email,user_id,password) values('$email','$var4','$var6')";
if (mysql_query($tinsert))
{
  $msg="Hi, "."\n\n"."You have successfully applied as retails at funshoppers "."\n\n"."Your Login ID is $var4 and password is $var6"."\n\n"."please login in the provided link "."\n\n"."<a href='http://localhost:60/apptite/admin/' >Funshoppers.com </a>";
  $url = "https://api.mailgun.net/v2/aaruush.net/messages";
				$post_data = "from=hr@funshoppers.com&to=".$email."&subject=Webarch Recruitment&text=$msg";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_USERPWD, 'api:key-9e46c186a6a9b102b4e282f338947c37');
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
				$str=curl_exec($ch);
				//print $str;
        echo "Please check Your email";
}


}
else {
  echo "This email id is alerady registered";
}
}

else {
  print mysql_error();
}
}
else {
  echo "Request error";
}
 ?>
