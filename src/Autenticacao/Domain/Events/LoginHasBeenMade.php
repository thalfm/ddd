<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 20:14
 */

namespace ECommerce\Autenticacao\Domain\Events;


use ECommerce\Autenticacao\Domain\Entities\User;

class LoginHasBeenMade implements IEvent
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}