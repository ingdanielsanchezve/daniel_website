<!DOCTYPE html>
<html>
	<head>

		@include('doc_header')
        @include('css')

	</head>
	<body data-spy="scroll" data-target=".wrapper-spy">

		<div class="body">
            @include('header')

			<div role="main" class="main animated slower fadeIn">

            @yield('content')

			@include('footer')
		</div>

		@include('js')


	</body>
</html>
