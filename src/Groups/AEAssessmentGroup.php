<?php

namespace B3none\PayRun\Groups;

class AEAssessmentGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/AEAssessment/GetAEAssessmentFromEmployee
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

        return $response->getBody()->getContents();
    }

    p
}
