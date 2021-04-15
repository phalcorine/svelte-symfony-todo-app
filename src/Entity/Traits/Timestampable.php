<?php


namespace App\Entity\Traits;


use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

trait Timestampable
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    // Lifecycle events

    /**
     * @ORM\PrePersist()
     */
    public function beforePersist()
    {
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    /**
     * @ORM\PreUpdate()
     */
    public function beforeUpdate()
    {
        $this->updatedAt = new DateTime();
    }
}