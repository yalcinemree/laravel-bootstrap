<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function users()
	{
		$users = User::all()->toArray();

    	return View::make('users')->with('users', $users);
	}

	public function userInfo($id)
	{	
		if($this->getUserInfo($id)){

			$userInfo = User::where('id','=', $id)->first()->toArray();

			return View::make('userInfo',compact('userInfo'));
		}
		else{
			return Redirect::route('users')->with(['error'=>'Aradığınız kişi bulunamamıştır.']);
		}
		
	}

	public function userForm()
	{
		return View::make('userForm');
	}

	public function userAdd()
	{
			if(Input::get('name') AND Input::get('surname') AND Input::get('email')){
				try{
					$user = new User;
					$user->name= Input::get('name');
					$user->surname= Input::get('surname');
					$user->email= Input::get('email');		
					$inserted = $user->save();			
				}
				catch(Exception $e){
					Log::error($e->getMessage());
					return Redirect::route('userForm')->with(['error'=> 'Beklenmedik bir hata oluştu, kayıt yapılamadı.'])->withInput();	
				}

				if($inserted){
					return Redirect::route('users')->with(['message'=>'Başarıyla kaydedildi.']);
				}
				else{
					return Redirect::route('userForm')->with(['error'=>'DB hata oluştu.'])->withInput();
				}			
			}
			else {

				return Redirect::route('userForm')->with(['error'=>'Boş alanları doldurunuz'])->withInput();
			}				

	}

	public function userEdit($id)
	{	
		if($this->getUserInfo($id)){

			$userInfo = User::where('id','=', $id)->first()->toArray();

			return View::make('userEdit',compact('userInfo'));
		}
		else{
			return Redirect::route('users')->with(['error'=>'Aradığınız kişi bulunamamıştır.']);
		}
	}

	public function userEditSave($id)
	{
		if($this->getUserInfo($id)){
			if(Input::get('name') AND Input::get('surname') AND Input::get('email')){
				$user = User::find($id);
				$user->name     = Input::get('name');
				$user->surname  = Input::get('surname');
				$user->email 	= Input::get('email');

				if($user->save()){
					return Redirect::route('users')->with(['message'=>'Başarıyla kaydedildi.']);
				}
				else{
					return Redirect::to('users/'.$id.'/edit')->with(['error'=>'DB hata oluştu.']);
				}			
			}
			else{
				return Redirect::to('users/'.$id.'/edit')->with(['error'=>'Boş alanları doldurunuz']);
			}
		}
		else{
			return Redirect::route('users')->with(['error'=>'Aradığınız kişi bulunamamıştır.']);
		}
	}

	public function userDelete($id)
	{
	
		if ($this->getUserInfo($id)) {

			$user = User::find($id);

			if($user->delete()){
				return Redirect::route('users')->with(['message'=>'Başarıyla silinmiştir.']);
			}

		}else{

			return Redirect::route('users')->with(['error'=>'Aradığınız kişi bulunamamıştır.']);

		}
	}

	private function getUserInfo($userId)
	{
		
		return User::where('id','=', $id)->first();
	}

}
