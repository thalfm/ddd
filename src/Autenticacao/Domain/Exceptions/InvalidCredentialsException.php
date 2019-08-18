<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 20:17
 */

namespace ECommerce\Autenticacao\Domain\Exceptions;


use Throwable;

class InvalidCredentialsException extends \Exception
{
    public function __construct(string $message = "'Credenciais inválidas!'", int $code = 01, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}