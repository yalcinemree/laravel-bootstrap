<p style="color:green">{{ Session::get('message') }}</p>
<p style="color:red">{{ Session::get('error') }}</p>

<form name="userEdit" method="POST">
Adı : <input name='name' value="{{{ $userInfo['name'] }}}" /><br>
Soyadı : <input name='surname' value="{{{ $userInfo['surname'] }}}"/><br>
Email : <input name="email" value="{{{ $userInfo['email'] }}}"/><br>
<input type="submit" value="Güncelle">
</form>