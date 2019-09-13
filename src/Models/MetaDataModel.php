<?php

namespace Herdl\PayRun\Models;

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

    public function __construct(?array $item = null)
    {
        if ($item) {
            $this->item = $item;
        }
    }

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

    public function format(): array
    {
        $items = [];

        foreach ($this->item as $item) {
            $items[] = $item->format();
        }

        return [
            'Item' => $items,
        ];
    }
}
