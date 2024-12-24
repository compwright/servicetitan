<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class CrmV2CustomersNewCustomerContact
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Landline, mobile, e-mail, or fax.
     */
    protected $type;
    /**
     * The email, phone number, or fax number for the contact.
     *
     * @var string
     */
    protected $value;
    /**
     * Short description about this contact, for example, “work #” or “Owner’s daughter - Kelly.”.
     *
     * @var string|null
     */
    protected $memo;

    /**
     * Landline, mobile, e-mail, or fax.
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Landline, mobile, e-mail, or fax.
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The email, phone number, or fax number for the contact.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The email, phone number, or fax number for the contact.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Short description about this contact, for example, “work #” or “Owner’s daughter - Kelly.”.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Short description about this contact, for example, “work #” or “Owner’s daughter - Kelly.”.
     */
    public function setMemo(?string $memo): self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;

        return $this;
    }
}
