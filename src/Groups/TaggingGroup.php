<?php

namespace B3none\PayRun\Groups;

class TaggingGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromCisLineType
     *
     * Gets the tag from the CIS line type
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @param string $tagId
     * @return array
     */
    public function getTagFromCisLineType(string $employerId, string $cisLineTypeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromCisLineType
     *
     * Gets all the tags from the CIS line type
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @return array
     */
    public function getTagsFromCisLineType(string $employerId, string $cisLineTypeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisLineTypeWithTag
     *
     * Gets the CIS line types with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getCisLineTypeWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineType/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisLineTypesWithTag
     *
     * Gets the CIS line type with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getCisLineTypesWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineTypes/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllCisLineTypeTags
     *
     * Gets all the CIS line type tags
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getAllCisLineTypeTags(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineTypes/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromPayInstruction
     *
     * Gets the tag from the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param string $tagId
     * @return array
     */
    public function getTagFromPayInstruction(string $employerId, string $employeeId, string $payInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/{$payInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromPayInstruction
     *
     * Gets all the tags from the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @return array
     */
    public function getTagsFromPayInstruction(string $employerId, string $employeeId, string $payInstructionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/{$payInstructionId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPayInstructionWithTag
     *
     * Gets the pay instructions with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param string $tagId
     * @return array
     */
    public function getPayInstructionWithTag(string $employerId, string $employeeId, string $payInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPayInstructionsWithTag
     *
     * Gets the pay instructions with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param string $tagId
     * @return array
     */
    public function getPayInstructionsWithTag(string $employerId, string $employeeId, string $payInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllPayInstructionTags
     *
     * Gets all the pay instruction tags
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getAllPayInstructionTags(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromPayLine
     *
     * Gets the tag from the pay line
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payLineId
     * @param string $tagId
     * @return array
     */
    public function getTagFromPayLine(string $employerId, string $employeeId, string $payLineId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/{$payLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromPayLine
     *
     * Gets the tag from the pay line
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payLineId
     * @return array
     */
    public function getTagsFromPayLine(string $employerId, string $employeeId, string $payLineId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/{$payLineId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPayLineWithTag
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
     * https://developer.payrun.io/explore/#!/Tagging/GetPayLinesWithTag
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
     * https://developer.payrun.io/explore/#!/Tagging/GetAllPayLineTags
     *
     * Gets all the pay line tags
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getAllPayLineTags(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLines/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromEmployee
     *
     * Gets the tag from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getTagFromEmployee(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromEmployeeRevision
     *
     * Gets the tag from the employee revision
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagFromEmployeeRevision(string $employerId, string $employeeId, string $tagId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tag/{$tagId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromEmployee
     *
     * Gets all the tags from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getTagsFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromEmployeeRevision
     *
     * Gets all the tags from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagsFromEmployeeRevision(string $employerId, string $employeeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tags/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetEmployeesWithTag
     *
     * Gets all the tags from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getEmployeesWithTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllEmployeeTags
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
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromHolidayScheme
     *
     * Gets all the employee tags
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $tagId
     * @return array
     */
    public function getTagFromHolidayScheme(string $employerId, string $holidaySchemeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }
}
