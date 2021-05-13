<?php

namespace Amirsorouri00\Eventbrite\Contracts\Api;

use Amirsorouri00\Eventbrite\Factories\Entity\User as UserEntity;

/**
 * User is an object representing an Eventbrite account. Users are Members of an Organization.
 *
 * @package  Eventbrite
 * @author   @marat555
 */
interface User
{
    /**
     * {@inheritdoc}
     */
    public function get($id);

    /**
     * Retrieve your User
     *
     * @return UserEntity
     */
    public function me();
}
