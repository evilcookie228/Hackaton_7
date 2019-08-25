<?php

namespace App\Http\Controllers;
use App\Patent;

//use Illuminate\Http\Request;
use App\Http\Requests\UserPatentRequest;

class UserController extends Controller
{
    public function index()
    {
        return Patent::all();
    }

    public function show(Patent $patent)
    {
      return $patent = Patent::findOrFail($patent);
    }
}
