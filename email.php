<?php
require_once(dirname(__FILE__).'/lib/util.php');
require_once(dirname(__FILE__).'/lib/swiftmailer/swift_required.php');
header('Content-Type: application/json');

if ( !isset($_POST['honeypot'])) {
  print json_encode(array('error' => true, 'msg' => 'No eres humano.'));
  exit;
}

$email    = util::array_get($_POST['cotizacion-email'], null);
$honeypot = util::array_get($_POST['honeypot'], null);
$cotizacion = util::array_get($_POST['cotizacion-data'], null);

if ( $honeypot !== '' ) {
  print json_encode(array('error' => true, 'msg' => 'No eres humano.'));
  exit;
}
if ($email == null || $email == '') {
  print json_encode(array('error' => true, 'msg' => 'No has dado tu correo electrónico.'));
  exit;
}
if ($cotizacion == null || $cotizacion == '' ) {
  print json_encode(array('error' => true, 'msg' => 'Utiliza el cotizador primero.'));
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  print json_encode(array('error' => true, 'msg' => 'Ingresa una dirección de correo electrónico válida.'));
  exit;
}
$cotizacion = json_decode($cotizacion, true);
if ( json_last_error() != JSON_ERROR_NONE ) {
  print json_encode(array('error' => true, 'msg' => 'Surgio un error procesando la información de la cotización.'));
  exit;
}



$body = <<<BODY
<body>
  <h1>¡Hola!, Aquí tienes la cotización de tu crédito Corolla</h1>
  <h2>Tu Crédito</h2>
  <table width="100%" border="0" style="text-transform:uppercase;">
    <tbody>
      <tr>
        <th>Auto:</th>
        <td>:auto</td>
        <th>Seguro:</th>
        <td>:seguro</td>
      </tr>
      <tr>
        <th>Enganche: :enper%</th>
        <td>$:enganche MX</td>
        <th>Amortización:</th>
        <td>:amortizacion</td>
      </tr>
      <tr>
        <th>Plazo:</th>
        <td>:plazo meses</td>
        <th>Pago Mensual:</th>
        <td><strong>$:pago_mensual</strong> MX</td>
      </tr>
      <tr>
        <th>Comisión por apertura:</th>
        <td>$:comision MX</td>
        <th class="big">Cat sin IVA:</th>
        <td class="big">:cat%</td>
      </tr>
    </tbody>
  </table>
  <div class="text-center">
    <small>*El precio final puede variar de acuerdo al distribuidor</small>
  </div>
</body>
BODY;

$search = array_keys($cotizacion);
foreach ( $search as $k => &$v ) {
  $v = sprintf(':%s', $v);
}
$body = str_replace($search, $cotizacion, $body);
try {
  $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)
    ->setUsername('bugs@astrata.com.mx')
    ->setPassword('bugs.astrata')
    ->setEncryption('ssl');

  $message = Swift_Message::newInstance()
    ->setCharset('utf-8')
    ->setSubject('Tu Crédito Toyota')
    ->setFrom('bugs@astrata.mx')
    ->setTo($email)
    ->setBody($body, 'text/html');

  $mailer = Swift_Mailer::newInstance($transport);
  print json_encode($mailer->send($message));
} catch ( Exception $e ) {
  print json_encode(array('error' => true, 'msg' => $e->getMessage()));
}




