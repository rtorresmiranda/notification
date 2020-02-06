<?php
require __DIR__ . '/lib_ext/autoload.php';


use Notification\Email;

$NovoEmail = new Email;
$NovoEmail->sendEmail("Teste", "<p> Email teste! </p>", "contato@data-r.com.br", "Rafael","rafael@data-r.com.br","RR");

var_dump($NovoEmail);