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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Preview movie</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" maxlength="120" class="form-control" name="name" value="{{ $movie->name }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>

                        <div class="col-md-6">
                            <textarea id="url" maxlength="500" class="form-control" name="url" disabled>{{ $movie->url }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                        <div class="col-md-6">
                            <textarea id="description" maxlength="1200" class="form-control" name="description" disabled>{{ $movie->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="series" class="col-md-4 col-form-label text-md-right">Series</label>

                        <div class="col-md-6">
                            <textarea id="series" maxlength="120" class="form-control" name="series" disabled>{{ $movie->series }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                        <div class="col-md-6">
                            <textarea id="category" maxlength="120" class="form-control" name="category" disabled>{{ $movie->category }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="favorite" class="col-md-4 col-form-label text-md-right">Favorite</label>

                        <div class="col-md-6">
                            <input type="checkbox" class="form-control" name="favorite" disabled {{ $movie->favorite }}>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="watched" class="col-md-4 col-form-label text-md-right">Watched</label>

                        <div class="col-md-6">
                            <input type="checkbox" class="form-control" name="watched" disabled {{ $movie->watched }}>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="to_watch" class="col-md-4 col-form-label text-md-right">To watch</label>

                        <div class="col-md-6">
                            <input type="checkbox" id="to_watch" class="form-control" name="to_watch" disabled {{ $movie->to_watch }}>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
