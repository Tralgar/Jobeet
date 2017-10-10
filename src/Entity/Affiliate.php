<?php

namespace App\Entity;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Affiliate")
 * @ORM\HasLifecycleCallbacks
 */

class Affiliate
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  private $id;

  /**
   * @ORM\ManyToMany(targetEntity="Category", mappedBy="affiliates")
   */
  private $categories;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $url;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $email;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $token;

  /**
   * @ORM\Column(type="boolean")
   */
  private $isActive = true;

  /**
   * @ORM\Column(type="datetime")
   */
  private $createdAt;

  public function __construct()
  {
    $this->categories = new ArrayCollection();
  }

  /**
   * Get ID
   *
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * Get categories
   *
   * @return array
   */
  public function getCategories(): array
  {
    return $this->categories;
  }

  /**
   * Set categories
   *
   * @param array $categories
   * @return Affiliate
   */
  public function setCategories(array $categories): self
  {
    $this->categories = $categories;

    return $this;
  }

  /**
   * Get URL
   *
   * @return string
   */
  public function getUrl(): string
  {
    return $this->url;
  }

  /**
   * Set URL
   *
   * @param string $url
   * @return Affiliate
   */
  public function setUrl(string $url): self
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Get email
   *
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set email
   *
   * @param string $email
   * @return Affiliate
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get token
   *
   * @return string
   */
  public function getToken(): string
  {
    return $this->token;
  }

  /**
   * Set token
   *
   * @param string $token
   * @return Affiliate
   */
  public function setToken(string $token): self
  {
    $this->token = $token;

    return $this;
  }

  /**
   * Get isActive
   *
   * @return bool
   */
  public function getisActive(): bool
  {
    return $this->isActive;
  }

  /**
   * Set isActive
   *
   * @param bool $isActive
   * @return Affiliate
   */
  public function setIsActive(bool $isActive): self
  {
    $this->isActive = $isActive;

    return $this;
  }

  /**
   * Get createdAt
   *
   * @return DateTime
   */
  public function getCreatedAt(): DateTime
  {
    return $this->createdAt;
  }

  /**
   * Set createAt
   *
   * @ORM\PrePersist
   *
   * @param LifecycleEventArgs $event
   * @return Affiliate
   */
  public function setCreatedAtValue(LifecycleEventArgs $event)
  {
    $this->createdAt = new DateTime();

    return $this;
  }
}