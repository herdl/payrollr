<?php

namespace B3none\PayRun\Groups;

class NominalCodeGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/NominalCode/GetNominalCodeFromEmployer
     *
     * Gets the nominal code
     *
     * @param string $employerId
     * @param string $nominalCodeId
     * @return array
     */
    public function getNominalCodeFromEmployer(string $employerId, string $nominalCodeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/NominalCode/{$nominalCodeId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/NominalCode/GetNominalCodesFromEmployer
     *
     * Gets the nominal code links
     *
     * @param string $employerId
     * @return array
     */
    public function getNominalCodesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/NominalCodes"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/NominalCode/PostNominalCode
     *
     * Inserts a new nominal code
     *
     * @param string $employerId
     * @param array $nominalCode
     * @return array
     */
    public function postNominalCode(string $employerId, array $nominalCode): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/NominalCodes",
            [
                'body' => [
                    'NominalCode' => $nominalCode
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/NominalCode/PutNominalCode
     *
     * Inserts a new nominal code at the specified resource location
     *
     * @param string $employerId
     * @param string $nominalCodeId
     * @param array $nominalCode
     * @return array
     */
    public function putNominalCode(string $employerId, string $nominalCodeId, array $nominalCode): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/NominalCode/{$nominalCodeId}",
            [
                'body' => [
                    'NominalCode' => $nominalCode
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/NominalCode/DeleteNominalCode
     *
     * Deletes the nominal code
     *
     * @param string $employerId
     * @param string $nominalCodeId
     * @return array
     */
    public function deleteNominalCode(string $employerId, string $nominalCodeId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/NominalCode/{$nominalCodeId}"
        );

        return $this->getResponseData($response);
    }
}
