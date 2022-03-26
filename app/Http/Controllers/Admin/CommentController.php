<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function listComment(){
        $comment = Comment::where('comment.id','>',0)
        ->join('product','comment.product_id','=','product.id')
        ->get(['comment.*','product.name as product_name']);
        return view('admin.listComment',compact('comment'));
    }
}
