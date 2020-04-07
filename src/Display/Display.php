<?php


namespace Rs\RsAdmin\Display;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Display
{
    protected $params = [];

    public function __construct()
    {
        $this->params = [
            'user' => Auth::guard('admin')->user()
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
