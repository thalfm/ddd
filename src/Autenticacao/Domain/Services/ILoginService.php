<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 20:10
 */

namespace ECommerce\Autenticacao\Domain\Services;


use ECommerce\Autenticacao\Domain\Entities\User;

interface ILoginService
{

    public function login(User $user);
}