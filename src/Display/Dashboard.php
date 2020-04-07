<?php


namespace Rs\RsAdmin\Display;


class Dashboard extends Display implements DisplayInterface
{
    public function __construct()
    {
        parent::__construct();

        $this->params = array_merge($this->params, [
            'type' => 'dashboard',
            'title' => 'Главная'
        ]);
    }
}
