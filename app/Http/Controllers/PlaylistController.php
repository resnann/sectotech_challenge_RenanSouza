<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlaylistRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $playlists = Playlist::paginate();

        return view('playlist.index', compact('playlists'))
            ->with('i', ($request->input('page', 1) - 1) * $playlists->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $playlist = new Playlist();

        return view('playlist.create', compact('playlist'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaylistRequest $request): RedirectResponse
    {
        Playlist::create($request->validated());

        return Redirect::route('playlist.index')
            ->with('success', 'Playlist criada.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $playlist = Playlist::find($id);

        return view('playlist.show', compact('playlist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $playlist = Playlist::find($id);

        return view('playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlaylistRequest $request, Playlist $playlist): RedirectResponse
    {
        $playlist->update($request->validated());

        return Redirect::route('playlist.index')
            ->with('success', 'Playlist atualizada');
    }

    public function destroy($id): RedirectResponse
    {
        Playlist::find($id)->delete();

        return Redirect::route('playlist.index')
            ->with('success', 'Playlist deletada');
    }
}
