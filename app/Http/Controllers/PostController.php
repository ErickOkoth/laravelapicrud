<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostController extends Controller
{
    public function createBook(Request $request){
    $post=Posts::create($request->all());
    return ['status'=>true,'message'=>'Book added successfully!'];

    }

    public function getBook($id){
        $post=Posts::find($id);
        return['status'=>true,'post'=>$post];

    }
    public function getAllBook(){
        $post=Posts::all();
        return['status',true,'list'=>$post];

    }
    public function updateBook(Request $request,$id){
    $post=Posts::find($id);
    $post->update($request->all());
    return ['status'=>true,'message'=>'Book updated successfully!'];
    }
    public function deleteBook($id){
        $post=Posts::find($id);
        $post->delete();
        return ['status'=>true,'message'=>'Book deleted successfully!'];
    }

}

