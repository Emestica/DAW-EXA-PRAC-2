<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageName }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Examen Práctico II</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-contenido" aria-controls="navbar-contenido" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar-contenido" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li id="li-1" class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio 
                            @if($pageName == 'Inicio') 
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li id="li-2" class="nav-item">
                        <a class="nav-link" href="{{ url('/clientes') }}">Clientes 
                            @if($pageName == 'Clientes') 
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                    <li id="li-3" class="nav-item">
                        <a class="nav-link" href="{{ url('/articulos') }}">Articulos 
                            @if($pageName == 'Articulos') 
                                <span class="sr-only">(current)</span>
                            @endif    
                        </a>
                    </li>
                    <li id="li-4" class="nav-item">
                        <a class="nav-link" href="{{ url('/pedidos') }}">Pedidos 
                            @if($pageName == 'Pedidos') 
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        var pageName = '{{ $pageName }}';
        switch (pageName) {
            case 'Inicio':
                $('#li-1').addClass('active');
                $('#li-2').removeClass('active');
                $('#li-3').removeClass('active');
                $('#li-4').removeClass('active');
                break;
            case 'Clientes':
                $('#li-2').addClass('active');
                $('#li-1').removeClass('active');
                $('#li-3').removeClass('active');
                $('#li-4').removeClass('active');
                break;
            case 'Articulos':
                $('#li-3').addClass('active');
                $('#li-1').removeClass('active');
                $('#li-2').removeClass('active');
                $('#li-4').removeClass('active');
                break;
            case 'Pedidos':
                $('#li-4').addClass('active');
                $('#li-1').removeClass('active');
                $('#li-2').removeClass('active');
                $('#li-3').removeClass('active');
                break;
            default:
                break;
        }
    </script>
</body>
</html>