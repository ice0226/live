<?php

use App\Models\Artist;

public function index(Artist $artist)
{
    return view('artists.index')->with(['posts' => $artist->getByArtist()]);
}