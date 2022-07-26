@extends('layouts.app')

@section('titulo')
    Inicia Sesión en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen login usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST">
                @csrf
              
                @if (session('mensaje'))
                <p class="text-red-500 py-0 rounded-lg text-xs p-2 text-center">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Tu Email"
                            class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                            autofocus
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
                    <label class="cursor-pointer text-gray-500 text-sm font-bold">
                        <input type="checkbox" name="remember"> Mantener mi sesión abierta
                    </label>
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection