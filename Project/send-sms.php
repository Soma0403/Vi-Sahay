<?php
require_once __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$accountSid = 'ACc492d013c79c7bb47f2d47046353aab0';
$authToken = 'e336b72c88832f4c56be789bd67bbb39';
$twilioNumber = '+14708353886';
$toNumber = '+919004190635';

$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['message'];

$client = new Client($accountSid, $authToken);

$client->messages->create(
  $toNumber,
  array(
    'from' => $twilioNumber,
    'body' => "From $name 
    Phone number:$number
    $message",
  )
);

?>

<?php 
header("Location: http://localhost/Project/home1.php");
exit();
?>