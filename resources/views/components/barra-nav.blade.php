<nav class="bg-purple-400">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <img class="w-8 h-8 rounded-full" src="{{Storage::url('images/imagenInicio.jpg')}}" alt="imagen de inicio" />


        @if (in_array(Request::path(), ['categories', 'products/create', 'products/edit']))
        <a href="{{ route('products.index') }}"
            class="text-purple-800 font-bold px-4 py-2 shadow rounded-xl hover:text-white">
            Ir a Productos
        </a>
        @else
        <a href="{{ route('categories.index') }}"
            class="text-purple-800 font-bold px-4 py-2 shadow rounded-xl hover:text-white">
            Ir a Categorías
        </a>
        @endif

    </div>
</nav>