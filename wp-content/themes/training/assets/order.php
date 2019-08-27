<?php

	if(
		$_SERVER['REQUEST_METHOD'] !== "POST" ||
		!isset($_POST['phone']) ||
		!isset($_POST['type'])
	){
		http_response_code(404);
		die;
	}

	include "smtp.php";

	$result = array(
		'status' => 'success'
	);
	$smtp      = new smtp();
	$recipient = ""; // E-Mail получателя уведомлений
	$message   = '
				<p><b>Ваш код</b></p>
				<table>
					<tr>
						<td><b>Имя</b></td>
						<td>' . $_POST['name'] . '</td>
					</tr>
					<tr>
						<td><b>Телефон</b></td>
						<td>' . $_POST['phone'] . '</td>
					</tr>
					<tr>
						<td><b>Форма на сайте</b></td>
						<td>' . $_POST['type'] . '</td>
					</tr>
				</table>';
	$subject = "Learning Lab — новая заявка с сайта";


	try{
		$smtp->smtpmail($recipient, $subject, $message);
	}catch (Exception $e){
		$result['status'] = 'error';
		$result['error'] = $e->getMessage();
	}

	echo json_encode($result);