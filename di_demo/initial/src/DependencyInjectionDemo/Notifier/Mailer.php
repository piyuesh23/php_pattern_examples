<?php

namespace DependencyInjectionDemo\Notifier;

/**
 * Sends emails using SMTP
 */
class Mailer
{
    private $hostname;

    private $user;

    private $pass;

    private $port;

    public function __construct($hostname, $user, $pass, $port)
    {
        $this->hostname = $hostname;
        $this->user = $user;
        $this->pass = $pass;
        $this->port = $port;
    }

    /**
     * Sends an email message
     *
     * @param string $recipient
     * @param string $subject
     * @param string $message
     * @param string $from
     */
    public function notify($recipient, $subject, $message, $from)
    {
        // Log messages for demo in a log file.
        $logPath = __DIR__.'/../../../logs/emails.log';
        $logLines = array();
        $logLines[] = sprintf(
            '[%s][%s:%s@%s:%s][From: %s][To: %s][Subject: %s]',
            date('Y-m-d H:i:s'),
            $this->user,
            $this->pass,
            $this->hostname,
            $this->port,
            $from,
            $recipient,
            $subject
        );
        $logLines[] = '---------------';
        $logLines[] = $message;
        $logLines[] = '---------------';

        $fh = fopen($logPath, 'a');
        fwrite($fh, implode("\n", $logLines)."\n");
    }
}
