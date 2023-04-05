<?php

namespace Waterhole\View\Components;

use Illuminate\View\Component;

class ValidationErrors extends Component
{
    public function render()
    {
        return $this->view('waterhole::components.validation-errors');
    }
}
