<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="hero min-h-screen"
        style="background-image: url(https://images.unsplash.com/photo-1514195037031-83d60ed3b448?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-10">
        <div class="grid grid-flow-col sm:grid-flow-col auto-cols-max sm:auto-cols-max gap-12 justify-center">
            <div>
                <x-card
                    src="https://images.unsplash.com/photo-1520256788229-d4640c632e4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                    title="Adidassssssssss.........." badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="adidas" />
            </div>
            <div>
                <x-card
                    src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/30/cb6f69a4-7641-48a0-b1b9-33e299e8cf9a.jpg"
                    title="Geofmax Casual" badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="Geofmax" />
            </div>
            <div>
                <x-card
                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    title="Nike..." badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="Nike" />
            </div>
        </div>
    </div>

    <div class="py-10">
        <div class="grid grid-flow-col sm:grid-flow-col auto-cols-max sm:auto-cols-max gap-12 justify-center">
            <div>
                <x-card
                    src="https://images.unsplash.com/photo-1520256788229-d4640c632e4b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                    title="Adidassssssssss.........." badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="adidas" />
            </div>
            <div>
                <x-card
                    src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/3/30/cb6f69a4-7641-48a0-b1b9-33e299e8cf9a.jpg"
                    title="Geofmax Casual" badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="Geofmax" />
            </div>
            <div>
                <x-card
                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    title="Nike..." badge="99+"
                    content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, exercitationem?`"
                    type="fashion" products="Nike" />
            </div>
        </div>
    </div>
</x-app-layout>
