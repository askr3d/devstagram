@extends('layouts.app')


@section('titulo')
    Iniciar sesion
@endsection

@section('contenido')
    <div class="md:flex md:gap-10 md:items-center justify-center">
        <div class="md:w-6/12 p-5">
            <img class="rounded-sm" src="{{ asset('img/login.jpg') }}" alt="Imagen Login">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf
                @if (session('mensaje'))
                    <span class="text-white p-2 bg-red-500 block rounded-lg text-center text-md my-1">{{ session('mensaje') }}</span>
                @endif
                <div class="mb-5">
                    <div>
                        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                            Email
                        </label>
                        <input type="email" name="email" id="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                        @error('email')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <div>
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="Tu Contraseña" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                        @error('password')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class="text-sm text-gray-500">Mantener mi sesion abierta</label>
                </div>

                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection