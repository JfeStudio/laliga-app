@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-9">
            <h3 class='mb-3 text-center'>Monitoring Pertandingan</h3>
            @include('flash::message')
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr class='text-center'>
                            <th scope="col">No</th>
                            <th scope="col">CLUB</th>
                            <th scope="col">MA</th>
                            <th scope="col">ME</th>
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
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $item->id }}">
                                        {{ $item->team->name_club }}
                                    </a>
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Setting Score
                                                        Pertandingan
                                                        {{ $item->team->name_club }}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('scores.update', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row g-3">
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">MA</label>
                                                                <input type="number" value="{{ $item->played }}"
                                                                    name="played" class="form-control" placeholder="played"
                                                                    aria-label="City">
                                                            </div>
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">ME</label>
                                                                <input type="number" value="{{ $item->win }}"
                                                                    name="win" class="form-control" placeholder="win"
                                                                    aria-label="City">
                                                            </div>
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">S</label>
                                                                <input type="number" value="{{ $item->draw }}"
                                                                    name="draw" class="form-control" placeholder="draw"
                                                                    aria-label="City">
                                                            </div>
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">K</label>
                                                                <input type="number" value="{{ $item->lose }}"
                                                                    name="lose" class="form-control" placeholder="lose"
                                                                    aria-label="City">
                                                            </div>
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">GM</label>
                                                                <input type="number" value="{{ $item->goal_for }}"
                                                                    name="goal_for" class="form-control"
                                                                    placeholder="goal for" aria-label="City">
                                                            </div>
                                                            <div class="col-sm">
                                                                <label for="inputZip" class="form-label">GK</label>
                                                                <input type="number" value="{{ $item->goal_against }}"
                                                                    name="goal_against" class="form-control"
                                                                    placeholder="goal against" aria-label="City">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
