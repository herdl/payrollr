<?php

namespace Herdl\PayRun\Groups;

class PayCodeGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodesFromNominalCode
     *
     * Get the pay codes that share the specified nominal code
     *
     * @param string $employerId
     * @param string $nominalCodeId
     * @return array
     */
    public function getPayCodesFromNominalCode(string $employerId, string $nominalCodeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/NominalCode/{$nominalCodeId}/PayCodes"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodeFromEmployer
     *
     * Returns the specified pay code from the employer
     *
     * @param string $employerId
     * @param string $payCodeId
     * @return array
     */
    public function getPayCodeFromEmployer(string $employerId, string $payCodeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/{$payCodeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodeByEffectiveDate
     *
     * Gets the pay code revision for the specified effective date
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $effectiveDate
     * @return array
     */
    public function getPayCodeByEffectiveDate(string $employerId, string $payCodeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/{$payCodeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodeRevisionByNumber
     *
     * Get the pay code revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $revisionNumber
     * @return array
     */
    public function getPayCodeRevisionByNumber(string $employerId, string $payCodeId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/{$payCodeId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodeRevisions
     *
     * Returns links to all revisions of the pay code
     *
     * @param string $employerId
     * @param string $payCodeId
     * @return array
     */
    public function getPayCodeRevisions(string $employerId, string $payCodeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/{$payCodeId}/Revisions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodesFromEmployer
     *
     * Get links to all the pay codes for the specified employer
     *
     * @param string $employerId
     * @return array
     */
    public function getPayCodesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodesByEffectiveDate
     *
     * Gets the effective pay code revision for the specified date
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getPayCodesByEffectiveDate(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/PayCodes/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/GetPayCodesWithTag
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
     * https://developer.payrun.io/explore/#!/PayCode/GetAllPayCodeTags
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
     * https://developer.payrun.io/explore/#!/PayCode/PatchPayCode
     *
     * Patches the specified pay code object with the supplied values
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param array $payCode
     * @return array
     */
    public function patchPayCode(string $employerId, string $payCodeId, array $payCode): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/PayCode/{$payCodeId}",
            [
                'body' => [
                    'PayCode' => $payCode,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/PostPayCode
     *
     * Create a new pay code object
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param array $payCode
     * @return array
     */
    public function postPayCode(string $employerId, string $payCodeId, array $payCode): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/PayCode/{$payCodeId}",
            [
                'body' => [
                    'PayCode' => $payCode,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/PutPayCode
     *
     * Updates the existing specified pay code object
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param array $payCode
     * @return array
     */
    public function putPayCode(string $employerId, string $payCodeId, array $payCode): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/PayCode/{$payCodeId}",
            [
                'body' => [
                    'PayCode' => $payCode,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/DeletePayCode
     *
     * Delete the specified pay code
     *
     * @param string $employerId
     * @param string $payCodeId
     * @return array
     */
    public function deletePayCode(string $employerId, string $payCodeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PayCode/{$payCodeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/DeletePayCodeRevision
     *
     * Delete the pay code revision for the specified date
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $effectiveDate
     * @return array
     */
    public function deletePayCodeRevision(string $employerId, string $payCodeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayCode/DeletePayCodeRevisionByNumber
     *
     * Delete the pay code revision for the specified date
     *
     * @param string $employerId
     * @param string $payCodeId
     * @param string $revisionNumber
     * @return array
     */
    public function deletePayCodeRevisionByNumber(string $employerId, string $payCodeId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/PayCode/{$payCodeId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }
}
