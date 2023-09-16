<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class LibraryService{

    protected $baseUrl;
    public function __construct()
    {
        $this->baseUrl = env('LIBRARY_API_URL');
    }

    public function createBookLoand($data){

        $response = Http::post("http://localhost:8080/library/prestamo",[
            "isbn" => intval($data->isbn),
            "userIdentification" => intval($data->identificacionUsuario),
            "userType" => $data->tipoUsuario
        ]);
        
        if($response->successful()){
            return $response->json();

        }elseif ($response->failed()) {

            $errorResponse = $response->json();
            $errorMessage = $errorResponse['message'] ?? 'Error desconocido al consultar la API';
            
            throw new \Exception($errorMessage, $response->status());
        } else {
            throw new \Exception('Error al consultar la API ');
        }

    }

    public function getAllBookLoans(){
        
    }

    public function getBookLoand($id){
        $response = Http::get("http://localhost:8080/library/prestamo/".$id);

        if($response->successful()){
            return $response->json();

        }elseif ($response->failed()) {

            $errorResponse = $response->json();
            $errorMessage = $errorResponse['message'] ?? 'Error desconocido al consultar la API';
            
            throw new \Exception($errorMessage, $response->status());
        } else {
            throw new \Exception('Error al consultar la API');
        }
    }

}