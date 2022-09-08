<?php

namespace App\Http\Livewire\Applicant;

use App\Models\ApplicantTable;
use Livewire\Component;

class DeleteApplicant extends Component
{

    protected $listeners = ['delete'];

    public $applicant;

    public function deleteConfirm(){
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $this->applicant->id,
            'message' => 'Are you sure?'
        ]);
    }

    public function delete($id)
    {
        $applicant = ApplicantTable::where('id', $id)->first();
        if($applicant != null){
            $applicant->delete();
            // $this->dispatchBrowserEvent('swalSuccess', ['message' => 'Abyip has been deleted!']);
            return redirect()->to('/applicant');
        }
        return redirect()->to('/applicant')->with('error', 'Something went wrong');
    }
    public function render()
    {
        return view('livewire.applicant.delete-applicant');
    }
}
