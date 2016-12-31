<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    <link rel="icon" href="../../favicon.ico">

    @yield('title')

    @include('layouts.css')

    @yield('css')

</head>

<body role="document">
	@include('layouts.facebook')
	<div id="app">
		@include('layouts.nav')
		<div class="container theme-showcase" role="main">
		    @yield('content')
		    @include('layouts.bottom')
 		</div> <!-- /container -->
	</div>
 
 @include('layouts.scripts')
 
 @include('Alerts::show')

 @yield('scripts')

</body>
</html>