@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{route('perfil.store')}}" class="mt-10 md:mt-0" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Tu Nombre"
                            class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                            value="{{auth()->user()->username}}"
                        >
                    </label>
                    @error('username')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Imagen Perfil
                        <input
                            type="file"
                            id="imagen"
                            name="imagen"
                            class="border p-3 w-full rounded-lg"
                            accept=".jpg, .jpeg, .png"
                        >
                    </label>
                    @error('imagen')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection