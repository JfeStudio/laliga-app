@extends('layouts.homepage')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-9">
            <h3 class='mb-3 text-center'>Klasemen Sepak Bola</h3>
            @include('flash::message')
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr class='text-center'>
                            <th scope="col">No</th>
                            <th scope="col">Club</th>
                            <th scope="col">Ma</th>
                            <th scope="col">Me</th>
                            <th scope="col">S</th>
                            <th scope="col">K</th>
                            <th scope="col">GM</th>
                            <th scope="col">GK</th>
                            <th scope="col">Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($monitorings as $item)
                            <tr class='text-center'>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ $item->team->name_club }}
                                </td>
                                <td>{{ $item->played }}</td>
                                <td>{{ $item->win }}</td>
                                <td>{{ $item->draw }}</td>
                                <td>{{ $item->lose }}</td>
                                <td>{{ $item->goal_for }}</td>
                                <td>{{ $item->goal_against }}</td>
                                <td>{{ $item->points }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-3">
            <h3 class='mb-3 text-center'>Format</h3>
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item bg-dark text-white" aria-current="true">Laliga Official App</li>
                    <li class="list-group-item">MA = <span class="badge text-bg-primary">MAIN</span></li>
                    <li class="list-group-item">ME = <span class="badge text-bg-success">MENANG +3</span> </li>
                    <li class="list-group-item">S = <span class="badge text-bg-secondary">SERI +1</span></li>
                    <li class="list-group-item">K = <span class="badge text-bg-danger">KALAH : 0</span></li>
                    <li class="list-group-item">GM = <span class="badge text-bg-success">GOAL MENANG</span> <br /> (Total
                        goal yang di cetak team tersebut)</li>
                    <li class="list-group-item">GK = <span class="badge text-bg-danger">GOAL KALAH</span> <br /> (Total
                        yang dicetak team lawan terhadapn team )</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
