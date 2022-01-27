@extends('layouts.main')

@section('title')
    <title>Show App</title>
@endsection

@section('content')
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col justify-between md:flex-row px-4 py-4">
            
            <div>
                <ul class="flex flex-col md:flex-row items-center">
                    <li>
                        <span style="font-size: 2em; color: white;">
                            <i class="fas fa-video"></i>
                        </span> 
                    </li>
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="" class="hover:text-gray-300">TV Shows</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center md:flex-row">
                <div class="relative">
                    <div class="absolute top-3.5 md:top-1 pl-3 ">
                        <span style="color: gray;" class="fill-current">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <input class="mt-3 md:mt-0 rounded-full bg-gray-800 text-sm w-64 
                    px-4 pl-8 py-1 focus:outline-none focus:shadow-outline font-bold" 
                    type="text" placeholder="Search">
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <img class="w-8 h-8 rounded-full" src="/images/profile.jpg" alt="profile">
                </div>   
            </div>

        </div>
    </nav>

    <section>
        <div class="container mx-auto px-4 pt-16">
            <div class="">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <div>
                        <a href="">
                            <img class="hover:opacity-75 transition 
                            eaase-in-out duration-150" src="/images/movie.jpg" alt="movie">
                        </a>    
                    </div>
                    <div class="mt-2">
                        <span class="text-lg mt-2 hover:text-gray-300">Parasite</span>
                        <br>
                        <span style="color: orange;">
                            <i class="fas fa-star"></i>
                        </span>
                        <span>58%</span>
                        <span>|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div>
                        Action, Triller, Comedy
                    </div>
                </div>    
            </div>
        </div>
    </section>

@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('js')
    <script>
        
    </script>
@endpush