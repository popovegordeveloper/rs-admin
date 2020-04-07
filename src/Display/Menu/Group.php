<?php


namespace Rs\RsAdmin\Display\Menu;


class Group
{
    public $title;

    public $items = [];

    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    public function setItems(array $items) : self
    {
        foreach ($items as $item) {
            if (!$item instanceof Item)
                throw new \Exception('Menu item may instanceof ' . Item::class);

            $this->items[] = $item;
        }

        return $this;
    }
}
