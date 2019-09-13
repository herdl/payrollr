<?php

namespace Herdl\PayRun\Groups;

class SubContractorGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorFromEmployer
     *
     * Gets the specified sub contractor from employer.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getSubContractorFromEmployer(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorByEffectiveDate
     *
     * Returns the sub contractor's state at the specified effective date.
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $effectiveDate
     * @return array
     */
    public function getSubContractorByEffectiveDate(string $employerId, string $subContractorId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorRevisionByNumber
     *
     * Get the sub contractor revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $revisionNumber
     * @return array
     */
    public function getSubContractorRevisionByNumber(string $employerId, string $subContractorId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorRevisions
     *
     * Gets links to all the sub contractor revisions
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function getSubContractorRevisions(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Revisions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorsFromEmployer
     *
     * Get links to all sub contractors for the specified employer.
     *
     * @param string $employerId
     * @return array
     */
    public function getSubContractorsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractors"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/GetSubContractorsByEffectiveDate
     *
     * Get links to all sub contractors for the employer on specified effective date.
     *
     * @param string $employerId
     * @return array
     */
    public function getSubContractorsByEffectiveDate(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/SubContractors"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/PatchSubContractor
     *
     * Patches the specified sub contractor with the supplied values
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param array $subContractor
     * @return array
     */
    public function patchSubContractor(string $employerId, string $subContractorId, array $subContractor): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}",
            [
                'body' => [
                    'SubContractor' => $subContractor,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/PostSubContractor
     *
     * Create a new sub contractor object
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param array $subContractor
     * @return array
     */
    public function postSubContractor(string $employerId, string $subContractorId, array $subContractor): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}",
            [
                'body' => [
                    'SubContractor' => $subContractor,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/PutSubContractorIntoEmployer
     *
     * Updates the existing specified sub contractor object
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param array $subContractor
     * @return array
     */
    public function putSubContractorIntoEmployer(string $employerId, string $subContractorId, array $subContractor): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}",
            [
                'body' => [
                    'SubContractor' => $subContractor,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/DeleteSubContractor
     *
     * Delete the specified sub contractor
     *
     * @param string $employerId
     * @param string $subContractorId
     * @return array
     */
    public function deleteSubContractor(string $employerId, string $subContractorId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/DeleteSubContractorRevision
     *
     * Deletes the specified sub contractor revision for the matching revision date
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $effectiveDate
     * @return array
     */
    public function deleteSubContractorRevision(string $employerId, string $subContractorId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/SubContractor/DeleteSubContractorRevisionByNumber
     *
     * Deletes the specified sub contractor revision for the matching revision number
     *
     * @param string $employerId
     * @param string $subContractorId
     * @param string $revisionNumber
     * @return array
     */
    public function deleteSubContractorRevisionByNumber(string $employerId, string $subContractorId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/SubContractor/{$subContractorId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }
}
