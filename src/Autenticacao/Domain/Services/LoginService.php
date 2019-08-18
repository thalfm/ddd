<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 19:54
 */

namespace ECommerce\Autenticacao\Domain\Services;


use ECommerce\Autenticacao\Domain\Entities\User;
use ECommerce\Autenticacao\Domain\Repositories\UserRepository;

class LoginService implements ILoginService
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param User $user
     * @return bool
     * @throws \ECommerce\Autenticacao\Domain\Exceptions\InvalidCredentialsException
     */
    public function login(User $user)
    {
        $userInRepository = $this->userRepository->findUserByEmail($user->getEmail());
        return $user->passwordVerify($userInRepository->getPassword());
    }
}