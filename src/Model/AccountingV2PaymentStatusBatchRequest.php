<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class AccountingV2PaymentStatusBatchRequest
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
     * Indicates a payment's status.
     *
     * @var string
     */
    protected $status;
    /**
     * @var list<int>
     */
    protected $paymentIds;

    /**
     * Indicates a payment's status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Indicates a payment's status.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * @return list<int>
     */
    public function getPaymentIds(): array
    {
        return $this->paymentIds;
    }

    /**
     * @param list<int> $paymentIds
     */
    public function setPaymentIds(array $paymentIds): self
    {
        $this->initialized['paymentIds'] = true;
        $this->paymentIds = $paymentIds;

        return $this;
    }
}
