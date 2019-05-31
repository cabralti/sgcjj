<?php


namespace App\Support;


class Message
{

    private $text;
    private $type;

    public function erro(string $message): Message
    {
        $this->type = 'error';
        $this->text = $message;
    }

    public function success(string $message): Message
    {
        $this->type = 'error';
        $this->text = $message;
    }

    public function render()
    {
        return "<div class='message {$this->getType()}'>{$this->getText()}</div>";
    }

    public function getType()
    {
        return $this->type;
    }

    public function getText()
    {
        return $this->text;
    }
}