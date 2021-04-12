{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <livewire:live-table />
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

 --}}
 <x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <livewire:live-table />
</x-app-layout>
