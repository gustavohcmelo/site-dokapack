<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobMail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function jobs(){
        return view('jobs');
    }

    public function sendMail(Request $request){

        //Armazenando o curriculo localmente
        if($request->hasFile('curriculo')){

            $upload = $request->curriculo->storeAs('curriculos', $request->curriculo->getClientOriginalName());

            //Redireciona com aviso de falha, caso o upload não seja bem-sucedido
            if(!$upload){
                return redirect()->back()->with(['error' => 'Falha no envio das informações. Tente novamente mais tarde.'], 422);
            }
        }

        $request->merge(['filename' => $request->curriculo->getClientOriginalName()]);

        try {
            //Enviando email
            Mail::to([$request->email])->send(new JobMail($request->all()));
            return redirect()->back()->with(['message' => 'Informações enviadas com sucesso.'], 422);

        } catch (\Exception $e) {
            Log::debug(json_encode($e->getMessage()));
            return redirect()->back()->with(['error' => 'Falha no envio das informações. Tente novamente mais tarde.'], 422);
        }
    }
}
