@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-7">
            <h3 class='mb-3'>List Team Sepak Bola</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class='table-dark'>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th scope="col">Name Team</th>
                            <th scope="col">City</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teams as $item)
                            <tr>
                                <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name_club }}</td>
                                <td>{{ $item->city_club }}</td>
                                <td class='text-center'>
                                    <form onsubmit="return confirm('apakah anda yakin?')"
                                        action="{{ route('teams.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class='bx bxs-trash'></i></button>
                                    </form>
                                </td>
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
            @include('flash::message')
            <div class="card">
                <form action="{{ route('teams.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name Team</label>
                            <input type="text" name="name_club" value="{{ old('name_club') }}"
                                class="form-control @error('name_club') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="name team">
                            @error('name_club')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Name City</label>
                            <input type="text" name="city_club" value="{{ old('name_club') }}"
                                class="form-control @error('city_club') is-invalid @enderror" id="exampleFormControlInput1"
                                placeholder="name city">
                            @error('city_club')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
