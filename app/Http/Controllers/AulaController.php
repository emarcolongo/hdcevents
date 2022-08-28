<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AulaController extends Controller
{
    public function index($id) {
        if ($id == 13) {
            $events = Event::all();
            return view('aulas/aula' . $id,['id'=>$id,'events'=>$events]);
        } else {
            return view('aulas/aula' . $id,['id'=>$id]);
        }
    }
}
