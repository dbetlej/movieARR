<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MovieARR') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Movies list.</h1>
            </div>
            <div class="col-6">
                <a class="float-right" href="{{ route('movies.create') }}">
                    <button type="button" class="btn btn-primary">Add movie</button>
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                    <th scope="col">Description</th>
                    <th scope="col">Series</th>
                    <th scope="col">Favorite</th>
                    <th scope="col">Watched</th>
                    <th scope="col">To watch</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->url }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->series }}</td>
                        <td>{{ $movie->category }}</td>
                        <td>{{ $movie->favorite }}</td>
                        <td>{{ $movie->watched }}</td>
                        <td>{{ $movie->to_watch }}</td>
                        <td>
                            <a href="{{ route('movies.show', ['movie' => $movie->id]) }}">
                                <button class="btn btn-primary btn-sm">OPEN</button>
                            </a>
                            <a href="{{ route('movies.edit', ['movie' => $movie->id]) }}">
                                <button class="btn btn-success btn-sm">EDIT</button>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $movie->id }}">
                                DELETE
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $movies->links() }}
        </div>
    </div>
@section('javascript')
    const deleteUrl = "{{ url('movies') }}/";
@endsection
@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
