<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class TenantSettingsV2EmployeeResponse
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $role;
    /**
     * @var int|null
     */
    protected $businessUnitId;
    /**
     * @var \DateTime
     */
    protected $createdOn;
    /**
     * @var \DateTime
     */
    protected $modifiedOn;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var string|null
     */
    protected $loginName;
    /**
     * @var TenantSettingsV2EmployeeCustomFieldResponse[]|null
     */
    protected $customFields;
    /**
     * @var bool
     */
    protected $active;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getBusinessUnitId(): ?int
    {
        return $this->businessUnitId;
    }

    public function setBusinessUnitId(?int $businessUnitId): self
    {
        $this->businessUnitId = $businessUnitId;

        return $this;
    }

    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getModifiedOn(): \DateTime
    {
        return $this->modifiedOn;
    }

    public function setModifiedOn(\DateTime $modifiedOn): self
    {
        $this->modifiedOn = $modifiedOn;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getLoginName(): ?string
    {
        return $this->loginName;
    }

    public function setLoginName(?string $loginName): self
    {
        $this->loginName = $loginName;

        return $this;
    }

    /**
     * @return TenantSettingsV2EmployeeCustomFieldResponse[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * @param TenantSettingsV2EmployeeCustomFieldResponse[]|null $customFields
     */
    public function setCustomFields(?array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
