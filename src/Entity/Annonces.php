<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces", indexes={@ORM\Index(name="annonces_agent_id_foreign", columns={"agent_id"})})
 * @ORM\Entity
 */
class Annonces
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
     * @ORM\Column(name="immo_type", type="string", length=191, nullable=false, options={"comment"="'Appartement','Maison','Villa','Terain','Studio','Duplexe'"})
     */
    private $immoType;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_type", type="string", length=191, nullable=false, options={"comment"="'Vente','Location','Hypothech'"})
     */
    private $saleType;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=false)
     */
    private $video;

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
     * @var \Agents
     *
     * @ORM\ManyToOne(targetEntity="Agents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agent_id", referencedColumnName="id")
     * })
     */
    private $agent;


}
