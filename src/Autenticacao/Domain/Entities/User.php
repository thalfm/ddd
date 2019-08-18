<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 19:49
 */

namespace ECommerce\Autenticacao\Domain\Entities;


use ECommerce\Autenticacao\Domain\Events\LoginHasBeenMade;
use ECommerce\Autenticacao\Domain\Exceptions\InvalidCredentialsException;
use ECommerce\Autenticacao\Domain\Services\ILoginService;
use ECommerce\Autenticacao\Domain\ValuesObjects\Email;
use SharedKernel\Domain\Events\EventDispatcher;

class User
{
    use EventDispatcher;
    /**
     * @var Email
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    public function __construct(Email $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logar(ILoginService $loginService)
    {
        $loginService->login($this);
        $this->publish(new LoginHasBeenMade($this));
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return bool
     * @throws InvalidCredentialsException
     */
    public function passwordVerify(string $password)
    {
        if(!password_verify($this->password, $password)) {
            throw new InvalidCredentialsException();
        }

        return true;
    }
}