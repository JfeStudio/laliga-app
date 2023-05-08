@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-7">
            <h3 class='mb-3'>List Data Pertandingan</h3>
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
                        @forelse ($scores as $item)
                            <tr class='text-center'>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->team->name_club }}</td>
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
        <div class="col">
            <h3 class='mb-3'>Select list pertandingan</h3>
            <div class="card">
                <form action="{{ route('scores.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-8">
                                <select class="form-select" name="team_id" aria-label="Default select example">
                                    <option selected disabled value="">select club</option>
                                    @foreach ($teams as $item)
                                        <option value="{{ $item->id }}">{{ $item->name_club }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col">
                            <label for="exampleFormControlInput1" class="form-label"></label>
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div> --}}
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    Add More
                                </button>
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
        </div>
    </div>
@endsection
