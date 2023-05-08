@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-7">
            <h3 class='mb-3'>Monitoring Pertandingan</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
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
                                    <a href="#" class="text-decoration-none" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $item->id }}">
                                        {{ $item->team->name_club }}
                                    </a>
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title
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
        {{-- <div class="col">
            <h3 class='mb-3'>Select list pertandingan</h3>
            <div class="card">
                <form action="{{ route('monitorings.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="main">
                            <div class="row mb-2">
                                <div class="col-8">
                                    <select class="form-select" name="selects[0][team_id]"
                                        aria-label="Default select example">
                                        <option selected disabled value="">select club</option>
                                        @foreach ($teams as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_club }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <button type="button" id="add" class="btn btn-primary">
                                        Add More
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submiy" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
@endsection
