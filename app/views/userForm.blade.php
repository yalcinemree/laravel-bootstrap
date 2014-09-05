<p style="color:green">{{ Session::get('message') }}</p>
<p style="color:red">{{ Session::get('error') }}</p>
<form name="userForm" method="POST">

Adı : <input name='name' value="{{{ Input::old('name') }}}" /><br>
Soyadı : <input name='surname' value="{{{ Input::old('surname') }}}"/><br>
Email : <input name="email" value="{{{ Input::old('email') }}}"/><br>
<input type="submit" value="kaydet">
</form>