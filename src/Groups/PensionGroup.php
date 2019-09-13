<?php

namespace Herdl\PayRun\Groups;

class PensionGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionFromEmployer
     *
     * Gets the specified pension from employer by pension code.
     *
     * @param string $employerId
     * @param string $pensionId
     * @return array
     */
    public function getPensionFromEmployer(string $employerId, string $pensionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pension/{$pensionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionByEffectiveDate
     *
     * Returns the penion's state at the specified effective date.
     *
     * @param string $employerId
     * @param string $pensionId
     * @param string $effectiveDate
     * @return array
     */
    public function getPensionByEffectiveDate(string $employerId, string $pensionId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pension/{$pensionId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionRevisionByNumber
     *
     * Get the pension revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $pensionId
     * @param string $revisionNumber
     * @return array
     */
    public function getPensionRevisionByNumber(string $employerId, string $pensionId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pension/{$pensionId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionRevisions
     *
     * Returns links to all revisions of the pension
     *
     * @param string $employerId
     * @param string $pensionId
     * @return array
     */
    public function getPensionRevisions(string $employerId, string $pensionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pension/{$pensionId}/Revisions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionsFromEmployer
     *
     * Get links to all pensions for the specified employer.
     *
     * @param string $employerId
     * @return array
     */
    public function getPensionsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pensions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/GetPensionsByEffectiveDate
     *
     * Get links to all pensions for the employer on specified effective date.
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getPensionsByEffectiveDate(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Pensions/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/PatchPension
     *
     * Patches the specified pension with the supplied values
     *
     * @param string $employerId
     * @param string $pensionId
     * @param array $pension
     * @return array
     */
    public function patchPension(string $employerId, string $pensionId, array $pension): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/Pensions/{$pensionId}",
            [
                'body' => [
                    'Pension' => $pension
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/PostPension
     *
     * Create a new pension object
     *
     * @param string $employerId
     * @param string $pensionId
     * @param array $pension
     * @return array
     */
    public function postPension(string $employerId, string $pensionId, array $pension): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/Pensions/{$pensionId}",
            [
                'body' => [
                    'Pension' => $pension
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/PutPension
     *
     * Updates existing or inserts the specified pension object
     *
     * @param string $employerId
     * @param string $pensionId
     * @param array $pension
     * @return array
     */
    public function putPension(string $employerId, string $pensionId, array $pension): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Pensions/{$pensionId}",
            [
                'body' => [
                    'Pension' => $pension
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/DeletePension
     *
     * Delete the specified pension
     *
     * @param string $employerId
     * @param string $pensionId
     * @return array
     */
    public function deletePension(string $employerId, string $pensionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Pensions/{$pensionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/DeletePensionRevision
     *
     * Deletes the specified pension revision for the matching revision date
     *
     * @param string $employerId
     * @param string $pensionId
     * @param string $effectiveDate
     * @return array
     */
    public function deletePensionRevision(string $employerId, string $pensionId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Pensions/{$pensionId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Pension/DeletePensionRevisionByNumber
     *
     * Deletes the specified pension revision for the matching revision number
     *
     * @param string $employerId
     * @param string $pensionId
     * @param string $revisionName
     * @return array
     */
    public function deletePensionRevisionByNumber(string $employerId, string $pensionId, string $revisionName): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Pensions/{$pensionId}/Revision/{$revisionName}"
        );

        return $this->getResponseData($response);
    }
}
