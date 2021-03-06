<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class ModificationResponse
{
    /**
     * The ID of created/updated object.
     *
     * @var int
     */
    protected $id;

    /**
     * The ID of created/updated object.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The ID of created/updated object.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
