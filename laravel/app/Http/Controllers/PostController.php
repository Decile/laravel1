<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $postObj = new Post();
        $postObj->title = $request->input('title');
        $postObj->description = $request->input('description');
        $postObj->save();
        return redirect()->back()->withMessage('Successfully Post Created');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(){
        return view('post.register');
    }
    public function show(){
        $posObj = Post::all();
        return view('post.view',['posts' => $posObj]);

    }
	
	public function edit(){
        $posObj = Post::find(1);
        //print_r($posObj->toArray());
        //exit;
        return view('post.edit',['post' => $posObj]);
    }
	public function update(Request $request,$id){
		
		$validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $postObj = Post::findOrFail($id);
        $postObj->title = $request->input('title');
        $postObj->description = $request->input('description');
        $postObj->save();
        return redirect()->back()->withMessage('Successfully Updated');
		
	}
	public function delete_data($id){
        $postObj = Post::findOrFail($id);
        $postObj->delete();
        return redirect()->back()->withMessage('Successfully Deleted');

    }
}