<?php

namespace App\Http\Livewire\employees;

use Livewire\Component;
use App\Models\Employee;

class Index extends Component
{
    public function loadEmployee(){
        $employees = Employee::orderBy('name')->get();

        return compact('employees');
    }
    public function render()
    {
        return view('livewire.employees.index', $this->loadEmployee());
    }
}
