<?php

namespace App\Classes;

class Subject
{
    private $_observers = [];

    public function attachObserver(Observer $observer): void
    {
        $this->_observers[] = $observer;
    }

    public function detachObserver(Observer $observer): void
    {
        foreach ($this->_observers as $key => $value) {
            if ($value == $observer) {
                unset($this->_observers[$key]);
            }
        }
    }

    public function notifyObservers(Subject $subject, object $arg = null): void
    {
        foreach ($this->_observers as $observer) {
            $observer->notify($subject, $arg);
        }
    }
}