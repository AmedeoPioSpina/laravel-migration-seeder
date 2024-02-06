@extends('layouts.app')

@section('main-content')
    <h1>
        Today's trains
    </h1>

    <ul>
        @forelse ($trains as $train)
            <h5>
                {{ $train->azienda }}: From {{ $train->stazione_di_partenza }} to {{ $train->stazione_di_arrivo }}
            </h5>
            <p>
                {{ $train->orario_di_partenza }} -> {{ $train->orario_di_arrivo }}
                {{ $train->codice_treno }}, wagons: {{ $train->numero_carrozze }},
                {{ ($train->in_orario) ? 'CANCELLED' : 'ACTIVE' }}
            </p>
        @empty
            <li>
                There are no trains available today.
            </li>
        @endforelse
    </ul>
@endsection