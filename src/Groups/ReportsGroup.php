<?php

namespace B3none\PayRun\Groups;

class ReportsGroup extends BaseGroup
{
    /**
     * https://developer.payrun.io/explore/#!/Reports/GetReportDefinitionFromApplication
     *
     * Returns the specified report definition from the authorised application
     *
     * @param string $reportDefinitionId
     * @return array
     */
    public function getReportDefinitionFromApplication(string $reportDefinitionId): array
    {
        $response = $this->guzzleClient->get(
            "/Report/{$reportDefinitionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetReportOutput
     *
     * Returns the result of the executed report definition
     *
     * @param string $reportDefinitionId
     * @return array
     */
    public function getReportOutput(string $reportDefinitionId): array
    {
        $response = $this->guzzleClient->get(
            "/Report/{$reportDefinitionId}/run"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetActivePayInstructionsReportOutput
     *
     * Returns the result of the executed active pay instructions report for the given query parameters
     *
     * @param string $employerKey
     * @param string $employeeKey
     * @param string $fromDate
     * @param string|null $activeOn
     * @param string|null $toDate
     * @param string|null $type
     * @return array
     */
    public function getActivePayInstructionsReportOutput(
        string $employerKey,
        string $employeeKey,
        string $fromDate,
        ?string $activeOn = null,
        ?string $toDate = null,
        ?string $type = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/ACTPAYINS/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'EmployeeKey' => $employeeKey,
                    'ActiveOn' => $activeOn,
                    'FromDate' => $fromDate,
                    'ToDate' => $toDate,
                    'Type' => $type
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetAoeLiabilityReportOuput
     *
     * Returns the result of the executed AOE liability report for the given query parameters
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string|null $taxPeriod
     * @param string|null $transformDefinitionKey
     * @return array
     */
    public function getAoeLiabilityReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        ?string $taxPeriod = null,
        ?string $transformDefinitionKey = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/AOELIABILITY/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'TaxPeriod' => $taxPeriod,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetDpsMessageReportOutput
     *
     * Returns the result of the executed DPS message report for the given query parameters
     *
     * @param string $employerKey
     * @param string $fromDate
     * @param string|null $toDate
     * @param string|null $messageTypes
     * @param string|null $messageStatuses
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getDpsMessageReportOutput(
        string $employerKey,
        string $fromDate,
        ?string $toDate = null,
        ?string $messageTypes = null,
        ?string $messageStatuses = null,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/DPSMSG/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'FromDate' => $fromDate,
                    'ToDate' => $toDate,
                    'MessageTypes' => $messageTypes,
                    'MessageStatuses' => $messageStatuses,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ]
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetGrossToNetReportOutput
     *
     * Returns the result of the executed gross to net report for the given query parameters
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string|null $taxPeriod
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getGrossToNetReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        ?string $taxPeriod = null,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/GRO2NET/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'TaxPeriod' => $taxPeriod,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetHolidayBalanceReportOuput
     *
     * Returns the result of the executed holiday balance report for the given query parameters
     *
     * @param string $employerKey
     * @param string $holidayYearEnd
     * @param string|null $employeeCodes
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getHolidayBalanceReportOutput(
        string $employerKey,
        string $holidayYearEnd,
        ?string $employeeCodes = null,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/HOLBAL/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $holidayYearEnd,
                    'TaxYear' => $employeeCodes,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetLastPayDateReportOuput
     *
     * Returns the result of the executed last pay date report for the given query parameters
     *
     * @param string $employerKey
     * @param string|null $optEmployeeKey
     * @return array
     */
    public function getLastPayDateReportOutput(
        string $employerKey,
        ?string $optEmployeeKey = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/LASTPAYDATE/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'OptEmployeeKey' => $optEmployeeKey,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetNetPayReportOutput
     *
     * Returns the result of the executed net pay report for the given query parameters
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string|null $taxPeriod
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getNetPayReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        ?string $taxPeriod = null,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/NETPAY/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'TaxPeriod' => $taxPeriod,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetNextPayPeriodDatesReportOutput
     *
     * Returns the result of the executed next pay period report for the given query parameters
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @return array
     */
    public function getNextPayPeriodDatesReportOutput(
        string $employerKey,
        string $payScheduleKey
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/NEXTPERIOD/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetP11SummaryReportOutput
     *
     * Returns the result of the executed P11 summary report for the given query parameters
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getP11SummaryReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/P11SUM/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetP32NetReportOutput
     *
     * Returns the result of the executed P11 summary report for the given query parameters
     *
     * @param string $employerKey
     * @param string $taxYear
     * @return array
     */
    public function getP32NetReportOutput(
        string $employerKey,
        string $taxYear
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/P32/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'TaxYear' => $taxYear,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetP32SummaryNetReportOutput
     *
     * Returns the result of the executed P11 summary report for the given query parameters
     *
     * @param string $employerKey
     * @param string $taxYear
     * @return array
     */
    public function getP32SummaryNetReportOutput(
        string $employerKey,
        string $taxYear
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/P32SUM/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'TaxYear' => $taxYear,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetP45ReportOutput
     *
     * Returns the result of the executed P45 report for the given query parameters
     *
     * @param string $employerKey
     * @param string $employeeKey
     * @param string|null $transformDefinitionKey
     * @return array
     */
    public function getP45ReportOutput(
        string $employerKey,
        string $employeeKey,
        ?string $transformDefinitionKey = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/P45/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'EmployeeKey' => $employeeKey,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetP60ReportOutput
     *
     * Returns the result of the executed P60 report for the given query parameters
     *
     * @param string $employerKey
     * @param string $taxYear
     * @param string|null $employeeCodes
     * @param string|null $transformDefinitionKey
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @return array
     */
    public function getP60ReportOutput(
        string $employerKey,
        string $taxYear,
        ?string $employeeCodes = null,
        ?string $transformDefinitionKey = null,
        ?string $startIndex = null,
        ?string $maxIndex = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/P60/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'TaxYear' => $taxYear,
                    'EmployeeCodes' => $employeeCodes,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetPapdisReportOuput
     *
     * Returns the result of the executed PAPDIS report. PAPDIS is a free and open data interface standard designed to allow payroll and middleware software developers to create a file that can be used by pension providers to exchange data. http://www.papdis.org
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string $pensionKey
     * @param string $messageFunctionCode
     * @param string|null $paymentDate
     * @param string|null $transformDefinitionKey
     * @return array
     */
    public function getPapdisReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        string $pensionKey,
        string $messageFunctionCode,
        ?string $paymentDate = null,
        ?string $transformDefinitionKey = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/PAPDIS/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'PensionKey' => $pensionKey,
                    'MessageFunctionCode' => $messageFunctionCode,
                    'PaymentDate' => $paymentDate,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetPassReportOuput
     *
     * Returns the result of the executed PASS report. PASS stands for Payroll and Systemsync. PASS 1.1 is an extension of the PAPDIS V1.1 schema. https://pensionsynckb.systemsyncsolutions.com/display/PKB/PASS+1.1
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string $pensionKey
     * @param string $messageFunctionCode
     * @param string $intermediaryId
     * @param string $documentId
     * @param string|null $paymentDate
     * @return array
     */
    public function getPassReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        string $pensionKey,
        string $messageFunctionCode,
        string $intermediaryId,
        string $documentId,
        ?string $paymentDate = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/PASS/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'PensionKey' => $pensionKey,
                    'MessageFunctionCode' => $messageFunctionCode,
                    'PaymentDate' => $paymentDate,
                    'IntermediaryId' => $intermediaryId,
                    'DocumentId' => $documentId,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetPayDashboardPayslipReportOuput
     *
     * Returns the result of the executed Pay Dashboard payslip report for the given query parameters. See https://api.paydashboard.com for details. For compatability should be returned as JSON with TransformDefinitionKey=Json-Clean.
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string $publicationDate
     * @param string|null $employeeCodes
     * @param string|null $transformDefinitionKey
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @param string|null $paymentDate
     * @return array
     */
    public function getPayDashboardPayslipReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        string $publicationDate,
        ?string $employeeCodes = null,
        ?string $transformDefinitionKey = null,
        ?string $startIndex = null,
        ?string $maxIndex = null,
        ?string $paymentDate = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/PAYDASHBOARD/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'PublicationDate' => $publicationDate,
                    'EmployeeCodes' => $employeeCodes,
                    'PaymentDate' => $paymentDate,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetPayslip3ReportOutput
     *
     * Returns the result of the executed Pay Dashboard payslip report for the given query parameters. See https://api.paydashboard.com for details. For compatability should be returned as JSON with TransformDefinitionKey=Json-Clean.
     *
     * @param string $employerKey
     * @param string $payScheduleKey
     * @param string $taxYear
     * @param string|null $employeeCodes
     * @param string|null $transformDefinitionKey
     * @param string|null $startIndex
     * @param string|null $maxIndex
     * @param string|null $paymentDate
     * @return array
     */
    public function getPayslip3ReportOutput(
        string $employerKey,
        string $payScheduleKey,
        string $taxYear,
        ?string $employeeCodes = null,
        ?string $transformDefinitionKey = null,
        ?string $startIndex = null,
        ?string $maxIndex = null,
        ?string $paymentDate = null
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/PAYSLIP3/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'PayScheduleKey' => $payScheduleKey,
                    'TaxYear' => $taxYear,
                    'EmployeeCodes' => $employeeCodes,
                    'PaymentDate' => $paymentDate,
                    'TransformDefinitionKey' => $transformDefinitionKey,
                    'StartIndex' => $startIndex,
                    'MaxIndex' => $maxIndex,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetPensionLiabilityReportOutput
     *
     * Returns the result of the executed pension liability report for the given query parameters
     *
     * @param string $employerKey
     * @param string $taxYear
     * @param string $pensionKey
     * @return array
     */
    public function getPensionLiabilityReportOutput(
        string $employerKey,
        string $taxYear,
        string $pensionKey
    ): array {
        $response = $this->guzzleClient->get(
            "/Report/PAYSLIP3/run",
            [
                'query' => [
                    'EmployerKey' => $employerKey,
                    'TaxYear' => $taxYear,
                    'PensionKey' => $pensionKey,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetReportDefinitionsFromApplication
     *
     * Get links to all saved report definitions under authorised application
     *
     * @return array
     */
    public function getReportDefinitionsFromApplication(): array
    {
        $response = $this->guzzleClient->get(
            "/Reports"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetTransformDefinitionFromApplication
     *
     * Returns the specified transform definition from the authorised application
     *
     * @param string $transformDefinitionId
     * @return array
     */
    public function getTransformDefinitionFromApplication(string $transformDefinitionId): array
    {
        $response = $this->guzzleClient->get(
            "/Transform/{$transformDefinitionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/GetTransformDefinitionsFromApplication
     *
     * Get links to all saved transform definitions under authorised application
     *
     * @return array
     */
    public function getTransformDefinitionsFromApplication(): array
    {
        $response = $this->guzzleClient->get(
            "/Transforms"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/PostReportDefinition
     *
     * Creates a new report definition object
     *
     * @param array $reportDefinition
     * @return array
     */
    public function postReportDefinition(array $reportDefinition): array
    {
        $response = $this->guzzleClient->post(
            "/Reports",
            [
                'body' => [
                    'ReportDefinition' => $reportDefinition,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/PostTransformDefinition
     *
     * Creates a new transform definition object
     *
     * @param array $transformDefinition
     * @return array
     */
    public function postTransformDefinition(array $transformDefinition): array
    {
        $response = $this->guzzleClient->post(
            "/Transforms",
            [
                'body' => [
                    'TransformDefinition' => $transformDefinition,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/PutReportDefinition
     *
     * Updates the existing specified report definition object
     *
     * @param string $reportDefinitionId
     * @param array $reportDefinition
     * @return array
     */
    public function putReportDefinition(string $reportDefinitionId, array $reportDefinition): array
    {
        $response = $this->guzzleClient->put(
            "/Report/{$reportDefinitionId}",
            [
                'body' => [
                    'ReportDefinition' => $reportDefinition,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/PutTransformDefinition
     *
     * Updates the existing specified transform definition object
     *
     * @param string $transformDefinitionId
     * @param array $transformDefinition
     * @return array
     */
    public function putTransformDefinition(string $transformDefinitionId, array $transformDefinition): array
    {
        $response = $this->guzzleClient->put(
            "/Transform/{$transformDefinitionId}",
            [
                'body' => [
                    'TransformDefinition' => $transformDefinition,
                ],
            ]
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/DeleteReportDefinition
     *
     * Delete the specified report definition
     *
     * @param string $reportDefinitionId
     * @return array
     */
    public function deleteReportDefinition(string $reportDefinitionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Report/{$reportDefinitionId}"
        );

        return $this->getResponseData($response);
    }

    /**
     * https://developer.payrun.io/explore/#!/Reports/DeleteTransformDefinition
     *
     * Delete the specified transform definition
     *
     * @param string $transformDefinitionId
     * @return array
     */
    public function deleteTransformDefinition(string $transformDefinitionId): array
    {
        $response = $this->guzzleClient->delete(
            "/Transform/{$transformDefinitionId}"
        );

        return $this->getResponseData($response);
    }
}
