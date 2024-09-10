<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Diglactic\Breadcrumbs\Facades\Breadcrumbs;

class PageHeader extends Component
{
    public $trail;

    public function __construct($name)
    {
        // $this->trail = Breadcrumbs::generate($name);  
    }

    public function render()
    {
        return view('components.page-header');
    }
}
