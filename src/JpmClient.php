<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CompWright\ServiceTitan;

class JpmClient extends \CompWright\ServiceTitan\Runtime\Client\Client
{
    /**
     * Deletes appointment with specified id.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsDeleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsDeleteNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsDeleteConflictException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsDelete(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsDelete($id, $tenant), $fetch);
    }

    /**
     * Gets appointment specified by ID.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsGet($id, $tenant), $fetch);
    }

    /**
     * Gets a list of appointments.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var int $jobId Format - int64. Return all appointments for this job
     *     @var int $projectId Format - int64. Return all appointments for jobs that are part of this project
     *     @var string $number Return all appointments with this appointment number
     *     @var string $status Return items with specified status AppointmentStatus\
     *     @var string $startsOnOrAfter Format - date-time (as date-time in RFC3339). Return appointments that start on or after the specified date/time (in UTC)
     *     @var string $startsBefore Format - date-time (as date-time in RFC3339). Return appointments that start before the specified date/time (in UTC)
     *     @var int $technicianId Format - int64. Return appointments this technician is assigned to
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return appointments modified before a certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return appointments modified on or after a certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return appointments created on or after a certain date/time (in UTC)
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return appointments created before a certain date/time (in UTC)
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $sort Applies sorting by the specified field:\
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2AppointmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Adds a new appointment to an existing job.
     *
     * @param int                                                            $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2AppointmentAddRequest|null $requestBody
     * @param string                                                         $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsAddBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsAddConflictException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsAdd(int $tenant, ?Model\CrmV2AppointmentAddRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsAdd($tenant, $requestBody), $fetch);
    }

    /**
     * Reschedule job appointment.
     *
     * @param int                                                                   $id          format - int64
     * @param int                                                                   $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2AppointmentRescheduleRequest|null $requestBody
     * @param string                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRescheduleBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRescheduleNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRescheduleConflictException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsReschedule(int $id, int $tenant, ?Model\CrmV2AppointmentRescheduleRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsReschedule($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Removes hold from the appointment.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRemoveHoldBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRemoveHoldNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsRemoveHoldConflictException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsRemoveHold(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsRemoveHold($id, $tenant), $fetch);
    }

    /**
     * Puts the appointment on hold.
     *
     * @param int                                                             $id          format - int64
     * @param int                                                             $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2HoldAppointmentRequest|null $requestBody
     * @param string                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsHoldConflictException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsHold(int $id, int $tenant, ?Model\CrmV2HoldAppointmentRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsHold($id, $tenant, $requestBody), $fetch);
    }

    /**
     * @param int                                                                                  $id          format - int64
     * @param int                                                                                  $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2UpdateAppointmentSpecialInstructionsRequest|null $requestBody
     * @param string                                                                               $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsUpdateSpecialInstructionsBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsUpdateSpecialInstructionsNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\AppointmentsUpdateSpecialInstructionsConflictException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2AppointmentResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function appointmentsUpdateSpecialInstructions(int $id, int $tenant, ?Model\CrmV2UpdateAppointmentSpecialInstructionsRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\AppointmentsUpdateSpecialInstructions($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of job cancel reasons.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $active What kind of items should be returned (active and inactive items will be returned by default)\
    Values: [True, Any, False]
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobCancelReasonsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobCancelReasonResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobCancelReasonsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobCancelReasonsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a list of job hold reasons.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. Result page to load
     *     @var int $pageSize Format - int32. Number of results per page
     *     @var bool $includeTotal Include total count in the response
     *     @var string $active Filter by status.  Acceptable values are true, false, any.\
    Values: [True, Any, False]
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobHoldReasonsGetBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobHoldReasonResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobHoldReasonsGet(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobHoldReasonsGet($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a job by ID.
     *
     * @param int   $id              format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. If this guid is provided, external data corresponding to
    this application guid will be returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Updates a job.
     *
     * @param int                                                       $id          format - int64
     * @param int                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2UpdateJobRequest|null $requestBody
     * @param string                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsUpdateBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsUpdateNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsUpdate(int $id, int $tenant, ?Model\CrmV2UpdateJobRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of jobs.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var string $number Filters by job number
     *     @var int $projectId Format - int64. Filters by project ID
     *     @var int $bookingId Format - int64. Filters by booking ID that resulted in this job
     *     @var string $jobStatus Filters by job status. Supported statuses are "Scheduled", "InProgress", "Hold", "Completed", and "Canceled"
     *     @var string $appointmentStatus Filters by appointment status. Return a job if it has any appointment with the specified status.
     *     @var string $firstAppointmentStartsOnOrAfter Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts on or after date/time (in UTC). Use with
     *     @var string $firstAppointmentStartsBefore Format - date-time (as date-time in RFC3339). Return jobs whose first appointment starts before date/time (in UTC)
     *     @var string $appointmentStartsOnOrAfter Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC)
     *     @var string $appointmentStartsBefore Format - date-time (as date-time in RFC3339). Return jobs if any appointment starts after date/time (in UTC)
     *     @var int $technicianId Format - int64. Return jobs if technician is assigned to any appointment
     *     @var int $customerId Format - int64. Filters by job's customer ID
     *     @var int $locationId Format - int64. Filters by job's location ID
     *     @var int $soldById Format - int64. Filters by the technician who sold the job
     *     @var int $jobTypeId Format - int64. Filters by job type ID
     *     @var int $campaignId Format - int64. Filters by job's campaign ID
     *     @var int $businessUnitId Format - int64. Filters by job's business unit ID
     *     @var int $invoiceId Format - int64. Filters by job's invoice ID
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $completedOnOrAfter Format - date-time (as date-time in RFC3339). Return jobs that are completed after a certain date/time (in UTC)
     *     @var string $completedBefore Format - date-time (as date-time in RFC3339). Return jobs that are completed before a certain date/time (in UTC)
     *     @var string $sort Applies sorting by the specified field:\
     *     @var string $externalDataApplicationGuid Format - guid. If this guid is provided, external data corresponding to
    this application guid will be returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Creates a job.
     *
     * @param int                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2JobCreateRequest|null $requestBody
     * @param string                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsCreate(int $tenant, ?Model\CrmV2JobCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Cancels a job.
     *
     * @param int                                                       $id          format - int64
     * @param int                                                       $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2CancelJobRequest|null $requestBody
     * @param string                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsCancelBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsCancelNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function jobsCancel(int $id, int $tenant, ?Model\CrmV2CancelJobRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsCancel($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Removes cancellation from a job.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsRemoveCancellationBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function jobsRemoveCancellation(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsRemoveCancellation($id, $tenant), $fetch);
    }

    /**
     * Puts a job on hold.
     *
     * @param int                                                     $id          format - int64
     * @param int                                                     $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2HoldJobRequest|null $requestBody
     * @param string                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsHoldBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsHoldNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function jobsHold(int $id, int $tenant, ?Model\CrmV2HoldJobRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsHold($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Completes a job.
     *
     * @param int                                                         $id          format - int64
     * @param int                                                         $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2CompleteJobRequest|null $requestBody
     * @param string                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsCompleteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsCompleteNotFoundException
     * @throws \CompWright\ServiceTitan\Exception\JobsCompleteConflictException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function jobsComplete(int $id, int $tenant, ?Model\CrmV2CompleteJobRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsComplete($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of notes on the specified job.
     *
     * @param int   $id              format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetNotesBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsGetNotesNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2NoteResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsGetNotes(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsGetNotes($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Creates a note on the specified job.
     *
     * @param int                                                           $id          format - int64
     * @param int                                                           $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2JobNoteCreateRequest|null $requestBody
     * @param string                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsCreateNoteBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsCreateNoteNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2NoteResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsCreateNote(int $id, int $tenant, ?Model\CrmV2JobNoteCreateRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsCreateNote($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a list of cancel reasons for specific jobs.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetCancelReasonsBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2CancelReasonResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsGetCancelReasons(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsGetCancelReasons($tenant, $queryParameters), $fetch);
    }

    /**
     * Gets a list of history entries for the specified job.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobsGetHistoryBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobsGetHistoryNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobHistoryResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobsGetHistory(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobsGetHistory($id, $tenant), $fetch);
    }

    /**
     * Gets a list of job types.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $name Filters by job type name
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $active What kind of items should be returned (only active items will be returned by default)\
     *     @var string $orderBy Orders results by a field. Supported fields are "id", "modifiedOn", and "createdOn"
     *     @var string $orderByDirection Specifies order direction of results. Supported values are "asc"/"ascending" and "desc"/"descending"
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return items modified before certain date/time (in UTC)
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return items modified on or after certain date/time (in UTC)
     *     @var string $externalDataApplicationGuid Format - guid. If this guid is provided, external data corresponding to
    this application guid will be returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobTypesGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2JobTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobTypesGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobTypesGetList($tenant, $queryParameters), $fetch);
    }

    /**
     * Creates a job type.
     *
     * @param int                                                           $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2CreateJobTypeRequest|null $requestBody
     * @param string                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobTypesCreateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobTypesCreate(int $tenant, ?Model\CrmV2CreateJobTypeRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobTypesCreate($tenant, $requestBody), $fetch);
    }

    /**
     * Gets a job type by ID.
     *
     * @param int   $id              format - int64
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $externalDataApplicationGuid Format - guid. If this guid is provided, external data corresponding to
    this application guid will be returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobTypesGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\JobTypesGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobTypesGet(int $id, int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobTypesGet($id, $tenant, $queryParameters), $fetch);
    }

    /**
     * Creates a job type.
     *
     * @param int                                                           $id          format - int64
     * @param int                                                           $tenant      Tenant ID
     * @param \CompWright\ServiceTitan\Model\CrmV2UpdateJobTypeRequest|null $requestBody
     * @param string                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\JobTypesUpdateBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2JobTypeResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function jobTypesUpdate(int $id, int $tenant, ?Model\CrmV2UpdateJobTypeRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\JobTypesUpdate($id, $tenant, $requestBody), $fetch);
    }

    /**
     * Gets a project by ID.
     *
     * @param int    $id     format - int64
     * @param int    $tenant Tenant ID
     * @param string $fetch  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ProjectsGetBadRequestException
     * @throws \CompWright\ServiceTitan\Exception\ProjectsGetNotFoundException
     *
     * @return \CompWright\ServiceTitan\Model\CrmV2ProjectResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function projectsGet(int $id, int $tenant, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ProjectsGet($id, $tenant), $fetch);
    }

    /**
     * Gets a list of projects.
     *
     * @param int   $tenant          Tenant ID
     * @param array $queryParameters {
     *
     *     @var string $ids Perform lookup by multiple IDs (maximum 50)
     *     @var int $customerId Format - int64. Filters by customer ID
     *     @var int $locationId Format - int64. Filters by location ID
     *     @var int $invoiceId Format - int64. Return projects if it contains the specified invoice
     *     @var int $technicianId Format - int64. Return project if technician is assigned to any appointments on any job in the project
     *     @var int $jobId Format - int64. Return project if it contains the specified job
     *     @var int $appointmentId Format - int64. Return project if it contains the specified appointment in the project's jobs
     *     @var string $createdBefore Format - date-time (as date-time in RFC3339). Return items created before certain date/time (in UTC)
     *     @var string $createdOnOrAfter Format - date-time (as date-time in RFC3339). Return items created on or after certain date/time (in UTC)
     *     @var string $startsBefore Format - date-time (as date-time in RFC3339). Return projects that start before date
     *     @var string $startsOnOrAfter Format - date-time (as date-time in RFC3339). Return projects that start on or after date
     *     @var string $completedBefore Format - date-time (as date-time in RFC3339). Return projects that are completed before date
     *     @var string $completedOnOrAfter Format - date-time (as date-time in RFC3339). Return projects that are completed on or after date
     *     @var string $targetCompletionDateBefore Format - date-time (as date-time in RFC3339). Return projects whose target completion date is before date
     *     @var string $targetCompletionDateOnOrAfter Format - date-time (as date-time in RFC3339). Return projects whose target completion date is on or after date
     *     @var string $modifiedBefore Format - date-time (as date-time in RFC3339). Return projects whose last modification date is before date
     *     @var string $modifiedOnOrAfter Format - date-time (as date-time in RFC3339). Return projects whose last modification date is on or after date
     *     @var int $page Format - int32. The logical number of page to return, starting from 1
     *     @var int $pageSize Format - int32. How many records to return (50 by default)
     *     @var bool $includeTotal Whether total count should be returned
     *     @var string $status Filters by status
     *     @var string $sort Applies sorting by the specified field:\
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \CompWright\ServiceTitan\Exception\ProjectsGetListBadRequestException
     *
     * @return \CompWright\ServiceTitan\Model\PaginatedResponseOfCrmV2ProjectResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function projectsGetList(int $tenant, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \CompWright\ServiceTitan\Endpoint\ProjectsGetList($tenant, $queryParameters), $fetch);
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