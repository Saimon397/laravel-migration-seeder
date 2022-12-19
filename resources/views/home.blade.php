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
    <form method="post" action="/filter">
        @csrf
        <label for="date">Data di partenza:</label>
        <input type="date" name="date" value="{{ old('date') }}">
        <button type="submit">Filtra</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Data di partenza</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->data_partenza }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
