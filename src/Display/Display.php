<?php


namespace Rs\RsAdmin\Display;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Rs\RsAdmin\Display\Menu\Item;

class Display
{
    protected $params = [];

    public function __construct()
    {
        $menu = include app_path('Admin/navigation.php');

        foreach ($menu as $menu_item)
            if (!$menu_item instanceof Item)
                throw new \Exception('Menu item may instanceof ' . Item::class);

        $this->params = [
            'user' => Auth::guard('admin')->user(),
            'menu' => $menu
        ];
    }

    /**
     * @inheritDoc
     */
    public function view(): View
    {
        return \view('rs-admin::layout', $this->params);
    }

    /**
     * @param array $widgets
     */
    public function setWidgets(array $widgets)
    {
        $this->params['widgets'] = $widgets;
        return $this;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->params['title'] = $title;
        return $this;
    }
}
