<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/meta-data.html#meta-data
 */
class MetaDataModel
{
    /**
     * The meta data item array.
     *
     * @var MetaDataItemModel[]
     */
    protected $item;

    /**
     * @param MetaDataItemModel[] $item
     * @return MetaDataModel
     */
    public function setItem(array $item): MetaDataModel
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return MetaDataItemModel[]
     */
    public function getItem(): array
    {
        return $this->item;
    }
}
