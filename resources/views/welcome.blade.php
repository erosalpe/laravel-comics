@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style lang="scss">
        li {
            list-style-type: circle;
        }
    </style>
@endsection

@section('content')
    <h1>Pagina di benvenuto</h1>

    <ul>
        @foreach ($data as $element)
            {{-- {{ dd($loop) }} --}}

            <li>
                {{ $element['name'] }}
            </li>
        @endforeach
    </ul>
@endsection
