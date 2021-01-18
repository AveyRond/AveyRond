<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryArticle
 *
 * @ORM\Table(name="category_article")
 * @ORM\Entity
 */
class CategoryArticle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category_type", type="string", length=255, nullable=false)
     */
    private $categoryType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryType(): ?string
    {
        return $this->categoryType;
    }

    public function setCategoryType(string $categoryType): self
    {
        $this->categoryType = $categoryType;

        return $this;
    }

}
