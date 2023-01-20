<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\post;
use App\Models\backend\PostHasTag;
use App\Models\backend\Tag;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        $tags = Tag::all();
        return view('backend.pages.post.posts', compact('posts','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required',
            'post_description' => 'required',
        ]);
        $post = new post();
        if ($request->hasFile('post_banner')) {
            $file = $request->post_banner;
            $ext = $file->getClientOriginalExtension();
            $fileName = hexdec(uniqid()) . '.' . $ext;

            $file->move('backend/assets/images/school/post', $fileName);
            $post->post_banner = $fileName;
        }

        $post->post_name = $request->post_name;
        $post->post_description = $request->post_description;
        $post->status = $request->status;
        $post->created_by = auth()->user()->name;
        $post->save();

        if ($request->tag_id) {
            $this->postHasTags($post->id, $request->tag_id);
            return redirect()->back()->with('success', 'Post Saved With Tags');
        }
        return redirect()->back()->with('success', 'Post Saved With Out Tags');
    }

    public function status($id)
    {
        $post = post::find($id);
        if($post->status == 'publish'){
            $post->status = 'draft';
        }elseif($post->status == 'draft'){
            $post->status = 'publish';
        }else{
            return redirect()->back()->with('error', 'Please Check Your Value');
        }
        $post->update();
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $file = 'backend/assets/images/school/post/'.$post->post_banner;
        if(File::exists(public_path($file))){
            File::delete($file);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Post Deleted Successfully');


    }
    public static function postHasTags($post_id, $tag_ids)
    {
        foreach ($tag_ids as $tag_id) {
            $store = new PostHasTag();
            $checkTag = PostHasTag::where('post_id', $post_id)->where('tag_id', $tag_id)->get();
            if (count($checkTag) > 0) {
                return back()->with('error', 'Tag already exists');
            } else{
                $store->post_id = $post_id;
                $store->tag_id = $tag_id;
                $store->save();
            }
        }
        return $store;
    }
}
