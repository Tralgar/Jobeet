<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Category")
 */
class Category
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=63)
   */
  private $name;

  /**
   * @ORM\OneToMany(targetEntity="Job", mappedBy="category")
   */
  private $jobs;

  /**
   * @ORM\ManyToMany(targetEntity="Affiliate", mappedBy="categories")
   */
  private $affiliates;

  public function __construct()
  {
    $this->jobs = new ArrayCollection();
    $this->affiliates = new ArrayCollection();
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
   * Get name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set name
   *
   * @param string $name
   * @return Category
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get jobs
   *
   * @return array
   */
  public function getJobs(): array
  {
    return $this->jobs;
  }

  /**
   * Get jobs
   *
   * @param array $jobs
   * @return Category
   */
  public function setJobs(array $jobs): self
  {
    $this->jobs = $jobs;

    return $this;
  }

  /**
   * Get affiliates
   *
   * @return Affiliate[]
   */
  public function getAffiliates(): array
  {
    return $this->affiliates;
  }

  /**
   * Set affiliates
   *
   * @param Affiliate[] $affiliates
   * @return Category
   */
  public function setAffiliates(array $affiliates): self
  {
    $this->affiliates = $affiliates;

    return $this;
  }
}