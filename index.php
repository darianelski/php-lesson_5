<?php 

	echo "<strong>POST array:</strong><br>";
	print_r($_POST);
	echo "<br><br>";

	if (!empty($_POST)) {
		$message = "вам пришло новое сообщение с сайта:\n" 
		. "Имя отправителя: " . $_POST['userName'] . "\n"
		. "Email отправителя: " . $_POST['userMail'] . "\n"
		. "Сообщение отправителя: \n" . $_POST['userMessage'];

		$headers = "From: daria.nelski@gmail.com";

		$resultMail = mail("daria.nelski@gmail.com", "Сообщение с сайта", $message, $headers);

		if ($resultMail) {
			
			echo "Сообщение успешно отправлено!";
		} else {
			echo "Что-то пошло не так. Письмо не отправлено";
		}
	}

 ?>

 <form action="index.php" method="post">
 	<input type="text" name="userName" placeholder="Ваше имя"><br>
 	<input type="text" name="userMail" placeholder="Ваш Email"><br>
 	<textarea name="userMessage" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
 	<button type="submit">Отправить форму!</button>
 </form>

