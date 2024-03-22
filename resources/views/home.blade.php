@extends('layouts.app', ['title' => 'Home'])
@section('content')
<h1>Home</h1>

{{-- Penulisan component pada blade --}}
@component('components.alert')
@slot('title')
Header Component with <strong>strong</strong> tag
@endslot

ini adalah children

@slot('footer')
<p>Footer</p>
@endslot

@endcomponent
{{-- End --}}

{{-- Penulisan singkat component --}}
{{-- Ini disebut anonymous component --}}
{{-- Persyaratannya adalah nama folder nya "components" --}}
<x-alert>
    <x-slot name="title">
        Header Component with <strong>strong</strong> tag
    </x-slot>

    ini adalah children

    <x-slot name="footer">
        <p>Footer</p>
    </x-slot>
</x-alert>

<p>
    Lorem ipsum dolor, sit <strong style="color: red">amet</strong> consectetur adipisicing elit. A nemo odit commodi,
    cum
</p>
@endsection