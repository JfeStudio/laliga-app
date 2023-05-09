@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-7">
            <h3 class='mb-3'>List Team</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name Team</th>
                            <th scope="col">City</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teams as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name_club }}</td>
                                <td>{{ $item->city_club }}</td>
                                <td>@mdo</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-5">
            <h3 class='mb-3'>Create new team</h3>
            <div class="card">
                <form action="{{ route('teams.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name Team</label>
                            <input type="text" name="name_club" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Name City</label>
                            <input type="text" name="city_club" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
