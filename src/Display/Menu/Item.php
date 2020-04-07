<?php


namespace Rs\RsAdmin\Display\Menu;


class Item
{
    public $childes;
    public $title;
    public $controller;
    public $icon;

    public function __construct(string $title, $admin_controller = '')
    {
        $this->title = $title;
        $this->controller = $admin_controller;
    }

    public function setIcon(string $icon)
    {
        $this->icon = $icon;
    }

    public function setChildes(array $childes)
    {
        foreach ($childes as $child){
            if (!$child instanceof Item)
                throw new \Exception('Menu item may instanceof ' . Item::class);

            $this->childes[] = $child;
        }
    }
}
