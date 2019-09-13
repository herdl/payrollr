<?php

namespace Herdl\PayRun\Groups;

class PayScheduleGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetPayScheduleFromEmployer
     *
     * Returns the specified pay schedule object from employer
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @return array
     */
    public function getPayScheduleFromEmployer(string $employerId, string $payScheduleId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetEmployeesFromPaySchedule
     *
     * Returns the specified pay schedule object from employer
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @return array
     */
    public function getEmployeesFromPaySchedule(string $employerId, string $payScheduleId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Employees"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetEmployeesFromPayScheduleOnEffectiveDate
     *
     * Gets links to all employee revisions in the specified pay schedule for the given effective date.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployeesFromPayScheduleOnEffectiveDate(string $employerId, string $payScheduleId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Employees/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetPayRunFromPaySchedule
     *
     * Returns the pay run from the pay schedule
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getPayRunFromPaySchedule(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetPayRunsFromPaySchedule
     *
     * Get links to all pay runs for the specified pay schedule
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @return array
     */
    public function getPayRunsFromPaySchedule(string $employerId, string $payScheduleId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRuns"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetPaySchedulesFromEmployer
     *
     * Get links to all pay schedules for the specified employer
     *
     * @param string $employerId
     * @return array
     */
    public function getPaySchedulesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedules"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetPaySchedulesWithTag
     *
     * Gets the pay schedules with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getPaySchedulesWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedules/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/GetAllPayScheduleTags
     *
     * Gets all the pay schedule tags
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getAllPayScheduleTags(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedules/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/PostPaySchedule
     *
     * Create a new pay schedule object
     *
     * @param string $employerId
     * @param array $paySchedule
     * @return array
     */
    public function postPaySchedule(string $employerId, array $paySchedule): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/PaySchedules",
            [
                'body' => [
                    'PaySchedule' => $paySchedule
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/PutPaySchedule
     *
     * Updates the existing specified pay schedule object
     *
     * @param string $employerId
     * @param array $paySchedule
     * @return array
     */
    public function putPaySchedule(string $employerId, array $paySchedule): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/PaySchedules",
            [
                'body' => [
                    'PaySchedule' => $paySchedule
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PaySchedule/DeletePaySchedule
     *
     * Delete the specified pay schedule
     *
     * @param string $employerId
     * @return array
     */
    public function deletePaySchedule(string $employerId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PaySchedules"
        );

        return $this->getResponseData($response);
    }
}
