<?php

namespace App\Access;

interface RoleInterface
{
    /**
     * Returns all users for the role.
     *
     * @return \IteratorAggregate
     */
    public function getUsers();
}
