<?php

namespace App\Http\Controllers;

use App\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
  public function index(){
    // $memos = Memo::all();
    $memos = Memo::tagFilter(request('tag'))->get();
    return view('memos.index',compact('memos'));
  }
}
