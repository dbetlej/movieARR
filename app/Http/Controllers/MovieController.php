<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Exception;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view("movie.index", [
            'movies' => Movie::paginate(40)
        ]);
    }

    public function create()
    {
        return view("movie.create");
    }

    public function store(StoreMovieRequest $request)
    {
        $data = $request->validated();
        $movie = Movie::create($data);
        $movie->save();

        return redirect(route('movie.index'));
    }

    public function show(Movie $movie)
    {
        return view("movie.show", [
            'movies' => $movie
        ]);
    }

    public function edit(Movie $movie)
    {
        return view("movie.edit", [
            'movies' => $movie
        ]);
    }

    public function update(UpdateMovieRequest $updateMovieRequest, Request $request, Movie $movie): RedirectResponse
    {
        $data = $updateMovieRequest->validated(); // todo: request
        $movie->fill($request->all());
        $movie->save();

        return redirect(route('movie.index'));
    }

    public function destroy(Movie $movie): JsonResponse
    {
        try {
            $movie->delete();
            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error destroy!'
            ])->setStatusCode(500);
        }
    }
}
