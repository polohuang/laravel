@extends('layout')

@section('content')
<table border=1>
	<tr><th>姓名</th><th>電子郵件</th><th>註冊日期</th></tr>
    @foreach($users as $user)
    	<tr>
    		<td>{{ $user->name }}</td>
    		<td>{{ $user->email }}</td>
    		<td>{{ $user->created_at }}</td>
    	</tr>
    @endforeach
</table>
@stop