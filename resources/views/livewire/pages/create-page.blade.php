<div class="flex flex-col items-center">
    <div class="w-full flex justify-start py-2 px-3">
        <a href="/products" wire:navigate> <- Back to Homepage</a>
    </div>
    <h1 class="text-3xl text-center font-semibold my-6">Add New Product</h1>

    <div class="form w-1/2">
        <form wire:submit='login' >
            <div class="inputs">
              <label for="email">Product Name: </label>
               <input type="text" name="name" wire:model='name'
               class="@error('name') border-red-500 @enderror"
               >
               <span>@error('email') <span class="error">{{ $message }}</span> @enderror
              </span>
            </div>

            <div class="inputs">
              <label for="description" >Description</label>
            <textarea name="description" id="description" cols="30" rows="5" placeholder="Product description..."></textarea>
            <span>@error('description') <span class="error">{{ $message }}</span> @enderror
            </span>
            </div>

            <div class="inputs">
                <label for="brand">Brand Name: </label>
                 <input type="text" name="brand" wire:model='brand'
                 class="@error('brand') border-red-500 @enderror"
                 >
                 <span>@error('brand') <span class="error">{{ $message }}</span> @enderror
                </span>
              </div>

            <div class="inputs">
                <label for="price">Price: </label>
                 <input type="text" name="price" wire:model='price'
                 class="@error('price') border-red-500 @enderror"
                 >
                 <span>@error('price') <span class="error">{{ $message }}</span> @enderror
                </span>
              </div>

            <div class="inputs">
                <label for="stock">Stock: </label>
                 <input type="text" name="stock" wire:model='stock'
                 class="@error('stock') border-red-500 @enderror"
                 >
                 <span>@error('stock') <span class="error">{{ $message }}</span> @enderror
                </span>
              </div>

            <button type="submit" class="login-register-btn">Add Product</button>
         </form>
    </div>
</div>
