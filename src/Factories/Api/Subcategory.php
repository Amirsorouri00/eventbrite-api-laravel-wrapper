<?php

namespace Amirsorouri00\Eventbrite\Factories\Api;

use Amirsorouri00\Eventbrite\Factories\Entity\SubCategory as SubcategoryEntity;
use Amirsorouri00\Eventbrite\Contracts\Api\Subcategory as SubcategoryInterface;

/**
 * Eventbrite API wrapper for Laravel
 *
 * @package  Eventbrite
 * @author   @marat555
 */
class Subcategory extends AbstractApi implements SubcategoryInterface
{

    /**
     * The class of the entity we are working with
     *
     * @var SubcategoryEntity
     */
    protected $class = SubcategoryEntity::class;

    /**
     * The Eventbrite API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "subcategories";
}
