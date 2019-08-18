<?php
declare(strict_types=1);

namespace ECommerce\Autenticacao\Domain\ValuesObjects;

use ECommerce\Autenticacao\Domain\Exceptions\InvalidEmailException;

class Email
{
    private $email;

    /**
     * Email constructor.
     * @param string $email
     * @throws InvalidEmailException
     */
    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    /**
     * @param string $email
     * @throws InvalidEmailException
     */
    private function setEmail(string $email)
    {
        $this->emailEhValido($email);
        $this->email = $email;
    }

    /**
     * @param string $email
     * @return bool
     * @throws InvalidEmailException
     */
    private function emailEhValido(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException($email);
        }

        return true;
    }

    public function get(): string
    {
        return $this->email;
    }

    public function prefix(): string
    {
        return substr($this->email, 0, strrpos($this->email, '@'));
    }

    public function __toString()
    {
       return $this->email;
    }
}