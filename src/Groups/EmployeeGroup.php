<?php

namespace Herdl\PayRun\Groups;

class EmployeeGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeeFromEmployer
     *
     * Gets the specified employee from employer by employee code.
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getEmployeeFromEmployer(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeeByEffectiveDate
     *
     * Returns the employee's state at the specified effective date.
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployeeByEffectiveDate(string $employerId, string $employeeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetAEAssessmentFromEmployee
     *
     * Gets the auto enrolment assessment from the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $aeAssessmentId
     * @return array
     */
    public function getAEAssessmentFromEmployee(string $employerId, string $employeeId, string $aeAssessmentId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/AEAssessment/{$aeAssessmentId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetAEAssessmentsFromEmployee
     *
     * Gets all auto enrolment assessments from the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getAEAssessmentsFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/AEAssessments"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetCommentariesFromEmployee
     *
     * Get links to all commentaries for the specified employee.
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getCommentariesFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Commentaries"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetCommentaryFromEmployee
     *
     * Gets the specified commentary report from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $commentaryId
     * @return array
     */
    public function getCommentaryFromEmployee(string $employerId, string $employeeId, string $commentaryId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Commentary/$commentaryId"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetPayRunsFromEmployee
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
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeeRevisionByNumber
     *
     * Get the employee revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $revisionNumber
     * @return array
     */
    public function getEmployeeRevisionByNumber(string $employerId, string $employeeId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Revision/$revisionNumber"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesFromEmployer
     *
     * Get links to all employees for the specified employer.
     *
     * @param string $employerId
     * @return array
     */
    public function getEmployeesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employees"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesByEffectiveDate
     *
     * Get links to all employees for the employer on specified effective date.
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployeesByEffectiveDate(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employees/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesWithTag
     *
     * Gets the employees with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getEmployeesWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employees/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetAllEmployeeTags
     *
     * Gets all the employee tags
     *
     * @param string $employerId
     * @return array
     */
    public function getAllEmployeeTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employees/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesFromPaySchedule
     *
     * Gets links to all employee revisions that have ever existed in the specified pay schedule.
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
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesFromPayScheduleOnEffectiveDate
     *
     * Gets links to all employee revisions that have ever existed in the specified pay schedule.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployeesFromPayScheduleOnEffectiveDate(
        string $employerId,
        string $payScheduleId,
        string $effectiveDate
    ): array {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Employees/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetCommentaryFromPayRunByEmployee
     *
     * Get commentary from payrun by specified employee.
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getCommentaryFromPayRunByEmployee(
        string $employerId,
        string $payScheduleId,
        string $payRunId
    ): array {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Employees/Commentary"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/GetEmployeesFromPayRun
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
     * https://developer.payrun.io/explore/#!/Employee/PatchEmployee
     *
     * Patches the specified employee with the supplied values
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function patchEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/Employee/{$employeeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/PostEmployeeIntoEmployer
     *
     * Create a new employee object
     *
     * @param string $employerId
     * @param array $employee
     * @return array
     */
    public function postEmployeeIntoEmployer(string $employerId, array $employee): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/Employees",
            [
                'body' => [
                    'Employee' => $employee
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/PutEmployeeIntoEmployer
     *
     * Updates the existing specified employee object
     *
     * @param string $employerId
     * @param string $employeeId
     * @param array $employee
     * @return array
     */
    public function putEmployeeIntoEmployer(string $employerId, string $employeeId, array $employee): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Employee/{$employeeId}",
            [
                'body' => [
                    'Employee' => $employee
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/DeleteEmployee
     *
     * Delete the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function deleteEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/DeleteEmployeeRevision
     *
     * Delete the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $effectiveDate
     * @return array
     */
    public function deleteEmployeeRevision(string $employerId, string $employeeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employee/DeleteEmployeeRevisionByNumber
     *
     * Delete the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $revisionNumber
     * @return array
     */
    public function deleteEmployeeRevisionByNumber(
        string $employerId,
        string $employeeId,
        string $revisionNumber
    ): array {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }
}
