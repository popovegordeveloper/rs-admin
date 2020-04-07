<?php


namespace Rs\RsAdmin\Controllers;


use App\Http\Controllers\Controller;
use Rs\RsAdmin\Display\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return (new Dashboard())->view();
    }
}
