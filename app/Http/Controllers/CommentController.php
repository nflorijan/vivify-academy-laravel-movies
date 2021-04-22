<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Models\Movie;

class CommentController extends Controller
{
    public function store(Movie $movie, CreateCommentRequest $request) {
        $data = $request->validated();

        $comment = $movie->comments()->create($data);
        info('novi komentar je: ');
        info($comment);

        return back();
    }
}
