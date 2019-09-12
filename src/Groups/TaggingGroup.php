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
}
