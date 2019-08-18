<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 19:38
 */

namespace ECommerce\Autenticacao\Domain\Exceptions;


class InvalidEmailException extends \Exception
{
    public static function from(string $email)
    {
        return new static(sprintf('O e-mail: %s é inválido!', $email));
    }
}