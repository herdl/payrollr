<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

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
     * LinkModel constructor.
     *
     * @param string|null $title
     * @param string|null $href
     * @param string|null $rel
     */
    public function __construct(?string $title = null, ?string $href = null, ?string $rel = null)
    {
        if ($title) {
            $this->title = $title;
        }

        if ($href) {
            $this->href = $href;
        }

        if ($rel) {
            $this->rel = $rel;
        }
    }

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            return [
                '@title' => $this->title,
                '@href' => $this->href,
                '@rel' => $this->rel,
            ];
        } catch (ModelException $modelException) {
            throw $modelException;
        } catch (Exception $exception) {
            ExceptionHelper::handle($this);
        } catch (Error $error) {
            ExceptionHelper::handle($this);
        }
    }
}
