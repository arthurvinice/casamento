<?php

namespace App\Livewire;

use App\Models\People;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CommentForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function sendForm()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        DB::beginTransaction();

        try {

            // verificar se a pessoa ja existe pra adicionar só o comentario dela
            $people = People::where('email', $validatedData['email'])->first();
            if ($people) {
                $people->message = $validatedData['message'];
                $people->save();
            }
            else {
                $people = new People();
                $people->name = $validatedData['name'];
                $people->email = $validatedData['email'];
                $people->message = $validatedData['message'];
                $people->save();
            }

            DB::commit();


            $this->reset(['name', 'email', 'message']);

            session()->flash('success', 'Obrigado por sua mensagem!');

        } catch (Exception $e) {

            DB::rollBack();

            session()->flash('error', 'Erro ao enviar mensagem. Tente novamente.');
        }
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
