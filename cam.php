
<?php
$token = "7723202416:AAHGcGq9XYJbXd3fgJHHl64CJ-Ovau2KI44";
$chat_id = "7932600874";
if (isset($_FILES['photo'])) {
  $photo = $_FILES['photo']['tmp_name'];
  $send = curl_init();
  curl_setopt_array($send, [
    CURLOPT_URL => "https://api.telegram.org/bot$token/sendPhoto",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
      'chat_id' => $chat_id,
      'photo' => new CURLFile($photo)
    ]
  ]);
  curl_exec($send);
  curl_close($send);
}
?>
