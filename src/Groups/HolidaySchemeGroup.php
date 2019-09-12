<?php

namespace B3none\PayRun\Groups;

class HolidaySchemeGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemeFromEmployer
     *
     * Gets the specified holiday scheme from employer.
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @return array
     */
    public function getHolidaySchemeFromEmployer(string $employerId, string $holidaySchemeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemeByEffectiveDate
     *
     * Returns the holiday scheme's state at the specified effective date.
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $effectiveDate
     * @return array
     */
    public function getHolidaySchemeByEffectiveDate(string $employerId, string $holidaySchemeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemeRevisionByNumber
     *
     * Get the holiday scheme revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $revisionNumber
     * @return array
     */
    public function getHolidaySchemeRevisionByNumber(string $employerId, string $holidaySchemeId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemeRevisions
     *
     * Gets links to all the holiday scheme revisions
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @return array
     */
    public function getHolidaySchemeRevisions(string $employerId, string $holidaySchemeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Revisions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemesFromEmployer
     *
     * Get links to all holiday schemes for the specified employer.
     *
     * @param string $employerId
     * @return array
     */
    public function getHolidaySchemesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidaySchemes"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/GetHolidaySchemesByEffectiveDate
     *
     * Get links to all holiday schemes for the employer on specified effective date.
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getHolidaySchemesByEffectiveDate(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/HolidaySchemes/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/PatchHolidayScheme
     *
     * Patches the specified holiday scheme with the supplied values
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param array $holidayScheme
     * @return array
     */
    public function patchHolidayScheme(string $employerId, string $holidaySchemeId, array $holidayScheme): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}",
            [
                'body' => [
                    'HolidayScheme' => $holidayScheme,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/PostHolidaySchemeIntoEmployer
     *
     * Create a new holiday scheme object
     *
     * @param string $employerId
     * @param array $holidayScheme
     * @return array
     */
    public function postHolidaySchemeIntoEmployer(string $employerId, array $holidayScheme): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/HolidaySchemes",
            [
                'body' => [
                    'HolidayScheme' => $holidayScheme,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/PutHolidaySchemeIntoEmployer
     *
     * Updates the existing specified holiday scheme object
     *
     * @param string $employerId
     * @param array $holidayScheme
     * @return array
     */
    public function putHolidaySchemeIntoEmployer(string $employerId, array $holidayScheme): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/HolidaySchemes",
            [
                'body' => [
                    'HolidayScheme' => $holidayScheme,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/DeleteHolidayScheme
     *
     * Delete the specified holiday scheme
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @return array
     */
    public function deleteHolidayScheme(string $employerId, string $holidaySchemeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/DeleteHolidaySchemeRevision
     *
     * Deletes the specified holiday scheme revision for the matching revision date
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $effectiveDate
     * @return array
     */
    public function deleteHolidaySchemeRevision(string $employerId, string $holidaySchemeId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/HolidayScheme/DeleteHolidaySchemeRevisionByNumber
     *
     * Deletes the specified holiday scheme revision for the matching revision number
     *
     * @param string $employerId
     * @param string $holidaySchemeId
     * @param string $revisionNumber
     * @return array
     */
    public function deleteHolidaySchemeRevisionByNumber(string $employerId, string $holidaySchemeId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/HolidayScheme/{$holidaySchemeId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }
}
