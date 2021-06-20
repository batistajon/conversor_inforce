<?php

namespace App\Http\Controllers;

use App\Models\Conversor;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class ConversorController extends Controller
{
    private $conversor;

    public function __construct(Conversor $conversor)
    {
        $this->conversor = $conversor;
    }

    /**
     * Method converter
     *
     * @param $base $base [explicite description]
     * @param $to $to [explicite description]
     * @param $value $value [explicite description]
     *
     * @return JsonResponse
     */
    public function converter($base, $to, $value = 1): JsonResponse
    {
        try {
            
            $query = $base.'_'.$to;

            $response = Http::get(
                "https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey=".env('API_KEY_COTACAO')
            )[$query];

            $result = $value * $response;

            return response()->json([
                    'cotacao' => $response,
                    'resultado' => $result
                ], 200);

        } catch (\Exception $e) {

            return response()->json([
                    'erro' => 'Algo deu errado. Insira valores válidos para realizar a cotação. Os códigos possíveis são BRL, USD e EUR.',
                    'tipo' => $e->getMessage()
                ], 200);
        } 
    }
}
