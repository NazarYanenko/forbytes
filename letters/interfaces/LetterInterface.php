<?php

namespace Letters\Interfaces;

interface LetterInterface
{
    public function subject() :string;

    public function body(string $email) :string;

    public function letters() : array;

}