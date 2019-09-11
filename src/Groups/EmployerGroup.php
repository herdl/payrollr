<?php

namespace B3none\PayRun\Groups;

class EmployerGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployer
     *
     * Get the specified employer object
     *
     * @param string $employerId
     * @return array
     */
    public function getEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployerByEffectiveDate
     *
     * Returns the employer's state at the specified effective date.
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployerByEffectiveDate(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployerRevisionByNumber
     *
     * Get the employer revision matching the specified revision number
     *
     * @param string $employerId
     * @param string $revisionNumber
     * @return array
     */
    public function getEmployerRevisionByNumber(string $employerId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployerRevisions
     *
     * Gets links to all the employer revisions
     *
     * @param string $employerId
     * @return array
     */
    public function getEmployerRevisions(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Revisions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployers
     *
     * Gets links to all employers contained under the authorised application scope
     *
     * @return array
     */
    public function getEmployers(): array
    {
        $response = $this->guzzleClient->get(
            "/Employers"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployersByEffectiveDate
     *
     * Gets links to all employers contained under the authorised application scope
     *
     * @param string $effectiveDate
     * @return array
     */
    public function getEmployersByEffectiveDate(string $effectiveDate): array
    {
        $response = $this->guzzleClient->get(
            "/Employers/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/GetEmployersWithTag
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
     * https://developer.payrun.io/explore/#!/Employer/GetAllEmployerTags
     *
     * Gets all the employer tags
     *
     * @param string $tagId
     * @return array
     */
    public function getAllEmployerTags(string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employers/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/PatchEmployer
     *
     * Patches the specified employer with the supplied values
     *
     * @param string $employerId
     * @return array
     */
    public function patchEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->patch(
            "/Employers/{$employerId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/PostEmployer
     *
     * Create a new employer object
     *
     * @param array $employer
     * @return array
     */
    public function postEmployer(array $employer): array
    {
        $response = $this->guzzleClient->post(
            "/Employers",
            [
                'body' => [
                    'Employer' => $employer
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/PutEmployer
     *
     * Updates the existing specified employer object
     *
     * @param array $employer
     * @return array
     */
    public function putEmployer(array $employer): array
    {
        $response = $this->guzzleClient->put(
            "/Employers",
            [
                'body' => [
                    'Employer' => $employer
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/DeleteEmployer
     *
     * Delete the specified employer
     *
     * @param string $employerId
     * @return array
     */
    public function deleteEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/DeleteEmployerRevision
     *
     * Deletes the specified employer revision for the matching revision date
     *
     * @param string $employerId
     * @param string $effectiveDate
     * @return array
     */
    public function deleteEmployerRevision(string $employerId, string $effectiveDate): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/{$effectiveDate}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Employer/DeleteEmployerRevisionByNumber
     *
     * Deletes the specified employer revision for the matching revision number
     *
     * @param string $employerId
     * @param string $revisionNumber
     * @return array
     */
    public function deleteEmployerRevisionByNumber(string $employerId, string $revisionNumber): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Revision/{$revisionNumber}"
        );

        return $this->getResponseData($response);
    }
}
