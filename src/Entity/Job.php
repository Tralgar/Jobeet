<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Job")
 * @ORM\HasLifecycleCallbacks
 */
class Job
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  private $id;

  /**
   * @ORM\ManyToOne(targetEntity="Category", inversedBy="jobs")
   * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
   */
  private $category;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $type;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $company;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $logo;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $url;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $position;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $location;

  /**
   * @ORM\Column(type="text")
   */
  private $description;

  /**
   * @ORM\Column(type="text")
   */
  private $howToApply;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $token;

  /**
   * @ORM\Column(type="boolean")
   */
  private $isPublic = false;

  /**
   * @ORM\Column(type="boolean")
   */
  private $isActivated = true;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $email;

  /**
   * @ORM\Column(type="datetime")
   */
  private $expiresAt;

  /**
   * @ORM\Column(type="datetime")
   */
  private $createdAt;

  /**
   * @ORM\Column(type="datetime", nullable=true)
   */
  private $updatedAt;

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
   * Get category
   *
   * @return Category
   */
  public function getCategory(): Category
  {
    return $this->category;
  }

  /**
   * Set category
   *
   * @param Category $category
   * @return Job
   */
  public function setCategory(Category $category): self
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Get type
   *
   * @return string
   */
  public function getType(): ?string
  {
    return $this->type;
  }

  /**
   * Set type
   *
   * @param string $type
   * @return Job
   */
  public function setType(string $type): self
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get company
   *
   * @return string
   */
  public function getCompany(): string
  {
    return $this->company;
  }

  /**
   * Set company
   *
   * @param string $company
   * @return Job
   */
  public function setCompany(string $company): self
  {
    $this->company = $company;

    return $this;
  }

  /**
   * Get logo
   *
   * @return string
   */
  public function getLogo(): ?string
  {
    return $this->logo;
  }

  /**
   * Set logo
   *
   * @param string $logo
   * @return Job
   */
  public function setLogo(string $logo): self
  {
    $this->logo = $logo;

    return $this;
  }

  /**
   * Get url
   *
   * @return string
   */
  public function getUrl(): ?string
  {
    return $this->url;
  }

  /**
   * Set url
   *
   * @param string $url
   * @return Job
   */
  public function setUrl(string $url): self
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Get position
   *
   * @return string
   */
  public function getPosition(): string
  {
    return $this->position;
  }

  /**
   * Set position
   *
   * @param string $position
   * @return Job
   */
  public function setPosition(string $position): self
  {
    $this->position = $position;

    return $this;
  }

  /**
   * Get location
   *
   * @return string
   */
  public function getLocation(): string
  {
    return $this->location;
  }

  /**
   * Set location
   *
   * @param string $location
   * @return Job
   */
  public function setLocation(string $location): self
  {
    $this->location = $location;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * Set description
   *
   * @param string $description
   * @return Job
   */
  public function setDescription(string $description): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get howToApply
   *
   * @return string
   */
  public function getHowToApply(): string
  {
    return $this->howToApply;
  }

  /**
   * Set howToApply
   *
   * @param string $howToApply
   * @return Job
   */
  public function setHowToApply(string $howToApply): self
  {
    $this->howToApply = $howToApply;

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
   * @return Job
   */
  public function setToken(string $token): self
  {
    $this->token = $token;

    return $this;
  }

  /**
   * Get isPublic
   *
   * @return bool
   */
  public function isPublic(): bool
  {
    return $this->isPublic;
  }

  /**
   * Set isPublic
   *
   * @param bool $isPublic
   * @return Job
   */
  public function setIsPublic(bool $isPublic): self
  {
    $this->isPublic = $isPublic;

    return $this;
  }

  /**
   * Get isActivated
   *
   * @return bool
   */
  public function isActivated(): bool
  {
    return $this->isActivated;
  }

  /**
   * Set isActivated
   *
   * @param bool $isActivated
   * @return Job
   */
  public function setIsActivated(bool $isActivated): self
  {
    $this->isActivated = $isActivated;

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
   * @return Job
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get expiresAt
   *
   * @return DateTime
   */
  public function getExpiresAt(): DateTime
  {
    return $this->expiresAt;
  }

  /**
   * Set expiresAt
   *
   * @param DateTime $expiresAt
   * @return Job
   */
  public function setExpiresAt(DateTime $expiresAt): self
  {
    $this->expiresAt = $expiresAt;

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
   * Get updateAt
   *
   * @return DateTime
   */
  public function getUpdatedAt(): ?DateTime
  {
    return $this->updatedAt;
  }

  /**
   * Set createdAt
   *
   * @ORM\PrePersist
   *
   * @param LifecycleEventArgs $event
   * @return Job
   */
  public function setCreatedAtValue(LifecycleEventArgs $event)
  {
    $this->createdAt = new DateTime();

    return $this;
  }

  /**
   * Set updatedAt
   *
   * @ORM\PreUpdate
   *
   * @param LifecycleEventArgs $event
   * @return Job
   */
  public function setUpdatedAtValue(LifecycleEventArgs $event)
  {
    $this->updatedAt = new DateTime();

    return $this;
  }
}