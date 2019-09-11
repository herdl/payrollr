<?php

namespace B3none\PayRun\Groups;

class CISGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineTypeFromEmployer
     *
     * Gets the specified CIS line type from employer.
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @return array
     */
    public function getCisLineTypeFromEmployer(string $employerId, string $cisLineTypeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromCisLineType
     *
     * Gets the tag from the CIS line type.
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromCisLineType
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineTypeWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineTypesFromEmployer
     *
     * Gets the CIS line types with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getCisLineTypesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineTypes"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineTypesWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/GetAllCisLineTypeTags
     *
     * Gets the CIS line type with the tag
     *
     * @param string $employerId
     * @return array
     */
    public function getAllCisLineTypeTags(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisLineTypes/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisTransactionFromEmployer
     *
     * Returns the specified CIS transaction
     *
     * @param string $employerId
     * @param string $cisTransactionId
     * @return array
     */
    public function getCisTransactionFromEmployer(string $employerId, string $cisTransactionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisTransaction/{$cisTransactionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisTransactionsFromEmployer
     *
     * Get links for all CIS transactions for the specified employer
     *
     * @param string $employerId
     * @return array
     */
    public function getCisTransactionsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/CisTransactions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromHolidayScheme
     *
     * Gets the tag from the holiday scheme
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromHolidaySchemeRevision
     *
     * Gets the tag from the holiday scheme
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromHolidayScheme
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromHolidaySchemeRevision
     *
     * Gets all the tags from the holiday scheme
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
     * https://developer.payrun.io/explore/#!/CIS/GetHolidaySchemeWithTag
     *
     * Gets the holiday schemes with the tag
     *
     * @param string $employerId
     * @param string $tagId
     * @return array
     */
    public function getHolidaySchemeWithTag(string $employerId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetHolidaySchemesWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/getAllHolidaySchemeTags
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisInstructionFromSubContractor
     *
     * Gets the specified CIS instruction from sub contractor.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @return array
     */
    public function getCisInstructionFromSubContractor(string $employerId, string $subContractorId, string $cisInstructionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromCisInstruction
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromCisInstruction
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisInstructionWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisInstructionsFromSubContractor
     *
     * Get links to all CIS instructions for the specified sub contractor.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getCisInstructionsFromSubContractor(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstructions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisInstructionsWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/GetAllCisInstructionTags
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineFromSubContractor
     *
     * Gets the specified CIS line from sub contractor.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @return array
     */
    public function getCisLineFromSubContractor(string $employerId, string $subContractorId, string $cisLineId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromCisLine
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromCisLine
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisLineWithTag
     *
     * Gets all the tags from the CIS line
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
     * https://developer.payrun.io/explore/#!/CIS/GetCisLinesFromSubContractor
     *
     * Get links to all CIS lines for the specified sub contractor.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getCisLinesFromSubContractor(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLines"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/GetCisLinesWithTag
     *
     * Gets the CIS line with the tag
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
     * https://developer.payrun.io/explore/#!/CIS/GetAllCisLineTags
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromSubContractor
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagFromSubContractorRevision
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromSubContractor
     *
     * Gets all the tags from the sub contractor
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
     * https://developer.payrun.io/explore/#!/CIS/GetTagsFromSubContractorRevision
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
     * https://developer.payrun.io/explore/#!/CIS/GetSubContractorWithTag
     *
     * Gets the sub contractors with the tag
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
     * https://developer.payrun.io/explore/#!/CIS/GetSubContractorsWithTag
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
     * https://developer.payrun.io/explore/#!/CIS/GetAllSubContractorTags
     *
     * Gets all the sub contractor tags
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
     * https://developer.payrun.io/explore/#!/CIS/PatchCisInstruction
     *
     * Update an existing CIS instruction object
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @return array
     */
    public function patchCisInstruction(string $employerId, string $subContractorId, string $cisInstructionId): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PostCisLineTypeIntoEmployer
     *
     * Create a new CIS line type object
     *
     * @param string $employerId
     * @param array $cisLineType
     * @return array
     */
    public function postCisLineTypeIntoEmployer(string $employerId, array $cisLineType): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/CisLineTypes",
            [
                'body' => [
                    'CisLineType' => $cisLineType
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PostCisInstructionIntoSubContractor
     *
     * Create a new CIS instruction object
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param array $cisInstruction
     * @return array
     */
    public function postCisInstructionIntoSubContractor(string $employerId, string $subContractorId, array $cisInstruction): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstructions",
            [
                'body' => [
                    'CisInstruction' => $cisInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PutCisLineTypeIntoEmployer
     *
     * Updates the existing specified CIS line type object
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @param array $cisLineType
     * @return array
     */
    public function putCisLineTypeIntoEmployer(string $employerId, string $cisLineTypeId, array $cisLineType): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}",
            [
                'body' => [
                    'CisLineType' => $cisLineType
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PutCisLineTypeTag
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
     * https://developer.payrun.io/explore/#!/CIS/PutHolidaySchemeTag
     *
     * Inserts a new tag on the holiday scheme
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
     * https://developer.payrun.io/explore/#!/CIS/PutCisInstructionIntoSubContractor
     *
     * Insert or update existing CIS instruction object
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @param array $cisInstruction
     * @return array
     */
    public function putCisInstructionIntoSubContractor(string $employerId, string $subContractorId, string $cisInstructionId, array $cisInstruction): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}",
            [
                'body' => [
                    'CisInstruction' => $cisInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PutCisInstructionTag
     *
     * Inserts a new tag on the CIS instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @param string $tagId
     * @return array
     */
    public function putCisInstructionTag(string $employerId, string $subContractorId, string $cisInstructionId, string $tagId): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/PutCisLineTag
     *
     * Inserts a new tag on the CIS line
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
     * https://developer.payrun.io/explore/#!/CIS/PutSubContractorTag
     *
     * Inserts a new tag on the sub contractor
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
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisLineType
     *
     * Delete the specified CIS line type
     *
     * @param string $employerId
     * @param string $cisLineTypeId
     * @return array
     */
    public function deleteCisLineType(string $employerId, string $cisLineTypeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/CisLineType/{$cisLineTypeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisLineTypeTag
     *
     * Deletes a tag from the CIS line type
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
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisTransaction
     *
     * Deletes the specified CIS transaction
     *
     * @param string $employerId
     * @param string $cisTransactionId
     * @return array
     */
    public function deleteCisTransaction(string $employerId, string $cisTransactionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/CisTransaction/{$cisTransactionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/DeleteHolidaySchemeTag
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
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisInstruction
     *
     * Delete the specified CIS instruction
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisInstructionId
     * @return array
     */
    public function deleteCisInstruction(string $employerId, string $subContractorId, string $cisInstructionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisInstruction/{$cisInstructionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisInstructionTag
     *
     * Delete the specified CIS instruction
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
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisLine
     *
     * Delete the specified CIS line
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $cisLineId
     * @return array
     */
    public function deleteCisLine(string $employerId, string $subContractorId, string $cisLineId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/CisLine/{$cisLineId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/CIS/DeleteCisLineTag
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
     * https://developer.payrun.io/explore/#!/CIS/DeleteSubContractorTag
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
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }
}
