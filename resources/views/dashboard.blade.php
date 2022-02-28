<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <button class="btn_show btn btn-primary">Button</button>
                        <button class="btn_hide btn btn-primary">Button</button>
                        <div class="btn_word">Hello world!!!</div>
                </div>
            </div>
        </div>
    </div>
    <script>
                $(function(){
        $('.btn_show').click(function(){
            $('.btn_word').show();
        });
        $('.btn_hide').click(function(){
            $('.btn_word').hide();
        });
        });
    </script>
</x-app-layout>
