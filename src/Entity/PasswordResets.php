<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasswordResets
 *
 * @ORM\Table(name="password_resets", indexes={@ORM\Index(name="password_resets_email_index", columns={"email"})})
 * @ORM\Entity
 */
class PasswordResets
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


}
