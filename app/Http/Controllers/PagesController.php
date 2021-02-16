<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home',['name' => 'Titi']);
    }
    
    public function contact() {
        $tasks = [
            'Aller faire les courses',
            'Aller à la gym',
            'Dormir'
        ];   
        return view('contact', [
            'tasks' => $tasks,
            'name' => 'Titi']);
    }
}
