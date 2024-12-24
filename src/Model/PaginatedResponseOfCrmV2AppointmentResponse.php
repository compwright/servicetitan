<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan\Model;

class PaginatedResponseOfCrmV2AppointmentResponse
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
     * From which page this output has started.
     *
     * @var int
     */
    protected $page;
    /**
     * Page size for this query (i.e. how many records were requested to return).
     *
     * @var int
     */
    protected $pageSize;
    /**
     * True if there are more records in the query than returned in this result.
     *
     * @var bool
     */
    protected $hasMore;
    /**
     * Total count of records for this query (can optionally be populated).
     *
     * @var int|null
     */
    protected $totalCount;
    /**
     * The collection of result items, will never have more than PageSize items.
     *
     * @var list<CrmV2AppointmentResponse>
     */
    protected $data;

    /**
     * From which page this output has started.
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * From which page this output has started.
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;

        return $this;
    }

    /**
     * Page size for this query (i.e. how many records were requested to return).
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * Page size for this query (i.e. how many records were requested to return).
     */
    public function setPageSize(int $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * True if there are more records in the query than returned in this result.
     */
    public function getHasMore(): bool
    {
        return $this->hasMore;
    }

    /**
     * True if there are more records in the query than returned in this result.
     */
    public function setHasMore(bool $hasMore): self
    {
        $this->initialized['hasMore'] = true;
        $this->hasMore = $hasMore;

        return $this;
    }

    /**
     * Total count of records for this query (can optionally be populated).
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total count of records for this query (can optionally be populated).
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * The collection of result items, will never have more than PageSize items.
     *
     * @return list<CrmV2AppointmentResponse>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * The collection of result items, will never have more than PageSize items.
     *
     * @param list<CrmV2AppointmentResponse> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
