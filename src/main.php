<?php

use App\Classes\VideoData;
use App\Notifier\EmailNotifier;
use App\Notifier\PhoneNotifier;

require_once 'vendor/autoload.php';

class Main
{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        $videoData = new VideoData();
        $phoneNotifier = new PhoneNotifier($videoData);
        new EmailNotifier($videoData); // Discard the object

        $videoData->setTitle('Observer pattern');

        $videoData->detachObserver($phoneNotifier);

        $videoData->setDescription('New video description');
    }
}

$main = new Main();