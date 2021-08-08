<x-app-layout>
    <x-slot name="header">
        @include('site.includes.header')
    </x-slot>

    <div class="container">
        @include('site.blog.index')
        @include('site.galery.index')
        @include('site.contact.contactForm')
        @include('site.menu.index')
    </div>

    <x-slot name="footer">
        @include('site.includes.footer')
    </x-slot>
</x-app-layout>