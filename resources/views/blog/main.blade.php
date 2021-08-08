<x-app-layout>
    <x-slot name="header">
        @include('site.includes.header')
    </x-slot>
    @include('blog.last')

    <div class="row" style="--bs-gutter-x: 0rem !important;">
        <div class="col-md-8 col-xl-8 col-sm-12">
            <div class="container">
                @include('blog.index')
                <div class="m-3 mb-5 pb-3">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4 col-sm-12">
            <div class="container">
                @include('blog.sidebar')
            </div>
        </div>
    </div>

    <x-slot name="footer">
        @include('site.includes.footer')
    </x-slot>
</x-app-layout>