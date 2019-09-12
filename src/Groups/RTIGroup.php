<?php

namespace B3none\PayRun\Groups;

class RTIGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/RTI/GetRtiTransactionFromEmployer
     *
     * Returns the specified RTI transaction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @return array
     */
    public function getRtiTransactionFromEmployer(string $employerId, string $rtiTransactionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/RTI/GetRtiTransactionsFromEmployer
     *
     * Get links for all RTI transactions for the specified employer
     *
     * @param string $employerId
     * @return array
     */
    public function getRtiTransactionsFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransactions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/RTI/GetRtiTransactionsWithTag
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
     * https://developer.payrun.io/explore/#!/RTI/GetAllRtiTransactionTags
     *
     * Gets all the RTI transaction tags
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
     * https://developer.payrun.io/explore/#!/RTI/DeleteRtiTransaction
     *
     * Deletes the specified RTI transaction
     *
     * @param string $employerId
     * @param string $rtiTransactionId
     * @return array
     */
    public function deleteRtiTransaction(string $employerId, string $rtiTransactionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/RtiTransaction/{$rtiTransactionId}"
        );

        return $this->getResponseData($response);
    }
}
