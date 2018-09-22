<?php

use \Letters\Interfaces\LetterInterface;
//use Debugger;
class Mailer
{
    private $letters;

    public function __construct(LetterInterface $letters)
    {
        $this->letters = $letters->letters();
        $this->debug = include 'config/config.php';
    }

    public function send()
    {
        foreach ($this->letters as $letter) {
            if(Debugger::isOn()){
                $mail = mail($letter->getTo(), $letter->getSubject(), $letter->getBody());
                if(!$mail){
                    Debugger::showError();
                }
            }else{
                Debugger::debug($letter);
            }
        }
    }
}