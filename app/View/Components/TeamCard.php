<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamCard extends Component
{
    public $name;
    public $role;
    public $img;
    public $linkedin;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param string $name, $role, $img, $linkedin
     * @return void
     */
    public function __construct($name, $role, $img, $linkedin, $class = '') {
        $this->name = $name;
        $this->role = $role;
        $this->img = $img;
        $this->linkedin = $linkedin;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('components.no.team-card');
    }
}
