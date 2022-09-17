<?php

namespace App\Http\Livewire\employees;

use Livewire\Component;
use App\Models\Employee;


class Create extends Component
{
    public $name, $address, $contact, $degree, $year, $email;

    public function addEmployee(){
        $this->validate([
            'name'              =>            ['required' ,'string', 'max:255'],
            'address'           =>            ['required' ,'string', 'max:255'],
            'contact'           =>            ['required' ,'string', 'max:255'],
            'degree'    =>            ['required' ,'string', 'max:255'],
            'year'                =>            ['required' ,'numeric','min:1' ,'max:4'],
        ]);

        Employee::create([
            'name'                =>        $this->name,
            'address'             =>        $this->address,
            'contact'             =>        $this->contact,
            'degree'      =>        $this->degree,
            'year'                  =>        $this->year,
        ]);

        return redirect('/index')->with('message', 'Added Successfully!!');
    }

    public function render()
    {
        return view('livewire.employees.create');
    }
}
