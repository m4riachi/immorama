<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteInfos
 *
 * @ORM\Table(name="website_infos")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getMap(): string
    {
        return $this->map;
    }

    /**
     * @param string $map
     */
    public function setMap(string $map): void
    {
        $this->map = $map;
    }

    /**
     * @return string
     */
    public function getFacebookUrl(): string
    {
        return $this->facebookUrl;
    }

    /**
     * @param string $facebookUrl
     */
    public function setFacebookUrl(string $facebookUrl): void
    {
        $this->facebookUrl = $facebookUrl;
    }

    /**
     * @return string
     */
    public function getInstagramUrl(): string
    {
        return $this->instagramUrl;
    }

    /**
     * @param string $instagramUrl
     */
    public function setInstagramUrl(string $instagramUrl): void
    {
        $this->instagramUrl = $instagramUrl;
    }

    /**
     * @return string
     */
    public function getLinkedinUrl(): string
    {
        return $this->linkedinUrl;
    }

    /**
     * @param string $linkedinUrl
     */
    public function setLinkedinUrl(string $linkedinUrl): void
    {
        $this->linkedinUrl = $linkedinUrl;
    }

    /**
     * @return string
     */
    public function getAnalyticsTag(): string
    {
        return $this->analyticsTag;
    }

    /**
     * @param string $analyticsTag
     */
    public function setAnalyticsTag(string $analyticsTag): void
    {
        $this->analyticsTag = $analyticsTag;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
}
