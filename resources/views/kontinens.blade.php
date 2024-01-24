@extends('layout')

@section('content')
    <div>
        <p class="text-center mt-5">
            @foreach ($menu as $row)
                @if ($row->id == $id)
                    <span class="btn btn-dark">{{ $row->nev }}</span>
                    @continue
                @endif
                <a href="/kontinens/{{ $row->id }}" class="btn btn-dark">{{ $row->nev }}</a>
            @endforeach
        </p>
        <h2 class="display-5 text-center">{{ $data->nev }}</h2>
        <div class="row">
            <div class="col-sm">
                <p class="text-center">
                    <img src="{{ asset('img/' . $data->id . '.jpg') }}" alt="{{ $data->id }}.jpg" class="w-100">
                </p>
            </div>
            <div class="col-sm">
                <table class="table table-striped">
                    <tr>
                        <th>Területe</th>
                        <td>{{ number_format($data->terulet, 0, ',', ' ') }} km<sup>2</sup></td>
                    </tr>
                    <tr>
                        <th>Legmagasabb pontja</th>
                        <td>{{ $data->max }} m - {{ $data->max_nev }}</td>
                    </tr>
                    <tr>
                        <th>Legmélyebb pontja</th>
                        <td>{{ $data->min }} m - {{ $data->min_nev }}</td>
                    </tr>
                    <tr>
                        <th>Leghosszabb folyó</th>
                        <td>{{ $data->folyo }} km - {{ $data->folyo_nev }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
