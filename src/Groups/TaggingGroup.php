<?php

namespace Herdl\PayRun\Groups;

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

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromHolidaySchemeRevision
     *
     * Gets the tag from the holiday scheme revision
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $tagId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagFromHolidaySchemeRevision(string $employerId, string $holidaySchemeId, string $tagId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tag/{$tagId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromHolidayScheme
     *
     * Gets all the tags from the holiday scheme
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @return array
     */
    public function getTagsFromHolidayScheme(string $employerId, string $holidaySchemeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromHolidaySchemeRevision
     *
     * Gets all the tags from the holiday scheme revision
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagsFromHolidaySchemeRevision(string $employerId, string $holidaySchemeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tags/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetHolidaySchemeWithTag
     *
     * Gets the holiday schemes with the tag
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $tagId
     * @return array
     */
    public function getHolidaySchemeWithTag(string $employerId, string $holidaySchemeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetHolidaySchemesWithTag
     *
     * Gets the holiday scheme with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getHolidaySchemesWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidaySchemes/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllHolidaySchemeTags
     *
     * Gets the holiday scheme with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getAllHolidaySchemeTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidaySchemes/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromPayCode
     *
     * Gets the tag from the pay code
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $tagId
     * @return array
     */
    public function getTagFromPayCode(string $employerId, string $payCodeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromPayCode
     *
     * Gets all the tags from the pay code
     *
     * @param string $employerId
     * @param string $payCodeId
     * @return array
     */
    public function getTagsFromPayCode(string $employerId, string $payCodeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPayCodesWithTag
     *
     * Gets the pay codes with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getPayCodesWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllPayCodeTags
     *
     * Gets all the pay code tags
     *
     * @param string $employerId
     * @return array
     */
    public function getAllPayCodeTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromPayRun
     *
     * Gets the tag from the pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $tagId
     * @return array
     */
    public function getTagFromPayRun(string $employerId, string $payScheduleId, string $payRunId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromPayRun
     *
     * Gets all the tags from the pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @return array
     */
    public function getTagsFromPayRun(string $employerId, string $payScheduleId, string $payRunId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPayRunsWithTag
     *
     * Gets all the tags from the pay run
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
     * https://developer.payrun.io/explore/#!/Tagging/GetAllPayRunTags
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
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromPaySchedule
     *
     * Gets the tag from the pay schedule
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $tagId
     * @return array
     */
    public function getTagFromPaySchedule(string $employerId, string $payScheduleId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromPaySchedule
     *
     * Gets all the tags from the pay schedule
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @return array
     */
    public function getTagsFromPaySchedule(string $employerId, string $payScheduleId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetPaySchedulesWithTag
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
     * https://developer.payrun.io/explore/#!/Tagging/GetAllPayScheduleTags
     *
     * Gets all the pay schedule tags
     *
     * @param string $employerId
     * @return array
     */
    public function getAllPayScheduleTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PaySchedules/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromRtiTransaction
     *
     * Gets the tag from the RTI transaction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @param string $tagId
     * @return array
     */
    public function getTagFromRtiTransaction(string $employerId, string $rtiTransactionId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "GET /Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromRtiTransaction
     *
     * Gets the tag from the RTI transaction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @return array
     */
    public function getTagsFromRtiTransaction(string $employerId, string $rtiTransactionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetRtiTransactionsWithTag
     *
     * Gets the RTI transactions with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getRtiTransactionsWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransactions/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllRtiTransactionTags
     *
     * Gets the RTI transactions with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getAllRtiTransactionTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransactions/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromCisInstruction
     *
     * Gets the tag from the CIS instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @param string $tagId
     * @return array
     */
    public function getTagFromCisInstruction(string $employerId, string $subContractorId, string $cisInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromCisInstruction
     *
     * Gets all the tags from the CIS instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @return array
     */
    public function getTagsFromCisInstruction(string $employerId, string $subContractorId, string $cisInstructionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisInstructionWithTag
     *
     * Gets the CIS instructions with the tag
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function getCisInstructionWithTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisInstructionsWithTag
     *
     * Gets the CIS instruction with the tag
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function getCisInstructionsWithTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstructions/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllCisInstructionTags
     *
     * Gets all the CIS instruction tags
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getAllCisInstructionTags(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstructions/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromCisLine
     *
     * Gets the tag from the CIS line
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @param string $tagId
     * @return array
     */
    public function getTagFromCisLine(string $employerId, string $subContractorId, string $cisLineId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromCisLine
     *
     * Gets all the tags from the CIS line
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @return array
     */
    public function getTagsFromCisLine(string $employerId, string $subContractorId, string $cisLineId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisLineWithTag
     *
     * Gets the CIS line with the tag
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function getCisLineWithTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetCisLinesWithTag
     *
     * Gets the CIS lines with the tag
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function getCisLinesWithTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLines/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllCisLineTags
     *
     * Gets all the CIS line tags
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getAllCisLineTags(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLines/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromSubContractor
     *
     * Gets the tag from the sub contractor
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function getTagFromSubContractor(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromSubContractorRevision
     *
     * Gets the tag from the sub contractor revision
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagFromSubContractorRevision(string $employerId, string $subContractorId, string $tagId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tag/{$tagId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromSubContractor
     *
     * Gets the tag from the sub contractor revision
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getTagsFromSubContractor(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromSubContractorRevision
     *
     * Gets all the tags from the sub contractor revision
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagsFromSubContractorRevision(string $employerId, string $subContractorId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tags/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetSubContractorWithTag
     *
     * Gets all the tags from the sub contractor revision
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getSubContractorWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetSubContractorsWithTag
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getSubContractorsWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractors/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllSubContractorTags
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getAllSubContractorTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractors/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromEmployer
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getTagFromEmployer(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagFromEmployerRevision
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagFromEmployerRevision(string $employerId, string $tagId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Tag/{$tagId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromEmployer
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getTagsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetTagsFromEmployerRevision
     *
     * Gets the sub contractor with the tag
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getTagsFromEmployerRevision(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Tags/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetEmployersWithTag
     *
     * Gets the employers with the tag
     *
     * @param string $tagId
     * @return array
     */
    public function getEmployersWithTag(string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employers/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/GetAllEmployerTags
     *
     * Gets the employers with the tag
     *
     * @return array
     */
    public function getAllEmployerTags(): array
    {
        $response = $this->guzzleClient->get(
            "/Employers/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutCisLineTypeTag
     *
     * Inserts a new tag on the CIS line type
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @param string $tagId
     * @return array
     */
    public function putCisLineTypeTag(string $employerId, string $cisLineTypeId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutPayInstructionTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param string $tagId
     * @return array
     */
    public function putPayInstructionTag(string $employerId, string $employeeId, string $payInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/{$payInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutPayLineTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payLineId
     * @param string $tagId
     * @return array
     */
    public function putPayLineTag(string $employerId, string $employeeId, string $payLineId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/{$payLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutEmployeeTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function putEmployeeTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutHolidaySchemeTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $tagId
     * @return array
     */
    public function putHolidaySchemeTag(string $employerId, string $holidaySchemeId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutPayCodeTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $tagId
     * @return array
     */
    public function putPayCodeTag(string $employerId, string $payCodeId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutPayRunTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $tagId
     * @return array
     */
    public function putPayRunTag(string $employerId, string $payScheduleId, string $payRunId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutPayScheduleTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $tagId
     * @return array
     */
    public function putPayScheduleTag(string $employerId, string $payScheduleId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutRtiTransactionTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @param string $tagId
     * @return array
     */
    public function putRtiTransactionTag(string $employerId, string $rtiTransactionId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutCisInstructionTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function putCisInstructionTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutCisLineTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @param string $tagId
     * @return array
     */
    public function putCisLineTag(string $employerId, string $subContractorId, string $cisLineId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutSubContractorTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function putSubContractorTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/PutEmployerTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function putEmployerTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteCisLineTypeTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @param string $tagId
     * @return array
     */
    public function deleteCisLineTypeTag(string $employerId, string $cisLineTypeId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeletePayInstructionTag
     *
     * Inserts a new tag on the pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param string $tagId
     * @return array
     */
    public function deletePayInstructionTag(string $employerId, string $employeeId, string $payInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/{$payInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeletePayInstructionTag
     *
     * Deletes a tag from the pay line
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payLineId
     * @param string $tagId
     * @return array
     */
    public function deletePayLineTag(string $employerId, string $employeeId, string $payLineId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayLine/{$payLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteEmployeeTag
     *
     * Deletes a tag from the employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function deleteEmployeeTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteHolidaySchemeTag
     *
     * Deletes a tag from the holiday scheme
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $tagId
     * @return array
     */
    public function deleteHolidaySchemeTag(string $employerId, string $holidaySchemeId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeletePayCodeTag
     *
     * Deletes a tag from the pay code
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $tagId
     * @return array
     */
    public function deletePayCodeTag(string $employerId, string $payCodeId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeletePayRunTag
     *
     * Deletes a tag from the pay run
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $tagId
     * @return array
     */
    public function deletePayRunTag(string $employerId, string $payScheduleId, string $payRunId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/PayRun/{$payRunId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeletePayScheduleTag
     *
     * Deletes a tag from the pay schedule
     *
     * @param string $employerId
     * @param string $payScheduleId
     * @param string $payRunId
     * @param string $tagId
     * @return array
     */
    public function deletePayScheduleTag(string $employerId, string $payScheduleId, string $payRunId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PaySchedule/{$payScheduleId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteRtiTransactionTag
     *
     * Deletes a tag from the RTI transaction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @param string $tagId
     * @return array
     */
    public function deleteRtiTransactionTag(string $employerId, string $rtiTransactionId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteCisInstructionTag
     *
     * Deletes a tag from the CIS instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @param string $tagId
     * @return array
     */
    public function deleteCisInstructionTag(string $employerId, string $subContractorId, string $cisInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteCisLineTag
     *
     * Deletes a tag from the CIS line
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @param string $tagId
     * @return array
     */
    public function deleteCisLineTag(string $employerId, string $subContractorId, string $cisLineId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteSubContractorTag
     *
     * Deletes a tag from the sub contractor
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $tagId
     * @return array
     */
    public function deleteSubContractorTag(string $employerId, string $subContractorId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Tagging/DeleteEmployerTag
     *
     * Deletes a tag from the employer
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function deleteEmployerTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/{$tagId}"
        );

        return $this->getResponseData($response);
    }
}
