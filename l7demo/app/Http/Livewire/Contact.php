<?php

namespace App\Http\Livewire;

use Livewire\Component;

// 需要資料庫

class Contact extends Component
{



    public $data, $name, $phone, $selected_id;
    public $updateMode = false;

  
    public function render()
    {
        // 需要資料庫
        $this->data = Contact::all();

        return view('livewire.contact');
    }

    // 清空變數
    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    // 儲存到DB
    public function store()
    {
        // 驗證前端資料
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        Contact::create([
            // 創建
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();
    }

    // 編輯
    public function edit($id)
    {
        $record = Contact::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->phone = $record->phone;

        $this->updateMode = true;
    }

    // 更新 
    public function update()
    {
        // 前端驗證
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'phone' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Contact::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
