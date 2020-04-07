<?php


namespace Rs\RsAdmin\Display;


use Illuminate\View\View;

interface DisplayInterface
{
    /**
     * Возвращает view отображения
     * @return View
     */
    public function view() : View;

    /**
     * Добавляет виджеты к отображению
     * @param array $widgets
     * @return DisplayInterface
     */
    public function setWidgets(array $widgets);

    /**
     * Устанавливает title для страницы
     * @param string $title
     * @return DisplayInterface
     */
    public function setTitle(string $title);
}
