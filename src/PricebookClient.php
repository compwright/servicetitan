<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class PricebookClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * GET the categories in your pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by specified fields
     *     @var string $categoryType Values: [Services, Materials]
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2CategoryResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function categoriesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\CategoriesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Post to add a new category to your pricebook.
     *
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2CategoryCreateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function categoriesCreate(int $tenant, ?Model\PricebookV2CategoryCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\CategoriesCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Deletes an existing category from your pricebook.
     *
     * @param int    $id     Format - int64. Id of the SKU you are deleting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\CategoriesDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function categoriesDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\CategoriesDelete($id, $tenant), $fetch);
    }

    /**
     * Gets category details.
     *
     * @param int    $id     Format - int64. The id of the service you are requesting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\CategoriesGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function categoriesGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\CategoriesGet($id, $tenant), $fetch);
    }

    /**
     * Edits an existing category in your pricebook.
     *
     * @param int                                                                  $id          Format - int64. Unique id for the SKU is modified
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2CategoryUpdateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\CategoriesUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\CategoriesUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2CategoryResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function categoriesUpdate(int $id, int $tenant, ?Model\PricebookV2CategoryUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\CategoriesUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Get data on all of the discounts or fees in the pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by the specified field:\
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2DiscountAndFeesResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function discountAndFeesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\DiscountAndFeesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Post to add a new discount or fee to your pricebook.
     *
     * @param int                                                                         $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesCreateRequest|null $requestBody
     * @param string                                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function discountAndFeesCreate(int $tenant, ?Model\PricebookV2DiscountAndFeesCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\DiscountAndFeesCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Deletes a discount or fee from your pricebook.
     *
     * @param int    $id     Format - int64. Id of the SKU you are deleting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function discountAndFeesDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\DiscountAndFeesDelete($id, $tenant), $fetch);
    }

    /**
     * Get details if a discount or fees in the pricebook.
     *
     * @param int   $id              Format - int64. The id of the discount and fee you are requesting
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function discountAndFeesGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\DiscountAndFeesGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Edit an existing item in your pricebook.
     *
     * @param int                                                                         $id          Format - int64. Unique id for the SKU is modified
     * @param int                                                                         $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesUpdateRequest|null $requestBody
     * @param string                                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\DiscountAndFeesUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2DiscountAndFeesResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function discountAndFeesUpdate(int $id, int $tenant, ?Model\PricebookV2DiscountAndFeesUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\DiscountAndFeesUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Get data on all of the equipment in the pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by the specified field:\
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EquipmentGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2EquipmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function equipmentGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EquipmentGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Post to add a new equipment to your pricebook.
     *
     * @param int                                                                   $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2EquipmentCreateRequest|null $requestBody
     * @param string                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EquipmentCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function equipmentCreate(int $tenant, ?Model\PricebookV2EquipmentCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EquipmentCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Deletes an equipment from your pricebook.
     *
     * @param int    $id     Format - int64. Id of the SKU you are deleting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EquipmentDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\EquipmentDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function equipmentDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EquipmentDelete($id, $tenant), $fetch);
    }

    /**
     * Get details a equipment in the pricebook.
     *
     * @param int   $id              Format - int64. The id of the equipment you are requesting
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EquipmentGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\EquipmentGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function equipmentGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EquipmentGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Edit an existing item in your pricebook.
     *
     * @param int                                                                   $id          Format - int64. Unique id for the SKU is modified
     * @param int                                                                   $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2EquipmentUpdateRequest|null $requestBody
     * @param string                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\EquipmentUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\EquipmentUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2EquipmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function equipmentUpdate(int $id, int $tenant, ?Model\PricebookV2EquipmentUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\EquipmentUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Get details on materials in the pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by the specified field:\
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\MaterialsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2MaterialResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function materialsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\MaterialsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Add a new Materials to your pricebook.
     *
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2MaterialCreateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\MaterialsCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function materialsCreate(int $tenant, ?Model\PricebookV2MaterialCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\MaterialsCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Deletes a material from your pricebook.
     *
     * @param int    $id     Format - int64. Id of the SKU you are deleting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\MaterialsDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\MaterialsDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function materialsDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\MaterialsDelete($id, $tenant), $fetch);
    }

    /**
     * Get details on a material in the pricebook.
     *
     * @param int   $id              Format - int64. The id of the material you are requesting
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\MaterialsGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\MaterialsGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function materialsGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\MaterialsGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Edit an existing item in your pricebook.
     *
     * @param int                                                                  $id          Format - int64. Unique id for the SKU is modified
     * @param int                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2MaterialUpdateRequest|null $requestBody
     * @param string                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\MaterialsUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\MaterialsUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2MaterialResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function materialsUpdate(int $id, int $tenant, ?Model\PricebookV2MaterialUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\MaterialsUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * @param int                                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkUpdateRequest|null $requestBody
     * @param string                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PricebookBulkUpdateBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function pricebookBulkUpdate(int $tenant, ?Model\PricebookV2PricebookBulkUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PricebookBulkUpdate($tenant, $requestBody), $fetch);
    }

    /**
     * @param int                                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateRequest|null $requestBody
     * @param string                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\PricebookBulkCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2PricebookBulkCreateResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function pricebookBulkCreate(int $tenant, ?Model\PricebookV2PricebookBulkCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\PricebookBulkCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Get data on all of the services in the pricebook.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by the specified field:\
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ServicesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfPricebookV2ServiceResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function servicesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ServicesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Post to add a new service to your pricebook.
     *
     * @param int                                                                 $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2ServiceCreateRequest|null $requestBody
     * @param string                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ServicesCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function servicesCreate(int $tenant, ?Model\PricebookV2ServiceCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ServicesCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Deletes a service from your pricebook.
     *
     * @param int    $id     Format - int64. Id of the SKU you are deleting
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ServicesDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\ServicesDeleteNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function servicesDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ServicesDelete($id, $tenant), $fetch);
    }

    /**
     * Get details a service in the pricebook.
     *
     * @param int   $id              Format - int64. The id of the service you are requesting
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. Items that are created with a specific guid, could be fetched/updated/removed
    only when the same application guid is provided.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ServicesGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\ServicesGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function servicesGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ServicesGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Edit an existing item in your pricebook.
     *
     * @param int                                                                 $id          Format - int64. Unique id for the SKU is modified
     * @param int                                                                 $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\PricebookV2ServiceUpdateRequest|null $requestBody
     * @param string                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ServicesUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\ServicesUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PricebookV2ServiceResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function servicesUpdate(int $id, int $tenant, ?Model\PricebookV2ServiceUpdateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ServicesUpdate($id, $tenant, $requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api-integration.servicetitan.io');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \CompWright\ServiceTitan\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}