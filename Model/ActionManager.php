<?php

/**
 * This file is part of the NotificationBundle package.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace merk\NotificationBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

abstract class ActionManager implements ActionManagerInterface
{
    public function createAction(UserInterface $user)
    {
        $class = $this->getClass();
        $action = new $class($user);

        return $action;
    }
}