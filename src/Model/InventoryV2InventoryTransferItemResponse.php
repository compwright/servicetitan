<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class InventoryV2InventoryTransferItemResponse
{
    /**
     * Item Id.
     *
     * @var int
     */
    protected $id;
    /**
     * Sku Id.
     *
     * @var int
     */
    protected $skuId;
    /**
     * Item name.
     *
     * @var string
     */
    protected $name;
    /**
     * Item code.
     *
     * @var string
     */
    protected $code;
    /**
     * Item description.
     *
     * @var string
     */
    protected $description;
    /**
     * Transfer quantity.
     *
     * @var float
     */
    protected $quantity;

    /**
     * Item Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Item Id.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Sku Id.
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * Sku Id.
     */
    public function setSkuId(int $skuId): self
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Item name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Item name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Item code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Item code.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Item description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Item description.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Transfer quantity.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Transfer quantity.
     */
    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
