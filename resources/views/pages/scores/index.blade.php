@extends('layouts.app')
@section('content')
    <div class="d-flex gap-4 m-4">
        <div class="col-7">
            <h3 class='mb-3'>List Data Pertandingan</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
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
                            <th scope="col">Action</th>
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
                                <td class='text-center'>
                                    <form onsubmit="return confirm('apakah anda yakin?')"
                                        action="{{ route('scores.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class='bx bxs-trash'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h3 class='mb-3'>Select list pertandingan</h3>
            @include('flash::message')
            <div class="card">
                <form action="{{ route('scores.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="main">
                            <div class="row mb-2">
                                <div class="col-9">
                                    <select class="form-select" name="selects[0][team_id]"
                                        aria-label="Default select example">
                                        <option selected disabled value="">select club</option>
                                        @foreach ($teams as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_club }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2 px-0">
                                    <button style="" type="button" id="add"
                                        class="d-flex rounded-4 btn btn-primary">
                                        <i style="font-size: 1.3rem;" class='m-auto bx bxs-plus-circle'></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submiy" class="btn btn-sm btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('add-more')
        <script>
            var i = 1;
            $('#add').click(function() {
                i++;
                $('.main').append(
                    '<div class="row mb-2"><div class="col-9"><select class="form-select" name="selects[' +
                    i +
                    '][team_id]" aria-label="Default select example"><option selected disabled value="">select club</option>@foreach ($teams as $item)<option value="{{ $item->id }}">{{ $item->name_club }}</option>@endforeach</select></div><div class="col px-0"><button type="button" id="remove" class="btn btn-danger"><i style="font-size: 1.1rem" class="bx bxs-trash"></i></button></div></div>'
                );
            });
            $(document).on('click', '#remove', function() {
                $(this).closest('.row').remove();
            });
        </script>
    @endpush
@endsection
