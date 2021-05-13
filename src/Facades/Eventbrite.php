<?php

namespace Amirsorouri00\Eventbrite\Facades;

use Illuminate\Support\Facades\Facade;
use Amirsorouri00\Eventbrite\Contracts\Api\Category;
use Amirsorouri00\Eventbrite\Contracts\Api\DisplaySettings;
use Amirsorouri00\Eventbrite\Contracts\Api\Format;
use Amirsorouri00\Eventbrite\Contracts\Api\Media;
use Amirsorouri00\Eventbrite\Contracts\Api\Subcategory;
use Amirsorouri00\Eventbrite\Contracts\Api\User;
use Amirsorouri00\Eventbrite\Contracts\Api\Venue;
use Amirsorouri00\Eventbrite\Contracts\Api\Webhook;
use Amirsorouri00\Eventbrite\Contracts\Client;
use Amirsorouri00\Eventbrite\Factories\Entity\Event;

/**
 * @method static void setClient(Client $client)
 * @method static Category category()
 * @method static Subcategory subcategory()
 * @method static Webhook webhook()
 * @method static Event event()
 * @method static Venue venue()
 * @method static User user()
 * @method static Format format()
 * @method static DisplaySettings displaySettings()
 * @method static Media media()
 */
class Eventbrite extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Amirsorouri00\Eventbrite\Eventbrite';
    }
}
