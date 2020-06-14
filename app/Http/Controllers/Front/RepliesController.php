<?php

namespace App\Http\Controllers\Front;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepliesController extends Controller
{
    public function index()
    {
        //
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
        if (Auth::check()) {
            $comments = Comment::find($request->input('comment_id'));
            Reply::create([
                'comment_id' => $request->input('comment_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('paket.detail',$comments->paket_id)->with('status','Balasan komentar anda telah ditambahkan !');
        }

        return back()->withInput()->with('error','Something wronmg');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        if (Auth::check()) {
            $reply = Reply::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
            if ($reply->delete()) {
                return 1;
            }else{
                return 2;
            }
        }else{

        }
        return 3;
    }
}
