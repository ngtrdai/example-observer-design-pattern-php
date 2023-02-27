<?php

namespace App\Notifier;

use App\Classes\Subject;
use App\Classes\Observer;
use App\Classes\VideoData;

class PhoneNotifier extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attachObserver($this);
    }

    public function notify(Subject $subject, object $arg = null): void
    {
        if ($subject instanceof VideoData) {
            echo "Notify all subscribers by phone about the new video: 
                {$subject->getTitle()} \r\n 
                {$subject->getDescription()} \r\n 
                {$subject->getFilename()} \r\n";
        }
    }
}