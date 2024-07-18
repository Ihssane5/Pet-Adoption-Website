<?php
  /*require 'config.php';
  //adding namespaces
  
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  require 'PHPMailer\src\Exception.php';
  require 'PHPMailer\src\PHPMailer.php';
  require 'PHPMailer\src\SMTP.php';
  

  function  sendMail($email,$subject,$message) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = MAILHOST;
    $mail->Username = USERNAME;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('ihssanenedjaoui5@gmail.com','Ihssane Nedjaoui');
    $mail->addAddress('helpassociation@gmail.com');
    //$mail->addReplyTo(REPLY_TO,REPLY_TO_NAME);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AtBody = $message;
    if(!$mail->send()){
      return "Email not send. Please try again";
    } else {
      return "success";
    }


  }
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["f-name"];
    $lname = $_POST["l-name"];
    $userEmail = $_POST["email"];
    $email = "ihssanenedjaoui5@gmail.com";
    $subject = 'Get in Touch';
    $userText = $_POST["message"];
    sendMail($email,$subject,$userText);
  }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["f-name"];
    $lname = $_POST["l-name"];
    $userEmail = $_POST["email"];
    $to = "ihssanenedjaoui5@gmail.com";
    $subject = 'Get in Touch';
    $userText = $_POST["message"];
    $response = sendMail($to,$subject,$userText);
}*/?>



<?php
// Récupération des données du formulaire
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Assainissement de l'email
$userText = filter_var($_POST['message'], FILTER_SANITIZE_STRING); // Assainissement du texte

// Validation de l'e-mail (plus stricte)
if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
  echo "Adresse e-mail invalide. Veuillez réessayer.";
  exit;
}

// Paramètres de l'e-mail
$to = 'ihssanenedjaoui5@gmail.com'; // Adresse e-mail de réception
$subject = 'Get in Touch';
$message = "Message de : $userEmail\n\nContenu :\n$userText"; // Ajout d'un préambule au message
$headers = 'From: ' . $userEmail . "\r\n" .
           'Reply-To: ' . $userEmail . "\r\n" .
           'X-Mailer: PHP/' . phpversion(); // Ajout d'un Reply-To

// Ajouter le Sender
//ini_set('sendmail_from', $userEmail);

// Envoi de l'e-mail
if (mail($to, $subject, $message, $headers)) {
  echo "E-mail envoyé avec succès !";
} else {
  echo "Erreur lors de l'envoi de l'e-mail. Veuillez contacter l'administrateur.";
}
?>





