<?php
require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;

$NovoEmail = new Email(2, "smtp.data-r.com.br", "contato@data-r.com.br", "rafa200891",false, 587, "contato@data-r.com.br", "Rafael Torres");
$NovoEmail->sendEmail("Teste", "<p> Email teste! </p>", "rafael@data-r.com.br", "Rafael","rafael@data-r.com.br","RR");

