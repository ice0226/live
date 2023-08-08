
<?php
use App\Models\Live;

public function index(Live $live)
    {
        return view('Lives.index')->with(['posts' => $Live->getByLive()]);
    }