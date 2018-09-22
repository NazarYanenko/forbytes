<?php

namespace Letters;

class Letter
{
    protected $from = "info@forbytes.com";
    protected $to;
    protected $subject;
    protected $body;

    public function __construct()
//    public function __construct($to,$subject,$body)
    {
//        $this->to = $to;
//        $this->subject = $subject;
//        $this->body = $body;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getBody()
    {
        return $this->body;
    }

}