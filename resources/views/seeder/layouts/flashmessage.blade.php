@if (session()->has('success'))
    <h1>{{ session('success') }}</h1>
@endif
@if (session()->has('errors'))
    <h1>{{ session('errors') }}</h1>
@endif