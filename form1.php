<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="admin@site.ru";  // e-mail админа 

$backurl="company.html";  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
// Принимаем данные с формы 
 
$name=$_POST['name'];
$secondname=$_POST['secondname'];
$email=$_POST['email'];
$select=$_POST['select'];
$password=$_POST['password'];
  
 
// Проверяем валидность e-mail
 
if (!preg_match("http://codeit.pro/frontTestTask/user/registration", strtolower($email)))
 { 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали неверные данные!"
  }

else 
 { 
	$msg="
	<p>Имя: $name</p> 
	<p>Фамилия: $secondname</p> 
	<p>E-mail: $email</p> 
	<p>Ваш пол: $select</p>
	<p>Пароль: $password</p> 
		";

	 // Отправляем письмо админу  
	 
	mail("$adminemail", "Сообщение от $name", "$msg");
	 

	 
	// Выводим сообщение пользователю 
	$page="form1.php";
	 if( is_page( $page ) ){
	print "
	<script language='Javascript'> 
	function reload() {location = "company.html"}; setTimeout('reload()', 6000);
	</script> 
	 };
	$msg 
	 
	<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
	exit; 
 
 } 
 
?>