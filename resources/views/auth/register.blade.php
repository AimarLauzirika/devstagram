@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Tu Nombre"
                            class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                            value="{{old('name')}}"
                        >
                    </label>
                    @error('name')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Tu Nombre de Usuario"
                            class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                            value="{{old('username')}}"
                        >
                    </label>
                    @error('username')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Tu Email"
                            class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                            value="{{old('email')}}"
                        >
                    </label>
                    @error('email')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Tu Password"
                            class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                        >
                    </label>
                    @error('password')
                        <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repite tu Password"
                            class="border p-3 w-full rounded-lg"
                        >
                    </label>
                </div>
                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection