<?php

namespace DependencyInjectionDemo;
use DependencyInjectionDemo\Notifier\Mailer;
use DependencyInjectionDemo\Notifier\NotifierInterface;
use PDO;


/**
 * Class SubscriberManager
 * @package DependencyInjectionDemo
 *
 * Service to notify subscribers
 */
class SubscriberManager {
  protected $pdo;

  protected $mailerConfig;

  /**
   * SubscriberManager constructor.
   * @param $pdo
   */
  public function __construct(PDO $pdo, NotifierInterface $notifier) {
    $this->pdo = $pdo;
    $this->notifier = $notifier;
  }

  /**
   * Notifiy subscribers about new content.
   */
  public function notifySubscribers() {
    $sql = 'SELECT * FROM subscribers';

    foreach ($this->pdo->query($sql) as $row) {
      $this->notifier->notify(
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

  }
}