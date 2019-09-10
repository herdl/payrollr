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
     * MetaDataItemModel constructor.
     *
     * @param string|null $name
     * @param string|null $text
     */
    public function __construct(?string $name = null, ?string $text = null)
    {
        if ($name) {
            $this->name = $name;
        }

        if ($text) {
            $this->text = $text;
        }
    }

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

    /**
     * @return array
     */
    public function format(): array
    {
        return [
            '@Name' => $this->name,
            '#text' => $this->text,
        ];
    }
}
