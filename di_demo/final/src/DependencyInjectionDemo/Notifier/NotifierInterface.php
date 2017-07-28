<?php namespace DependencyInjectionDemo\Notifier;


/**
 * Sends emails using SMTP
 */
interface NotifierInterface {
  /**
   * Sends an email message
   *
   * @param string $recipient
   * @param string $subject
   * @param string $message
   * @param string $from
   */
  public function notify($recipient, $subject, $message, $from);
}