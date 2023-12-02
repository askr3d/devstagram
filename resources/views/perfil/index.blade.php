@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <div>
                        <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                            Username
                        </label>
                        <input type="text" name="username" id="username" placeholder="Tu Nombre de Usuario" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}">
                        @error('username')
                            <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-5">
                    <div>
                        <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                            Imagen Perfil
                        </label>
                        <input type="file" name="imagen" id="imagen" class="border p-3 w-full rounded-lg" accept=".jpg, .jpeg, .png">
                    </div>
                </div>
                <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection