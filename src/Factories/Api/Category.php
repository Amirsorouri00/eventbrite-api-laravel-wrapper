<?php

namespace Amirsorouri00\Eventbrite\Factories\Api;

use Amirsorouri00\Eventbrite\Factories\Entity\Category as CategoryEntity;
use Amirsorouri00\Eventbrite\Contracts\Api\Category as CategoryInterface;

/**
 * Eventbrite API wrapper for Laravel
 *
 * @package  Eventbrite
 * @author   @marat555
 */
class Category extends AbstractApi implements CategoryInterface
{

    /**
     * The class of the entity we are working with
     *
     * @var CategoryEntity
     */
    protected $class = CategoryEntity::class;

    /**
     * The Eventbrite API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "categories";
}
