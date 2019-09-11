<?php

namespace B3none\PayRun\Groups;

class AEAssessmentGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/AEAssessment/GetAEAssessmentFromEmployee
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
     * https://developer.payrun.io/explore/#!/AEAssessment/GetAEAssessmentsFromEmployee
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
     * https://developer.payrun.io/explore/#!/AEAssessment/GetAEAssessmentsFromPayRun
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
     * https://developer.payrun.io/explore/#!/AEAssessment/PostNewAEAssessment
     *
     * Creates a new auto enrolment assessment for the employee. Used to insert historical assessments
     *
     * @param string $employerId
     * @param string $employeeId
     * @param array $aeAssessment
     * @return array
     */
    public function postNewAEAssessment(string $employerId, string $employeeId, array $aeAssessment): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/Employee/{$employeeId}/AEAssessments",
            [
                'body' => [
                    'AEAssessment' => $aeAssessment,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/AEAssessment/PutNewAEAssessment
     *
     * Creates a new auto enrolment assessment for the employee. Used to insert historical assessments
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $aeAssessmentId
     * @param array $aeAssessment
     * @return array
     */
    public function putNewAEAssessment(string $employerId, string $employeeId, string $aeAssessmentId, array $aeAssessment): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/Employee/{$employeeId}/AEAssessment/{$aeAssessmentId}",
            [
                'body' => [
                    'AEAssessment' => $aeAssessment,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/AEAssessment/DeleteAEAssessment
     *
     * Deletes an existing auto enrolment assessment for the employee. Used to remove historical assessments
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $aeAssessmentId
     * @return array
     */
    public function deleteAEAssessment(string $employerId, string $employeeId, string $aeAssessmentId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/AEAssessment/{$aeAssessmentId}"
        );

        return $this->getResponseData($response);
    }
}
