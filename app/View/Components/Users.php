<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Users extends Component
{
    public $users;
    public $me;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->users = User::all();
        $this->me = auth()->user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.users');
    }
}
