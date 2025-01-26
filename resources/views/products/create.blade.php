@extends('plantillas.plantilla')

@section('titulo')
Nuevo Producto
@endsection

@section('cabecera')
<h1 class="text-xl text-center text-purple-900 font-bold dark:text-white m-5"> -- CREAR UN PRODUCTO -- </h1>
@endsection

@section('contenido')
<div class="overflow-x-auto shadow rounded-lg w-2/4 m-auto bg-purple-200 p-5">
    <form class="mx-auto" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre del producto</label>
            <input value="{{old('nombre')}}" type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            <x-error for="nombre" />
        </div>

        <div class="mb-5">
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
            <textarea rows="2" id="descripcion" name="descripcion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{old('descripcion')}}</textarea>
            <x-error for="descripcion" />
        </div>

        <div class="mb-5">
            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 ">Stock</label>
            <input value="{{old('stock')}}" type="text" id="stock" name="stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
            <x-error for="stock" />
        </div>

        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 ">Categoría</label>
            <select id="category_id" name="category_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">Seleccione una categoria</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}" @selected(old('category_id')==$categoria->id)>{{$categoria->nombre}}</option>
                @endforeach
            </select>
            <x-error for="category_id" />
        </div>

        <div class="mb-4">
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
            <div class="flex items-center">
                <input type="file" id="imagen" name="imagen" class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" accept="image/*" oninput="preview.src=window.URL.createObjectURL(this.files[0])">
                <img id="preview" src="{{ old('imagen') ? Storage::url(old('imagen')) : Storage::url('images/defaultimage.jpg') }}"  alt="Vista previa" class="ml-4 w-16 h-16 object-cover">
            </div>
            <x-error for="imagen" />
        </div>

        <div class="text-right">
            <button type="reset" class="ml-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                reset
            </button>

            <a href="{{route('products.index')}}" class="ml-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                cancelar
            </a>

            <button type="submit" class="ml-3 mr-3 text-purple-800 font-semibold font-madium px-4 py-1 shadow rounded-xl bg-purple-300">
                crear
            </button>
        </div>
    </form>
</div>
@endsection