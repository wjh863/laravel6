<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

		<form action="{{url('/dologin')}}" method="post">
			<input type="text" name="uname" value="">
			<input type="password" name="pwd" value="">
			
			<input type="submit" value="submit">
		</form>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>