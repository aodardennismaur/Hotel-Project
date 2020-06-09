<?php
  require '../vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('fb9b5f0cc0852f8956156c711d73ad2c','8efaaff70629422b71801e8ec40222b9',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "avilesodar@gmail.com",
          'Name' => "Dennis"
        ],
        'To' => [
          [
            'Email' => "avilesodar@gmail.com",
            'Name' => "Dennis"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>
