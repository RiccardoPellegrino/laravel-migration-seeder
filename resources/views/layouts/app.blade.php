<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
            <table class="table">
                <thead class="bg-black text-white">
                <tr>
                    <th>#</th>
                    <th>Azienda</th>
                    <th>Stazione di partenza</th>
                    <th>Stazione di arrivo</th>
                    <th>Orario di partenza</th>
                    <th>Orario di arrivo</th>
                    <th>Codice treno</th>
                    <th>Numero di carrozza</th>
                    <th>in Orario</th>
                    <th>Cancellato</th>
                    <th>Data di partenza</th>
                </tr>
            </thead>
        @foreach ($trains as $train)
            <tr>
                    <th>{{$train->id}}</th>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_partenza}}</td>
                    <td>{{$train->stazione_arrivo}}</td>
                    <td>{{$train->orario_partenza}}</td>
                    <td>{{$train->orario_arrivo}}</td>
                    <td>{{$train->codice_treno}}</td>
                    <td>{{$train->numero_carrozza}}</td>
                    <td>{{$train->in_orario}}</td>
                    <td>{{$train->cancellato}}</td>
                    <td>{{$train->data_partenza}}</td>
            </tr>
            @endforeach
        </table>
        
    
    </main>

</body>

</html>