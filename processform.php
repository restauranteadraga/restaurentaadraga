<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $person = $_POST["person"];


    // Enviar um email com os dados do formulário
    $to = "diogo.praia10@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Reserva de Mesa - form";
    $message = "Nome: $name\n";
    $message .= "Email: $email\n";
    $message .= "Telefone: $mobile\n";
    $message .= "Data: $date\n";
    $message .= "Hora: $time\n";
    $message .= "Número de pessoas: $person\n";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirecionar o usuário para uma página de agradecimento
    header("Location: confirmacao.html");
    exit;
}
?>
