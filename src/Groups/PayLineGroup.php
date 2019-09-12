<?php

namespace B3none\PayRun\Groups;

class PayLineGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/PayLine/GetPayLineFromEmployee
     *
     * Returns the specified pay line from employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payLineId
     * @return array
     */
    public function getPayLineFromEmployee(string $employerId, string $employeeId, string $payLineId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/{$payLineId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayLine/GetPayLineWithTag
     *
     * Gets the pay lines with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getPayLineWithTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayLine/GetPayLinesFromEmployee
     *
     * Get links to all pay lines for the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getPayLinesFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLines"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayLine/GetPayLinesWithTag
     *
     * Gets the pay line with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getPayLinesWithTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLines/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayLine/GetAllPayLineTags
     *
     * Gets all the pay line tags
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getAllPayLineTags(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLines/Tags"
        );

        return $this->getResponseData($response);
    }
}
