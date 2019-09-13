<?php

namespace Herdl\PayRun\Groups;

class PayInstructionGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/GetPayInstructionFromEmployee
     *
     * Returns the specified pay instruction from employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @return array
     */
    public function getPayInstructionFromEmployee(string $employerId, string $employeeId, string $payInstructionId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/{$payInstructionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/GetPayInstructionWithTag
     *
     * Gets the pay instructions with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getPayInstructionWithTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstruction/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/GetPayInstructionsFromEmployee
     *
     * Get links to all pay instructions for the specified employee
     *
     * @param string $employerId
     * @param string $employeeId
     * @return array
     */
    public function getPayInstructionsFromEmployee(string $employerId, string $employeeId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/GetPayInstructionsWithTag
     *
     * Gets the pay instructions with the tag
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getPayInstructionsWithTag(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/Tag/{$tagId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/GetAllPayInstructionTags
     *
     * Gets all the pay instruction tags
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $tagId
     * @return array
     */
    public function getAllPayInstructionTags(string $employerId, string $employeeId, string $tagId): array
    {
        $response = $this->guzzleClient->get(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/Tags"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/PatchPayInstruction
     *
     * Patches the specified pay instruction with the supplied values
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param array $payInstruction
     * @return array
     */
    public function patchPayInstruction(string $employerId, string $employeeId, string $payInstructionId, array $payInstruction): array
    {
        $response = $this->guzzleClient->patch(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/{$payInstructionId}",
            [
                'body' => [
                    'PayInstruction' => $payInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/PostPayInstruction
     *
     * Creates a new pay instruction object
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param array $payInstruction
     * @return array
     */
    public function postPayInstruction(string $employerId, string $employeeId, string $payInstructionId, array $payInstruction): array
    {
        $response = $this->guzzleClient->post(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/{$payInstructionId}",
            [
                'body' => [
                    'PayInstruction' => $payInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/PutPayInstruction
     *
     * Updates the existing specified pay instruction object
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param array $payInstruction
     * @return array
     */
    public function putPayInstruction(string $employerId, string $employeeId, string $payInstructionId, array $payInstruction): array
    {
        $response = $this->guzzleClient->put(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/{$payInstructionId}",
            [
                'body' => [
                    'PayInstruction' => $payInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/PayInstruction/DeletePayInstruction
     *
     * Delete the specified pay instruction
     *
     * @param string $employerId
     * @param string $employeeId
     * @param string $payInstructionId
     * @param array $payInstruction
     * @return array
     */
    public function deletePayInstruction(string $employerId, string $employeeId, string $payInstructionId, array $payInstruction): array
    {
        $response = $this->guzzleClient->delete(
            "/Employer/{$employerId}/Employee/{$employeeId}/PayInstructions/{$payInstructionId}",
            [
                'body' => [
                    'PayInstruction' => $payInstruction
                ]
            ]
        );

        return $this->getResponseData($response);
    }
}
