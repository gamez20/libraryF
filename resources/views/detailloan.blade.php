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
                    <h2 class="title">Detalle Prestamo</h2>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">isbn Prestamo</label>
                                    <input class="input--style-4" type="text" id="isbn" name="isbn"
                                        value="{{$data['isbn']}}">
                                </div>
                                @error('isbn')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Identificacion del usuario</label>
                                    <input class="input--style-4" type="text" id="identificacionUsuario"
                                        name="identificacionUsuario" value="{{ $data['userIdentification'] }}">
                                </div>
                                @error('identificacionUsuario')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tipo de Usuario</label>
                                    <input class="input--style-4" type="text" id="tipoUsuario" name="tipoUsuario"
                                        value="{{ $data['userType'] }}">
                                </div>
                                @error('tipoUsuario')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>



                  
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

    @if (session('create') == 'true')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Prestamo Creado Correctamente',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('exeption'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{session('exeption')}}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
</body>

</html>
