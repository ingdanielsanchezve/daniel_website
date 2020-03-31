<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
	<head>

		@include('doc_header')
        @include('css')

	</head>
	<body data-spy="scroll" data-target=".wrapper-spy">

		<div class="body" id="app">
			@if($desktop == true)
				<opt-menu></opt-menu>
			@else
            	@include('header')
			@endif

			<div role="main" class="main animated slower fadeIn">

            @yield('content')

			</div>

			<site-footer></site-footer>
		</div>

		@include('js')

	</body>
</html>
