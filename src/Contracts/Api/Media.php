<?php

namespace Amirsorouri00\Eventbrite\Contracts\Api;

use Amirsorouri00\Eventbrite\Factories\Entity\DisplaySettings as DisplaySettingsEntity;
use Amirsorouri00\Eventbrite\Factories\Entity\MediaUploadType;
use Amirsorouri00\Eventbrite\Factories\HelperEntity\ObjectList;

/**
 * Media api interface
 *
 * @package  Eventbrite
 * @author   @marat555
 */
interface Media
{
    /**
     * {@inheritdoc}
     */
    public function get($id);

    /**
     * Create a Media Upload
     *
     * @param array $params
     * @return mixed
     */
    public function createUpload(array $params);

    /**
     * Retrieve a Media Upload
     *
     * @param array $params
     * @return MediaUploadType
     */
    public function retrieveUpload(array $params);
}
