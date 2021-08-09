<x-app-layout>
    <div @if(Auth::check()) drag-root @endif>
        <x-slot name="header">
            @include('site.includes.header')
        </x-slot>

        <div class="container">
            <div @if(Auth::check()) drag-item draggable="true" @endif >
                @include('site.blog.index')
            </div>
            <div @if(Auth::check()) drag-item draggable="true" @endif >
                @include('site.galery.index')
            </div>
            <div @if(Auth::check()) drag-item draggable="true" @endif >
                @include('site.contact.contactForm')
            </div>
            <div @if(Auth::check()) drag-item draggable="true" @endif >
                @include('site.menu.index')
            </div>
        </div>

        <x-slot name="footer">
            @include('site.includes.footer')
        </x-slot>
    </div>
</x-app-layout>