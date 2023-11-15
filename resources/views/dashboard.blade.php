@extends('layouts.app')

@section('content')
<div>
    <h1>you are Login {{ Auth::user()->name }}</h1>
</div>
<a wire:navigate href="{{ route('logout') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm mx-4 px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout</a>

@endsection