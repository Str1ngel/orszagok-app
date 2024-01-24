@extends('layout')

@section('content')
    <div>
        <p class="text-center mt-5">
            @foreach ($menu as $row)
                <a href="/orszagok/{{ $row->id }}" class="btn btn-dark">{{ $row->nev }}</a>
            @endforeach
        </p>
        <h2 class="display-5 text-center">{{ $data->nev }}</h2>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Név</th>
                <th>Főváros</th>
                <th>Népesség</th>
                <th>Terület</th>
                <th>Népsürüség</th>
            </tr>
            @foreach ($result as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nev }}</td>
                    <td>{{ $row->fovaros }}</td>
                    <td>{{ $row->nepesseg }} fő</td>
                    <td>
                        @if ($row->kerulet)
                            kissebb mint 1
                        @else
                            {{ $row->terulet }} km<sup>2</sup>
                        @endif
                    </td>
                    <td>{{ $row->nepsuruseg }} fő/km<sup>2</sup></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
