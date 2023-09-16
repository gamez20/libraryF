<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->

    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">



    <!-- Main CSS-->
    {{-- <link href="css/main.css" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('css/main.css') }}"rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-20 p-b-20 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Crear Prestamo</h2>
                    <form method="POST" action="{{ route('consulta.search') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Id Prestamo</label>
                                    <input class="input--style-4" type="text" name="id_prestamo"
                                        value="{{ old('id_prestamo') }}">
                                </div>
                                @error('id_prestamo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue btn-crear-prestamo"
                                        type="submit">Consultar Prestamo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Main JS-->
    {{-- <script src="js/global.js"></script> --}}
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Función para mostrar la confirmación
    </script>
</body>

</html>
