<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PricebookV2CategoryUpdateRequest
{
    /**
     * The name of the category.
     *
     * @var string
     */
    protected $name;
    /**
     * Active shows if this category is currently active.
     *
     * @var bool
     */
    protected $active;
    /**
     * A description that described the category.
     *
     * @var string
     */
    protected $description;
    /**
     * The id of the category that is the parent of this item.
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * The position location of this item.
     *
     * @var int
     */
    protected $position;
    /**
     * The image to display as the category.
     *
     * @var string
     */
    protected $image;
    /**
     * The category type. This field can be Service or Material.
     *
     * @var mixed
     */
    protected $categoryType;
    /**
     * The business units that are associated with this category.
     *
     * @var int[]
     */
    protected $businessUnitIds;
    /**
     * The images that will be used for the SKUs under this category.
     *
     * @var string[]
     */
    protected $skuImages;
    /**
     * The videos that will be used for the videos under this category.
     *
     * @var string[]
     */
    protected $skuVideos;

    /**
     * The name of the category.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the category.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Active shows if this category is currently active.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Active shows if this category is currently active.
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * A description that described the category.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * A description that described the category.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The id of the category that is the parent of this item.
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * The id of the category that is the parent of this item.
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * The position location of this item.
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * The position location of this item.
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * The image to display as the category.
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * The image to display as the category.
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * The category type. This field can be Service or Material.
     *
     * @return mixed
     */
    public function getCategoryType()
    {
        return $this->categoryType;
    }

    /**
     * The category type. This field can be Service or Material.
     *
     * @param mixed $categoryType
     */
    public function setCategoryType($categoryType): self
    {
        $this->categoryType = $categoryType;

        return $this;
    }

    /**
     * The business units that are associated with this category.
     *
     * @return int[]
     */
    public function getBusinessUnitIds(): array
    {
        return $this->businessUnitIds;
    }

    /**
     * The business units that are associated with this category.
     *
     * @param int[] $businessUnitIds
     */
    public function setBusinessUnitIds(array $businessUnitIds): self
    {
        $this->businessUnitIds = $businessUnitIds;

        return $this;
    }

    /**
     * The images that will be used for the SKUs under this category.
     *
     * @return string[]
     */
    public function getSkuImages(): array
    {
        return $this->skuImages;
    }

    /**
     * The images that will be used for the SKUs under this category.
     *
     * @param string[] $skuImages
     */
    public function setSkuImages(array $skuImages): self
    {
        $this->skuImages = $skuImages;

        return $this;
    }

    /**
     * The videos that will be used for the videos under this category.
     *
     * @return string[]
     */
    public function getSkuVideos(): array
    {
        return $this->skuVideos;
    }

    /**
     * The videos that will be used for the videos under this category.
     *
     * @param string[] $skuVideos
     */
    public function setSkuVideos(array $skuVideos): self
    {
        $this->skuVideos = $skuVideos;

        return $this;
    }
}
