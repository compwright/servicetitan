<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Endpoint;

class InvoicesDeleteInvoiceItem extends \CompWright\ServiceTitan\Runtime\Client\BaseEndpoint implements \CompWright\ServiceTitan\Runtime\Client\Endpoint
{
    use \CompWright\ServiceTitan\Runtime\Client\EndpointTrait;
    protected $invoiceId;
    protected $itemId;
    protected $tenant;

    /**
     * delete invoice item.
     *
     * @param int $invoiceId format - int64
     * @param int $itemId    format - int64
     * @param int $tenant    Tenant ID
     */
    public function __construct(int $invoiceId, int $itemId, int $tenant)
    {
        $this->invoiceId = $invoiceId;
        $this->itemId = $itemId;
        $this->tenant = $tenant;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{invoiceId}', '{itemId}', '{tenant}'], [$this->invoiceId, $this->itemId, $this->tenant], '/accounting/v2/tenant/{tenant}/invoices/{invoiceId}/items/{itemId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \CompWright\ServiceTitan\Exception\InvoicesDeleteInvoiceItemBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \CompWright\ServiceTitan\Exception\InvoicesDeleteInvoiceItemBadRequestException($serializer->deserialize($body, 'CompWright\\ServiceTitan\\Model\\ApiErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['apiKeyHeader', 'apiKeyQuery'];
    }
}
