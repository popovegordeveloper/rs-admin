<?php


namespace Rs\RsAdmin\Display\Menu;


class Item
{
    public $childes = [];
    public $title;
    public $controller;
    public $icon = '';
    public $url = '';
    public $is_group = false;

    public function __construct(string $title, $admin_controller = '')
    {
        $this->title = $title;
        $this->controller = $admin_controller;
    }

    public function setIcon(string $icon) : self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setIsGroup(bool $is_group) :self
    {
        $this->is_group = $is_group;
        return $this;
    }

    public function setChildes(array $childes) : self
    {
        foreach ($childes as $child){
            if (!$child instanceof Item)
                throw new \Exception('Menu item may instanceof ' . Item::class);

            $this->childes[] = $child;
        }

        return $this;
    }
}
