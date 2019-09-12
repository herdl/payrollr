<?php

namespace B3none\PayRun\Groups;

class ReportLineInstructionGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/ReportLineInstruction/GetReportingInstructionFromEmployer
     *
     * Returns the specified pay instruction from employee
     *
     * @param string $employerId
     * @param string $reportingInstructionId
     * @return array
     */
    public function getReportingInstructionFromEmployer(string $employerId, string $reportingInstructionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/ReportingInstruction/{$reportingInstructionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/ReportLineInstruction/getReportingInstructionsFromEmployer
     *
     * Get links to all pay instructions for the specified employee
     *
     * @param string $employerId
     * @return array
     */
    public function getReportingInstructionsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/ReportingInstructions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/ReportLineInstruction/PostReportingInstruction
     *
     * Creates a new reporting instruction object
     *
     * @param string $employerId
     * @param array $reportingInstruction
     * @return array
     */
    public function postReportingInstruction(string $employerId, array $reportingInstruction): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/ReportingInstructions",
            [
                'body' => [
                    'ReportingInstruction' => $reportingInstruction,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/ReportLineInstruction/PutReportingInstruction
     *
     * Updates the existing specified reporting instruction object
     *
     * @param string $employerId
     * @param string $reportingInstructionId
     * @param array $reportingInstruction
     * @return array
     */
    public function putReportingInstruction(string $employerId, string $reportingInstructionId, array $reportingInstruction): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/ReportingInstruction/{$reportingInstructionId}",
            [
                'body' => [
                    'ReportingInstruction' => $reportingInstruction,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/ReportLineInstruction/DeleteReportingInstruction
     *
     * Delete the specified reporting instruction
     *
     * @param string $employerId
     * @param string $reportingInstructionId
     * @return array
     */
    public function deleteReportingInstruction(string $employerId, string $reportingInstructionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/ReportingInstruction/{$reportingInstructionId}"
        );

        return $this->getResponseData($response);
    }
}
