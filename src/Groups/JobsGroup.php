<?php

namespace B3none\PayRun\Groups;

class JobsGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetBatchJobs
     *
     * Gets all the Batch jobs
     *
     * @return array
     */
    public function getBatchJobs(): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Batch"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetBatchJobInfo
     *
     * Gets all the Batch jobs
     *
     * @param string $jobId
     * @return array
     */
    public function getBatchJobInfo(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Batch/{$jobId}/Info"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetBatchJobProgress
     *
     * Return the Batch job progress
     *
     * @param string $jobId
     * @return array
     */
    public function getBatchJobProgress(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Batch/{$jobId}/Progress"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetBatchJobStatus
     *
     * Return the Batch job status
     *
     * @param string $jobId
     * @return array
     */
    public function getBatchJobStatus(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Batch/{$jobId}/Status"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetCisJobs
     *
     * Gets all the CIS jobs
     *
     * @return array
     */
    public function getCisJobs(): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Cis"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetCisJobInfo
     *
     * Return the CIS job information
     *
     * @param string $jobId
     * @return array
     */
    public function getCisJobInfo(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Cis/Info"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetCisJobProgress
     *
     * Return the CIS job information
     *
     * @param string $jobId
     * @return array
     */
    public function getCisJobProgress(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Cis/Progress"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetCisJobStatus
     *
     * Return the CIS job status
     *
     * @param string $jobId
     * @return array
     */
    public function getCisJobStatus(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Cis/Status"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetDpsJobs
     *
     * Gets all the DPS jobs
     *
     * @return array
     */
    public function getDpsJobs(): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Dps"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetDpsJobInfo
     *
     * Return the DPS job information
     *
     * @param string $jobId
     * @return array
     */
    public function getDpsJobInfo(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Dps/{$jobId}/Info"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetDpsJobProgress
     *
     * Return the DPS job progress
     *
     * @param string $jobId
     * @return array
     */
    public function getDpsJobProgress(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Dps/{$jobId}/Progress"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetDpsJobStatus
     *
     * Return the DPS job status
     *
     * @param string $jobId
     * @return array
     */
    public function getDpsJobStatus(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Dps/{$jobId}/Status"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetPayRunJobs
     *
     * Gets all the pay run jobs
     *
     * @return array
     */
    public function getPayRunJobs(): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/PayRuns"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetPayRunJobInfo
     *
     * Return the payrun job information
     *
     * @param string $jobId
     * @return array
     */
    public function getPayRunJobInfo(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/PayRuns/{$jobId}/Info"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetPayRunJobProgress
     *
     * Return the payrun job progress
     *
     * @param string $jobId
     * @return array
     */
    public function getPayRunJobProgress(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/PayRuns/{$jobId}/Progress"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetPayRunJobStatus
     *
     * Return the payrun job status
     *
     * @param string $jobId
     * @return array
     */
    public function getPayRunJobStatus(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/PayRuns/{$jobId}/Status"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetRtiJobs
     *
     * Gets all the RTI jobs
     *
     * @return array
     */
    public function getRtiJobs(): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Rti"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetRtiJobInfo
     *
     * Return the RTI job information
     *
     * @param string $jobId
     * @return array
     */
    public function getRtiJobInfo(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Rti/{$jobId}/Info"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetRtiJobProgress
     *
     * Return the RTI job progress
     *
     * @param string $jobId
     * @return array
     */
    public function getRtiJobProgress(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Rti/{$jobId}/Progress"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/GetRtiJobStatus
     *
     * Return the RTI job status
     *
     * @param string $jobId
     * @return array
     */
    public function getRtiJobStatus(string $jobId): array
    {
        $response = $this->guzzleClient->get(
            "/Jobs/Rti/{$jobId}/Status"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/PostNewBatchJob
     *
     * Adds a new Batch job to the queue and returns the job info
     *
     * @return array
     */
    public function postNewBatchJob(): array
    {
        $response = $this->guzzleClient->post(
            "/Jobs/Batch"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/PostNewCisJob
     *
     * Adds a new CIS job to the queue and returns the job info
     *
     * @return array
     */
    public function postNewCisJob(): array
    {
        $response = $this->guzzleClient->post(
            "/Jobs/Cis"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/PostNewDpsJob
     *
     * Creates the new DPS job to the queue and returns the job info
     *
     * @return array
     */
    public function postNewDpsJob(): array
    {
        $response = $this->guzzleClient->post(
            "/Jobs/Dps"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/PostNewPayRunJob
     *
     * Creates the new pay run job to the queue and returns the job info
     *
     * @return array
     */
    public function postNewPayRunJob(): array
    {
        $response = $this->guzzleClient->post(
            "/Jobs/PayRuns"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/PostNewRtiJob
     *
     * Creates the new RTI job to the queue and returns the job info
     *
     * @return array
     */
    public function postNewRtiJob(): array
    {
        $response = $this->guzzleClient->post(
            "/Jobs/Rti"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/DeleteBatchJob
     *
     * Deletes the the Batch job
     *
     * @param string $jobId
     * @return array
     */
    public function deleteBatchJob(string $jobId): array
    {
        $response = $this->guzzleClient->delete(
            "/Jobs/Batch/{$jobId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/DeleteCisJob
     *
     * Deletes the the CIS job
     *
     * @param string $jobId
     * @return array
     */
    public function deleteCisJob(string $jobId): array
    {
        $response = $this->guzzleClient->delete(
            "/Jobs/Cis/{$jobId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/DeleteDpsJob
     *
     * Deletes the the DPS job
     *
     * @param string $jobId
     * @return array
     */
    public function deleteDpsJob(string $jobId): array
    {
        $response = $this->guzzleClient->delete(
            "/Jobs/Dps/{$jobId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/DeletePayRunJob
     *
     * Deletes the the PayRun job
     *
     * @param string $jobId
     * @return array
     */
    public function deletePayRunJob(string $jobId): array
    {
        $response = $this->guzzleClient->delete(
            "/Jobs/PayRun/{$jobId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Jobs/DeleteRtiJob
     *
     * Deletes the the RTI job
     *
     * @param string $jobId
     * @return array
     */
    public function deleteRtiJob(string $jobId): array
    {
        $response = $this->guzzleClient->delete(
            "/Jobs/Rti/{$jobId}"
        );

        return $this->getResponseData($response);
    }
}
