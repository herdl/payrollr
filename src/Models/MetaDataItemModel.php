<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/meta-data.html#meta-data-item
 */
class MetaDataItemModel
{
    /**
     * The meta data item name. Must be unique within collection scope.
     *
     * @var string
     */
    protected $name;

    /**
     * The text value of the element.
     *
     * @var string
     */
    protected $text;

    /**
     * @param string $name
     * @return MetaDataItemModel
     */
    public function setName(string $name): MetaDataItemModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $text
     * @return MetaDataItemModel
     */
    public function setText(string $text): MetaDataItemModel
    {
        $this->text = $text;
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
    public function getText(): string
    {
        return $this->text;
    }
}
