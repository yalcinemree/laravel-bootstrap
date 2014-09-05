@include('header')


<p style="color:green">{{ Session::get('message') }}</p>
<p style="color:red">{{ Session::get('error') }}</p>

<a href="users/add">Kullanıcı Ekle</a><br>


@foreach($users as $user)
        <a href="users/{{{ $user['id'] }}}">{{{ $user['id'] }}} - {{ $user['name'] }}</a> - 
        <a href="users/{{{ $user['id'] }}}/edit">Güncelle</a> -- 
        <a href="users/{{{ $user['id'] }}}/delete">Sil</a><br>
@endforeach

@include('footer')