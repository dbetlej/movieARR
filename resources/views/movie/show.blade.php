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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="form-group">
                <label for="name" class="col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" maxlength="120" class="form-control" name="name" value="{{ $movies->name }}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-form-label text-md-right">URL</label>
                <div class="col-md-6">
                    <textarea id="url" maxlength="500" class="form-control" name="url" disabled>{{ $movies->url }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-form-label text-md-right">Description</label>
                <div class="col-md-6">
                    <textarea id="description" maxlength="1200" class="form-control" name="description" disabled>{{ $movies->description }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="series" class="col-form-label text-md-right">Series</label>
                <div class="col-md-6">
                    <textarea id="series" maxlength="120" class="form-control" name="series" disabled>{{ $movies->series }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="category" class="col-form-label text-md-right">Category</label>
                <div class="col-md-6">
                    <textarea id="category" maxlength="120" class="form-control" name="category" disabled>{{ $movies->category }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="favorite" class="col-form-label text-md-right">Favorite</label>
                <div class="col-md-6">
                    <input type="checkbox" class="form-control" name="favorite" disabled {{ $movies->favorite }}>
                </div>
            </div>
            <div class="form-group">
                <label for="watched" class="col-form-label text-md-right">Watched</label>
                <div class="col-md-6">
                    <input type="checkbox" class="form-control" name="watched" disabled {{ $movies->watched }}>
                </div>
            </div>
            <div class="form-group">
                <label for="to_watch" class="col-form-label text-md-right">To watch</label>
                <div class="col-md-6">
                    <input type="checkbox" id="to_watch" class="form-control" name="to_watch" disabled {{ $movies->to_watch }}>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
