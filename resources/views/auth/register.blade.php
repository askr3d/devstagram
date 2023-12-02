@extends('layouts.app')


@section('titulo')
    Registrar usuario
@endsection

@section('contenido')
    <div class="md:flex md:gap-10 md:items-center justify-center">
        <div class="md:w-6/12 p-5">
            <img class="rounded-sm" src="{{ asset('img/registrar.jpg') }}" alt="Imagen Logout">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <div>
                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                            Nombre
                        </label>
                        <input type="text" name="name" id="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                        @error('name')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <div>
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                            Username
                        </label>
                        <input type="text" name="username" id="username" placeholder="Tu Nombre de Usuario" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}">
                        @error('username')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
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
                    <div>
                        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                            Repetir Password
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ingresa de nuevo tu contraseña" class="border p-3 w-full rounded-lg">
                        @error('password_confirmation')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection