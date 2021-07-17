@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Car
            </h1>
            <div class="pt-10">
                <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                   &larr; Back to cars
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="name"
                value="{{ $car->name }}"
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                value="{{ $car->founded }}"
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                value="{{ $car->description }}"
                >
                <button 
                type="submit"
                class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection