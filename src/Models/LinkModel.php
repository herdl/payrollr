<?php

namespace B3none\PayRun\Models;

/**
 * https://developer.payrun.io/docs/reference/Link.html
 */
class LinkModel
{
    /**
     * The link title. Normally includes useful information about the linked entity.
     *
     * @var string
     */
    protected $title;

    /**
     * The hypertext reference. Indicates the URL path to the linked entity.
     *
     * @var string
     */
    protected $href;

    /**
     * The relation type. Indicates the data type of the linked entity.
     *
     * @var string
     */
    protected $rel;

    /**
     * @param string $title
     * @return LinkModel
     */
    public function setTitle(string $title): LinkModel
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $href
     * @return LinkModel
     */
    public function setHref(string $href): LinkModel
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $rel
     * @return LinkModel
     */
    public function setRel(string $rel): LinkModel
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }
}
