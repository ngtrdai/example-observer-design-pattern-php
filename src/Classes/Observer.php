<?php

namespace App\Classes;

abstract class Observer
{
    protected Subject $subject;
    abstract public function notify(Subject $subject, object $arg = null): void;
}