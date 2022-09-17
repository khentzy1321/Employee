<?php

namespace App\Http\Livewire\Employees;

use Livewire\Component;
use App\Models\Employee;
class Delete extends Component
{
    public $emploId;

    public function getEmployeeProperty(){
        return Employee::select('id','name', 'address', 'contact')
        ->find($this->emploId);

    }
    public function deleteEmployee(){
        $this->employee->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function render()
    {
        return view('livewire.employees.delete');
    }
}
