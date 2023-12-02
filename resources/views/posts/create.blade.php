@extends('layouts.app')

@section('titulo')
    Crea una nueva Publicacion
@endsection

@push('styles')
    @vite('resources/css/dropzone.css')
@endpush
@push('scripts')
    @vite('resources/js/app.js')
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-lg mt-10 md:mt-0">
            <form action="{{ route('posts.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo de la publicacion" class="border p-3 w-full rounded-lg @error('titulo') border-red-500 @enderror"
                    value="{{ old('titulo') }}">
                    @error('titulo')
                        <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </label>
                    <textarea 
                        name="descripcion"
                        id="descripcion"
                        placeholder="Descripcion de la publicacion" 
                        class="border p-3 w-full rounded-lg">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}">
                    @error('imagen')
                        <span class="text-white bg-red-500 block rounded-lg text-center text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Crear Post" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection