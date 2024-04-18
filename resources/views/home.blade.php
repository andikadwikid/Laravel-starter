<x-app-layout>
    {{-- <h1>Home</h1> --}}

    {{-- Penulisan component pada blade --}}
    {{-- @component('components.alert')
        @slot('title')
            Header Component with <strong>strong</strong> tag
        @endslot

        ini adalah children

        @slot('footer')
            <p>Footer</p>
        @endslot
    @endcomponent --}}
    {{-- End --}}

    {{-- Penulisan singkat component --}}
    {{-- Ini disebut anonymous component --}}
    {{-- Persyaratannya adalah nama folder nya "components" --}}
    {{-- <x-alert>
        <x-slot name="title">
            Header Component with <strong>strong</strong> tag
        </x-slot>

        ini adalah children

        <x-slot name="footer">
            <p>Footer</p>
        </x-slot>
    </x-alert> --}}

    {{-- <p>
        Lorem ipsum dolor, sit <strong style="color: red">amet</strong> consectetur adipisicing elit. A nemo odit
        commodi,
        cum
    </p> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome to my site</div>
                    <div class="card-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad blanditiis, iure ex necessitatibus
                        modi eligendi laudantium ullam temporibus voluptates commodi odit nobis, cum eum corporis nihil
                        accusantium possimus magnam aliquid.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
