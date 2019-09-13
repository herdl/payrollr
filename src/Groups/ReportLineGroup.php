<?php

namespace Herdl\PayRun\Groups;

class ReportLineGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/ReportLine/GetReportLinesFromPayRun
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
     * https://developer.payrun.io/explore/#!/ReportLine/GetReportLineFromEmployer
     *
     * Returns the specified pay line from employee
     *
     * @param string $employerId
     * @param string $reportLineId
     * @return array
     */
    public function getReportLineFromEmployer(string $employerId, string $reportLineId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/ReportLine/{$reportLineId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/ReportLine/GetReportLinesFromEmployer
     *
     * Get links to all report lines for the specified employee
     *
     * @param string $employerId
     * @return array
     */
    public function getReportLinesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/ReportLines"
        );

        return $this->getResponseData($response);
    }
}
