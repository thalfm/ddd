<?php
/**
 * Created by PhpStorm.
 * User: thales
 * Date: 28/07/2019
 * Time: 20:26
 */

namespace SharedKernel\Domain\Events;


use ECommerce\Autenticacao\Domain\Events\IEvent;

trait EventDispatcher
{
    public function publish(IEvent $event)
    {

    }
}