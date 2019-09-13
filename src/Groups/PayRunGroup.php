<?php

namespace Herdl\PayRun\Groups;

class PayRunGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetPayRunsFromEmployee
     *
     * Get links to all pay runs for the specified employee.
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getPayRunsFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayRuns"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetPayRunsFromEmployee
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
     * https://developer.payrun.io/explore/#!/PayRun/GetAEAssessmentsFromPayRun
     *
     * Gets all auto enrolment assessments from the specified pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getAEAssessmentsFromPayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/AEAssessments"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetCommentariesFromPayRun
     *
     * Get links to all commentaries for the specified pay run.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getCommentariesFromPayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Commentaries"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetCommentaryFromPayRunByEmployee
     *
     * Get commentary from payrun by specified employee.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $employeeId
     * @return array
     */
    public function getCommentaryFromPayRunByEmployee(string $employerId, string $payScheduleId, string $payRunId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Employee/{$employeeId}/Commentary"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetEmployeesFromPayRun
     *
     * Gets links to all employees included in the specified pay run.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getEmployeesFromPayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Employees"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetReportLinesFromPayRun
     *
     * Returns all report lines associated with the specified pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getReportLinesFromPayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/ReportLines"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetPayRunsFromPaySchedule
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
     * https://developer.payrun.io/explore/#!/PayRun/GetPayRunsWithTag
     *
     * Gets the pay runs with the tag
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $tagId
     * @return array
     */
    public function getPayRunsWithTag(string $employerId, string $payScheduleId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRuns/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/GetAllPayRunTags
     *
     * Gets all the pay run tags
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @return array
     */
    public function getAllPayRunTags(string $employerId, string $payScheduleId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRuns/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/DeletePayRun
     *
     * Delete the specified pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function deletePayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayRun/DeletePayRunEmployee
     *
     * Delete pay run results for a single employee
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $employeeId
     * @return array
     */
    public function deletePayRunEmployee(string $employerId, string $payScheduleId, string $payRunId, string $employeeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Employee/{$employeeId}"
        );

        return $this->getResponseData($response);
    }
}
