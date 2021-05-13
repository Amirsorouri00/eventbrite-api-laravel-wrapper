<?php

namespace Amirsorouri00\Eventbrite;

use Amirsorouri00\Eventbrite\Factories\Api\DisplaySettings;
use Amirsorouri00\Eventbrite\Factories\Api\Format;
use Amirsorouri00\Eventbrite\Factories\Api\Media;
use Amirsorouri00\Eventbrite\Factories\Api\Venue;
use Amirsorouri00\Eventbrite\Factories\Client;
use Amirsorouri00\Eventbrite\Factories\Api\Category;
use Amirsorouri00\Eventbrite\Factories\Api\Subcategory;
use Amirsorouri00\Eventbrite\Factories\Api\Webhook;
use Amirsorouri00\Eventbrite\Factories\Api\Event;
use Amirsorouri00\Eventbrite\Factories\Api\User;

/**
 * Eventbrite API wrapper for Laravel
 *
 * @package  Eventbrite
 * @author   @marat555
 */
class Eventbrite
{
    public $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return Category
     */
    public function category()
    {
        return new Category($this->client);
    }

    /**
     * @return Subcategory
     */
    public function subcategory()
    {
        return new Subcategory($this->client);
    }

    /**
     * @return Webhook
     */
    public function webhook()
    {
        return new Webhook($this->client);
    }

    /**
     * @return Event
     */
    public function event()
    {
        return new Event($this->client);
    }

    /**
     * @return Venue
     */
    public function venue()
    {
        return new Venue($this->client);
    }

    /**
     * @return User
     */
    public function user()
    {
        return new User($this->client);
    }

    /**
     * @return Format
     */
    public function format()
    {
        return new Format($this->client);
    }

    /**
     * @return DisplaySettings
     */
    public function displaySettings()
    {
        return new displaySettings($this->client);
    }

    /**
     * @return Media
     */
    public function media()
    {
        return new Media($this->client);
    }
}
