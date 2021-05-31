<?php

namespace App\Http\Livewire;
use App\Models\Reclamation;
use Livewire\Component;

class Reclam extends Component
{

    public $data, $descri,$imgRec, $deteRec;
    public $updateMode = false;
    public function render()
    {
        $this->data = Reclamation::all();
        return view('livewire.reclam');
    }
    private function resetInput(){
        $this->descri='';
        $this->imgRec='';
        $this->dateRec='';
    }
    public function store()
    {
     $this->validate([
            'descri'=>'required',
            '$imgRec'=>'',
            'dateRec'=>'required',
        ]);
           Reclamation::create([
               'description'=>$this->descri,
              'imageRec'=>$this->imgRec,
               'dateReclamation'=>$this->dateRec,
           ]);
           $this->resetInput();
    }
    public function edit($id)
    {
        $record = Reclamation::findOrFail($id);
        $this->selected_id = $id;
        $this->descri= $record->description;
        $this->imgRec = $record->imageRec;
        $this->dateRec=$record->dateReclamation;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'descri' => 'required|min:5',
            'imgRec' => '',
            'dateRec' => 'required',
        ]);
        if ($this->selected_id) {
            $record = Reclamation::find($this->selected_id);
            $record->update([
                'description'=>$this->descri,
               'imageRec'=>$this->imgRec,
               'dateReclamation'=>$this->dateRec,
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Reclamation::where('id', $id);
            $record->delete();
        }
    }
}
