<?php

namespace B3none\PayRun\Models;

class PayScheduleModel
{
    /**
     * The name of the pay schedule that unique identifies it.
     *
     * @var string
     */
    protected $name;

    /**
     * The desired pay frequency of the pay schedule.
     *
     * Weekly, Monthly, TwoWeekly, FourWeekly, Yearly
     *
     * @var string
     */
    protected $payFrequency;

    /**
     * The optional meta data collection.
     *
     * @var MetaDataModel
     */
    protected $metaData;

    /**
     * @param string $name
     * @return PayScheduleModel
     */
    public function setName(string $name): PayScheduleModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $payFrequency
     * @return PayScheduleModel
     */
    public function setPayFrequency(string $payFrequency): PayScheduleModel
    {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * @param MetaDataModel $metaData
     * @return PayScheduleModel
     */
    public function setMetaData(MetaDataModel $metaData): PayScheduleModel
    {
        $this->metaData = $metaData;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPayFrequency(): string
    {
        return $this->payFrequency;
    }

    /**
     * @return MetaDataModel
     */
    public function getMetaData(): MetaDataModel
    {
        return $this->metaData;
    }
}
