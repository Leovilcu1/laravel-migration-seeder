<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                        <div class="card">
                            <div class="card-body">
                                @foreach ($trains as $train)
                                <h1>{{ $train->id }}</h1>
                                <h1>{{ $train->azienda, }}</h1>
                                <ul>
                                    <li><a href="#">Stazione di partenza : {{ $train->stazione_di_partenza, }}</a></li>
                                    <li><a href="#">Stazione di arrivo : {{ $train->stazione_di_arrivo }}</a></li>
                                    <li><a href="#">Orario di partenza : {{ $train->orario_di_partenza }}</a></li>
                                    <li><a href="#">Orario di arrivo : {{ $train->orario_di_arrivo }}</a></li>
                                    <li><a href="#">Codice treno :  {{ $train->codice_treno }}</a></li>
                                    <li><a href="#"> Numero Carozze : {{ $train->numero_carozza }}</a></li>
                                    <li><a href="#"> Ritarda :{{ $train->on_time }}</a></li>
                                    <li><a href="#"> cancellato :{{ $train->cancellato }}</a></li>
                                </ul>




                                @endforeach
                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
