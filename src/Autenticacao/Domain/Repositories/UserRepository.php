<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 19:56
 */

namespace ECommerce\Autenticacao\Domain\Repositories;


use ECommerce\Autenticacao\Domain\Entities\User;
use ECommerce\Autenticacao\Domain\ValuesObjects\Email;

interface UserRepository
{
    public function findUserByEmail(Email $email): User;
}