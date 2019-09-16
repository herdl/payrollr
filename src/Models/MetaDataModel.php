<?php

namespace Herdl\PayRun\Models;

use Error;
use Exception;
use Herdl\PayRun\Exceptions\ModelException;
use Herdl\PayRun\Helpers\ExceptionHelper;

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

    /**
     * @return array
     * @throws ModelException
     */
    public function format(): array
    {
        try {
            $items = [];

            foreach ($this->item as $item) {
                $items[] = $item->format();
            }

            return [
                'Item' => $items,
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
