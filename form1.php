<? 
// ----------------------------������������-------------------------- // 
 
$adminemail="admin@site.ru";  // e-mail ������ 

$backurl="company.html";  // �� ����� ��������� ��������� ����� �������� ������ 
 
//---------------------------------------------------------------------- // 
 
// ��������� ������ � ����� 
 
$name=$_POST['name'];
$secondname=$_POST['secondname'];
$email=$_POST['email'];
$select=$_POST['select'];
$password=$_POST['password'];
  
 
// ��������� ���������� e-mail
 
if (!preg_match("http://codeit.pro/frontTestTask/user/registration", strtolower($email)))
 { 
  echo 
"<center>��������� <a 
href='javascript:history.back(1)'><B>�����</B></a>. �� 
������� �������� ������!"
  }

else 
 { 
	$msg="
	<p>���: $name</p> 
	<p>�������: $secondname</p> 
	<p>E-mail: $email</p> 
	<p>��� ���: $select</p>
	<p>������: $password</p> 
		";

	 // ���������� ������ ������  
	 
	mail("$adminemail", "��������� �� $name", "$msg");
	 

	 
	// ������� ��������� ������������ 
	$page="form1.php";
	 if( is_page( $page ) ){
	print "
	<script language='Javascript'> 
	function reload() {location = "company.html"}; setTimeout('reload()', 6000);
	</script> 
	 };
	$msg 
	 
	<p>��������� ����������! ���������, ������ �� ������ �������������� �� ������� ��������...</p>";  
	exit; 
 
 } 
 
?>