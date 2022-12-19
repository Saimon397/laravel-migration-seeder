@extends('layout.app')
@section('content')

<main>
<h1 class="mt-5 mb-5 text-danger fw-bold d-flex justify-content-center align-items-center">Trains List:</h1>
<form class="d-flex justify-content-center align-items-center" method="post" action="/filter">
    @csrf
    <label for="date">Data di partenza:</label>
    <input type="date" name="date" value="{{ old('date') }}">
    <button type="submit">Filtra</button>
</form>
<div class="d-flex justify-content-center align-items-center">
<table class="mt-5">
    <thead>
        <tr>
            <th class="fs-2 text-danger">Azienda</th>
            <th class="pe-4 fs-2 text-danger">Stazione di partenza</th>
            <th class="pe-4 fs-2 text-danger">Stazione di arrivo</th>
            <th class="pe-4 fs-2 text-danger">Data di partenza</th>
            <th class="pe-4 fs-2 text-danger">Orario di partenza</th>
            <th class="pe-4 fs-2 text-danger">Orario di arrivo</th>
            <th class="pe-4 fs-2 text-danger">Codice Treno</th>
            <th class="pe-4 fs-2 text-danger">Numero Carrozze</th>
            <th class="pe-4 fs-2 text-danger">In orario</th>
            <th class="fs-2 text-danger">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr class="text-center">
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
</div>
</main>
@endsection