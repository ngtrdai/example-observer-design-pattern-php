<?php

namespace App\Classes;

class VideoData extends Subject
{
    private ?string $_title;
    private ?string $_description;
    private ?string $_filename;

    public function __construct(?string $title=null, ?string $description=null, ?string $filename=null)
    {
        $this->_title = $title;
        $this->_description = $description;
        $this->_filename = $filename;
    }

    public function setTitle(string $title): void
    {
        $this->_title = $title;
        $this->videoDataChanged();
    }

    public function getTitle(): string
    {
        return $this->_title ?? '';
    }

    public function setDescription(string $description): void
    {
        $this->_description = $description;
        $this->videoDataChanged();
    }

    public function getDescription(): string
    {
        return $this->_description ?? '';
    }

    public function setFilename(string $filename): void
    {
        $this->_filename = $filename;
        $this->videoDataChanged();
    }

    public function getFilename(): string
    {
        return $this->_filename ?? '';
    }

    public function videoDataChanged(): void
    {
        $this->notifyObservers($this);
    }
}