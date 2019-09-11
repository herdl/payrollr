<?php

namespace B3none\PayRun\Groups;

class DpsMessageGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/DpsMessage/GetDpsMessageFromEmployer
     *
     * Gets the DPS message
     *
     * @param string $employerId
     * @param string $dpsMessageId
     * @return array
     */
    public function getDpsMessageFromEmployer(string $employerId, string $dpsMessageId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/DpsMessage/{$dpsMessageId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/DpsMessage/GetDpsMessagesFromEmployer
     *
     * Gets the DPS message links
     *
     * @param string $employerId
     * @return array
     */
    public function getDpsMessagesFromEmployer(string $employerId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/DpsMessages"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/DpsMessage/PatchDpsMessage
     *
     * Patches the specified DPS message with the supplied values
     *
     * @param string $employerId
     * @param string $dpsMessageId
     * @return array
     */
    public function patchDpsMessage(string $employerId, string $dpsMessageId): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/DpsMessage/{$dpsMessageId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/DpsMessage/PatchDpsMessage
     *
     * Deletes the DPS message
     *
     * @param string $employerId
     * @param string $dpsMessageId
     * @return array
     */
    public function deleteDpsMessage(string $employerId, string $dpsMessageId): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/DpsMessage/{$dpsMessageId}"
        );

        return $this->getResponseData($response);
    }
}
