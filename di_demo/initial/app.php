<?php

require __DIR__ . '/vendor/autoload.php';

use DependencyInjectionDemo\Notifier\Mailer;

$dsn = 'sqlite:' . __DIR__ . '/data/database.sqlite';
$pdo = new PDO($dsn);

$mailer = new Mailer('smtp.blogtrottr.com', 'smtpuser', 'smtppass', '465');

$sql = 'SELECT * FROM subscribers';

foreach ($pdo->query($sql) as $row) {
  $mailer->notify(
    $row['email'],
    'New Article alert for you!',
    sprintf(<<<EOF
Hello %s! A new article has been published in the domain you have subscribed for.
You can visit the link below to read the article below. To unsubscribe, browse to our website, login & click on unsubscribe button!.
EOF
      , $row['name']),
    'no-reply@blogtrottr.com'
  );
}

