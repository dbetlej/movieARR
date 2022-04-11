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
                <div class="card-header">Edit movie</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('movies.update', ['movie' => $movie->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="120" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $movie->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>

                            <div class="col-md-6">
                                <input id="name" type="url" maxlength="500" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $movie->url }}" required autocomplete="url" autofocus>

                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" maxlength="1200" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $movie->description }}" autocomplete="description" autofocus>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Series</label>

                            <div class="col-md-6">
                                <input id="series" type="text" maxlength="120" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ $movie->series }}" autocomplete="series" autofocus>

                                @error('series')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <input id="category" type="text" maxlength="120" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $movie->category }}" autocomplete="category" autofocus>

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favorite" class="col-md-4 col-form-label text-md-right">Favorite</label>

                            <div class="col-md-6">
                                <input id="favorite" type="checkbox" class="form-control @error('favorite') is-invalid @enderror" name="favorite" value="{{ $movie->favorite }}" autocomplete="favorite" autofocus>

                                @error('favorite')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="watched" class="col-md-4 col-form-label text-md-right">Watched</label>

                            <div class="col-md-6">
                                <input id="watched" type="checkbox" class="form-control @error('watched') is-invalid @enderror" name="watched" value="{{ $movie->watched }}" autocomplete="watched" autofocus>

                                @error('watched')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="to_watch" class="col-md-4 col-form-label text-md-right">To watch</label>

                            <div class="col-md-6">
                                <input id="to_watch" type="checkbox" class="form-control @error('to_watch') is-invalid @enderror" name="to_watch" value="{{ $movie->to_watch }}" autocomplete="to_watch" autofocus>

                                @error('to_watch')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Zapisz
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
