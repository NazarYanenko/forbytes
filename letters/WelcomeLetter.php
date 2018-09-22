<?php

namespace Letters;
use Letters\Interfaces\LetterInterface;
use traits\PrototypeLetter;
use traits\Voucher;

class WelcomeLetter implements LetterInterface
{
    use PrototypeLetter;
    use Voucher;

    public function subject(): string
    {
        return "Welcome as a new customer";
    }

    public function body(string $email = null): string
    {
        return "Hi " . $email . "<br>We would like to welcome you as customer on our site!<br><br>Best Regards,<br>Forbytes Team";
    }

    public function letters() : array
    {
        $today = (new \DateTime())->modify('-1 day');
        $letters = array();
        $original = new Letter();
        foreach (\DataLayer::ListCustomers() as $customer) {
            if ($customer->createdAt > $today) {
                $letters[] = $this->build($original,$customer);
            }
        }
        return $letters;
    }
}