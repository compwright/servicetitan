<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2CustomFieldOperationRequest
{
    /**
     * @var int
     */
    protected $objectId;
    /**
     * @var AccountingV2CustomFieldPairRequest[]
     */
    protected $customFields;

    public function getObjectId(): int
    {
        return $this->objectId;
    }

    public function setObjectId(int $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @return AccountingV2CustomFieldPairRequest[]
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param AccountingV2CustomFieldPairRequest[] $customFields
     */
    public function setCustomFields(array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }
}
