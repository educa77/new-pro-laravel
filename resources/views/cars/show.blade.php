@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <img 
            src="{{ asset('images/' . $car->image_path) }}" 
            alt=""
            class="w-8/12 mb-8 shadow-xl"
            >
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>
        </div>
        <div class="pt-10">
                <a href="/cars" class="border-b-2 pb-2 border-dotted italic text-gray-500">
                   &larr; Back to cars
                </a>
        </div>
        <div class="py-10 text-center">
            <div class="m-auto">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>
            <p class="text-lg text-gray-700 py-6">
                {{ $car->description }}
            </p>
{{--             <ul>
                <p class="text-lg text-gray-700 py-3">
                    Models:
                </p>
                @forelse ($car->carmodels as $model)
                    <li class="inline italic text-gray-600 px-1 py-6">
                        {{ $model['model_name'] }}
                    </li>
                @empty
                    <p>
                        No models found
                    </p>
                @endforelse

            </ul> --}}
            <table class="table-auto">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Engines
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Date
                    </th>
                    @forelse ($car->carmodels as $model)
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{ $model['model_name'] }}
                            </td>
                            <td class="border-4 border-gray-500">
                                @foreach ($car->engines as $engine)
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="border-4 border-gray-500">
                                @foreach ($car->productionDate as $item)
                                    @if ($model->id == $item->model_id)
                                        {{ date('d-m-Y', strtotime($item->created_at))}}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @empty
                        <p>
                            No car models found!
                        </p>
                    @endforelse
                </tr>
            </table>
            <p class="text-left">
                Product types:
                @forelse ($car->products as $product)
                     {{ $product->name }}
                @empty
                    <p>No Car product description</p>
                @endforelse
            </p>
            <hr class="mt-4-mb-8">
        </div>
    </div>


@endsection