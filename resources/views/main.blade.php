@extends('layouts.app')



@section('header')
    <header>
        <div class="container-fluid d-flex justify-content-center back-red">
            <h1 class="text-white">trains</h1>
        </div>
    </header>
@endsection

@section('content')
    <main>
        <div class="container">
            <ul>
                @foreach ($trains as $train)
                    <li>
                        <div class="d-flex border-black p-1 back-grey justify-content-between">
                            <div class="w-250">{{ $train->company }}</div>
                            <div class="w-200">{{ $train->departure_station }}</div>
                            <div class="w-200">{{ $train->arrival_station }}</div>
                            <div class="w-200">{{ $train->departure_time }}</div>
                            <div class="w-200">{{ $train->arrival_time }}</div>
                            <div class="w-60">{{ $train->train_code }}</div>
                            <div class="w-15">{{ $train->Number_of_carriages }}</div>
                            <div class="w-15">{{ $train->In_time }}</div>
                            <div class="w-15">{{ $train->deleted }}</div>

                        </div>
                    </li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection


@section('footer')
    <footer>
        <div class="container">footer</div>
    </footer>
@endsection
