    @forelse($products as $key=>$product)
    <div class="col-sm-4 pt-4">
        <div class="card" style="width: 14rem;">
            <img class="card-img-top" src="{{ url('/')}}/images/pro1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" title="Click here to details.">
                    <a href="{{route('products.show', $product->id)}}" style="text-decoration: none;">
                        {{ $product->title }}
                    </a>
                </h5>
                <p class="card-text">
                    {{ $product->custom_description }}
                </p>
                <!-- <span href="#" class="btn btn-primary">Go somewhere</span> -->
                <span href="javscript:void(0);" onclick='removeProduct("{{ $product->id }}");' class="fa fa-trash trash" title="Do you want to remove this product?"></span>

                <form action="{{  route('products.destroy', $product->id) }}" method="POST" id="product-form-{{ $product->id }}" style='display:none;'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>

                <span class="fa fa-thumbs-up float-right like" onclick='isLiked("{{ $product->id }}")' title="Do you like this product?"></span>
            </div>
        </div>
    </div>
    @empty
    @endforelse