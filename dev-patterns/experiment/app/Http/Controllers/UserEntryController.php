<?php

namespace App\Http\Controllers;

use App\Models\UserEntry;
use Illuminate\Http\Request;

class UserEntryController extends Controller
{
    function index()
	{
		$all = UserEntry::all();
		dd($all);
	}

	function detail($id)
	{
		$item = UserEntry::find($id);
		return view("user_entry_detail", ["item" => $item]);
	}
}
