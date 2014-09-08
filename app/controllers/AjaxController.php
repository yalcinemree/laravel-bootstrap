<?php

class AjaxController extends BaseController {

	public function search()
	{
		$userName = Input::get('search-text');
		$users = User::where('name','=', $userName)->get();
    	return View::make('ajax.search')->with('users', $users);
	}

}