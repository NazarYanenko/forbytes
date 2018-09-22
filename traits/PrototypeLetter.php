<?php

namespace traits;

use Letters\Letter;

trait PrototypeLetter
{
    public function build(Letter $original, \Customer $customer) : Letter
    {
        $cloned = clone $original;
        $cloned->setTo($customer->email);
        $cloned->setSubject($this->subject());
        $cloned->setBody($this->body($customer->email));
        return $cloned;
    }
}