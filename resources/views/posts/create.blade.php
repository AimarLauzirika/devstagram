@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@push('js')
    @vite('resources/js/dropzone.js')
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded-2xl flex flex-col justify-center items-center" action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt0">
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Título
                        <input
                            type="text"
                            id="titulo"
                            name="titulo"
                            placeholder="Título de la publicación"
                            class="border p-3 w-full rounded-lg font-normal @error('titulo') border-red-500 @enderror"
                            value="{{old('titulo')}}"
                        >
                    </label>
                    @error('titulo')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                        <textarea
                            id="descripcion"
                            name="descripcion"
                            placeholder="Descripción"
                            class="border p-3 w-full rounded-lg font-normal @error('descripcion') border-red-500 @enderror"
                        >{{old('descripcion')}}</textarea>
                    </label>
                    @error('descripcion')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{old('imagen')}}">
                    @error('imagen')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Publicar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection