<?php

namespace App\Http\Controllers;

use App\Models\Conversor;
use Illuminate\Http\Request;

class ConversorController extends Controller
{
    private $conversor;

    public function __construct(Conversor $conversor)
    {
        $this->conversor = $conversor;
    }

    
}
