<?php

namespace Letters;

use Letters\Interfaces\LetterInterface;
use traits\PrototypeLetter;
use traits\Voucher;

class ComebackLetter implements  LetterInterface
{
    use PrototypeLetter;
    use Voucher;

    public function subject(): string
    {
        return "We miss you as a customer";
    }

    public function body( string $email = null): string
    {
        return "Hi " . $email . "<br>We miss you as a customer. Our shop is filled with nice products. Here is a voucher that gives you 50 kr to shop for.<br>Voucher: " . $this->get('come_back_to_us') . "<br><br>Best Regards,<br>Forbytes Team";
    }

    public function letters() : array
    {
        $letters = array();
        $original = new Letter();

        foreach (\DataLayer::ListCustomers() as $customer ) {
            $send = true;
            foreach (\DataLayer::ListOrders() as $order) {
                if ($customer->email === $order->customerEmail) {
                    $send = false;
                    break;
                }
            }
            if ($send) {
                $letters[] = $this->build($original,$customer);
            }
        }
        return $letters;
    }

}