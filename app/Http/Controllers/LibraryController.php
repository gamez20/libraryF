<?php

namespace App\Http\Controllers;

// use App\Service\LibraryService;

use App\Http\Requests\FormLibraryRequest;
use App\Services\LibraryService;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    protected $libraryService;

    public function __construct( LibraryService $libraryService)
    {
        $this->libraryService = $libraryService;
    }


    public function create(FormLibraryRequest $request) {
        try {
            $this->libraryService->createBookLoand($request);
            return redirect()->route('index')->with('create', 'true');
        } catch (\Exception $e) {
            return redirect()->route('index')->with('exeption', $e->getMessage());
        }
    }

    function search_loan(Request $request) {

        try {
            $data= $this->libraryService->getBookLoand($request->id_prestamo);


            return view('detailloan',get_defined_vars());
        } catch (\Exception $e) {
            return redirect()->route('index')->with('exeption', $e->getMessage());
        }
        // return $request;
    }

    function indexConsult() {
        return view('indexConsultLibrary');
    }

}
