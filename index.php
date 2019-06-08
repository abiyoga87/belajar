<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'YOUR-CHANNEL-ACCESS-TOKEN'; //5Cv467QeyzFQNkaD47rkAN9vQMmxhushDlIZgD8BXsIiuFDuf8pOQOT7MWnmEGoiOFbNoG0emVE4TwE8azz9XkEK9mKe5c2da5k0uxKnl6e9VR3R08mjhY1mP1Zx/0875OkSkY73cHC+d8wwJkwfogdB04t89/1O/w1cDnyilFU=
$channelSecret = 'YOUR-CHANNEL-SECRET-CODE';//d993376eb9dd1dbdba88965bbd2e1c29

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Help')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo'
									)
							)
						);
				
	}
	if($pesan_datang=='Help')
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'template',
  'altText' => 'Espress Your Self',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://hosting.photobucket.com/images/a263/abiyoga48/0/1ac7af4d-424a-40aa-9948-8f8bb9f1e0ca-original.jpg?width=1920&height=1080&fit=bounds',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Jadwal Mapel',
        'text' => 'Kamu lupa jadwal pelajaran? cukup ketik nama nama hari saja maka jadwal akan muncul',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'Coba',
            'label' => 'Buy',
            'data' => 'action=buy&itemid=111',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://hosting.photobucket.com/images/a263/abiyoga48/0/ad4eee0e-d916-4da0-83a1-a6e5539e755f-original.jpg?width=1920&height=1080&fit=bounds',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Foto Aib Teman',
        'text' => 'Cukup ketik nama teman anda di XI MIPA 1 maka aibnya bakal dikirim :v',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'postback',
            'label' => 'Buy',
            'data' => 'action=buy&itemid=222',
          ),
        ),
      ),
	  2 => 
      array (
        'thumbnailImageUrl' => 'https://hosting.photobucket.com/images/a263/abiyoga48/0/fe624f58-9139-4d18-a580-639e28c4b57b-original.jpg?width=1920&height=1080&fit=bounds',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Kerang Ajaib',
        'text' => 'Gunakan keyword APAKAH ya gaes',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'Coba',
            'label' => 'Buy',
            'data' => 'action=buy&itemid=111',
          ),
        ),
      ),
	  3 => 
      array (
        'thumbnailImageUrl' => 'https://hosting.photobucket.com/images/a263/abiyoga48/0/5d69e97c-1d19-4a87-b523-ac98d033cda2-original.png?width=1920&height=1080&fit=bounds',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'Cocoklogi',
        'text' => 'Cara makenya Cocokin blablabla sama blablabla dong',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'Coba',
            'label' => 'Buy',
            'data' => 'action=buy&itemid=111',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
							)
						);
				
	}

}
 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
