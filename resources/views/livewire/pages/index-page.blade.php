<div class="py-3 px-5">
   <h1 class="text-3xl font-semibold text-center mb-4">Product List</h1>
   <ul class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 place-items-center gap-4">
    @foreach ($products as $product)
        <li class="shadow-lg py-5 px-6">
            <h2 class="">
            {{$product->name}}
            </h2>
            <p>Description: {{$product->description}}</p>
            <p>Brand: {{$product->brand}}</p>
            <p>Price: {{$product->price}}</p>
            <p>Stock: {{$product->stock}}</p>
        @can('edit-records')
        <div class=" flex justify-end gap-3">
            <button class="btn border-green-600 hover:bg-green-600 " >Edit</button>
            <button class="btn border-red-600 hover:bg-red-600">Delete</button>
        </div>

        @endcan
        </li>
    @endforeach
   </ul>
</div>
