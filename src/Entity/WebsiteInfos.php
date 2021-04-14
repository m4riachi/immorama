<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteInfos
 *
 * @ORM\Table(name="website_infos")
 * @ORM\Entity
 */
class WebsiteInfos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var json
     *
     * @ORM\Column(name="map", type="json", nullable=false)
     */
    private $map;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_url", type="string", length=255, nullable=false)
     */
    private $facebookUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram_url", type="string", length=255, nullable=false)
     */
    private $instagramUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_url", type="string", length=255, nullable=false)
     */
    private $linkedinUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="analytics_tag", type="string", length=255, nullable=false)
     */
    private $analyticsTag;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}
