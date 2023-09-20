<?

$recaptcha_secret = "6LfnFMEUAAAAADths0F-c9ztQpRFoJ3RSv5XAauT";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$response = json_decode($response, true);
if($response["success"] === true){

	if($_POST['policy'] != 'false'){
	$error = '';
	$success = '';
	$data = array();
	$mail='';

			if($_POST["name"] == false ){
				$error .= '<p class="error">Поле Имя не заполнено</p>';
			} else { $data["name"] =  $_POST["name"]; }
			if($_POST["tel"] == false ){ $error .= '<p class="error">Поле Телефон не заполнено</p>'; } else {
				$data['tel'] =  $_POST['tel'];
			}
			if($_POST["addr"] == false ){ } else {
				$data['addr'] =  $_POST['addr'];
			}
			if($_POST["email"] == false ){ } else {
				$data['email'] =  $_POST['email'];
			}
			if($_POST["descr"] == false ){ } else {
				$data['descr'] =  $_POST['descr'];
			}
			if($_POST["auto"] == false ){ } else {
				$data['auto'] =  $_POST['auto'];
			}

			if($data['auto'] != false ){$mail .= 'Машина:' .$data['auto']. '<br />';}
			if($data['name'] == false ){ } else {
				$mail .= '<p>Имя:' .$data['name']. '<br /></p>';
			}
			if($data['tel'] != false ){$mail .= 'Телефон:' .$data['tel']. '&shy;<br />';}
			if($data['email'] != false ){$mail .= 'E-mail:' .$data['email']. '&shy;<br />';}
			if($data['addr'] != false){$mail .= 'Адрес:' .$data['addr']. '&shy;<br />';}
			if($data['descr'] != false){$mail .= 'Подробности:' .$data['descr']. '&shy;<br />';}

			if(!$data['name'] || !$data['tel'] ){
				$datajson = json_encode($error);
				echo $datajson;
			} else {
					//Psm.ekb96@gmail.com,
				if(mail('Psm.ekb96@gmail.com', 'Сообщение', $mail, 'Content-Type: text/html; charset=utf-8')){
				$success .= '<p class="success">Ваше сообщение успешно отправлено</p>';
				$datajson = json_encode($success);
				echo $datajson;
				}

			}

	} else {
		$error = '';
		$error .= '<p class="error">Вы не приняли условия политики конфиденциальности</p>';
		$datajson = json_encode($error);
		echo $datajson;
	}
} else {
    $msg_box = 'invalid captcha';
    echo json_encode(array('result' => $msg_box));
}



//$mail = new mail;
//$mail -> sendData($_POST);
