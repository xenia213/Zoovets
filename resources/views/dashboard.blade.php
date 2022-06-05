@extends('profile.layouts.style')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>  
    <a href="{{ route ('news') }}" class="nav-link">
                  <p>Все статьи</p>
     </a>      
          
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="h1">Статьи</h1>
             


        </div>
    </div>
</x-app-layout>
