<?php

namespace Amirsorouri00\Eventbrite\Factories\Api;

use Amirsorouri00\Eventbrite\Factories\Entity\DisplaySettings as DisplaySettingsEntity;
use Amirsorouri00\Eventbrite\Contracts\Api\DisplaySettings as DisplaySettingsInterface;
use Amirsorouri00\Eventbrite\Factories\HelperEntity\Pagination;

/**
 * Eventbrite API wrapper for Laravel
 *
 * @package  Eventbrite
 * @author   @marat555
 */
class DisplaySettings extends AbstractApi implements DisplaySettingsInterface
{
    /**
     * The class of the entity we are working with
     *
     * @var DisplaySettingsEntity
     */
    protected $class = DisplaySettingsEntity::class;

    /**
     * The Eventbrite API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "display_settings";
}
