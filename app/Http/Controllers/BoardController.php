<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    /**
     * ボード一覧表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $boards = Board::all();
        return view('board.index', ['boards' => $boards, 'user' => $user]);
    }

    /**
     * 投稿ページ
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        return view('board.create', ['user' => $user]);
    }

    /**
     * 投稿機能
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $board = new Board;
        // $form = $request->all;
        // unset($form['_token']);
        // $board->fill($form)->save();
        // return redirect('board.index');

        $inputs = $request->all();
        Board::create($inputs);
        return redirect('/board');
    }

    /**
     * 詳細ページ表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $board = Board::find($id);
        if (isset($board)) {
            return view('board.show', ['board' => $board, 'user' => $user]);
        } else {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('board_index'));
        }
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

    // /**
    //  * 削除画面
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function delete($id) {
    //     $user = Auth::user();
    //     $board = Board::find($id);
    //     return view('board.delete', ['board' => $board, 'user' => $user]);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Request $request, $id)
    // {
    //     $board = Board::find($id)->delete;
    //     return redirect(route('board_index'));
    // }
}
