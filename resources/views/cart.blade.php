@extends('template')

@section('content')

<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section id=""class="jumbotron jumbs text-center">
    <div class="container ">
        <h1 class="jumbotron-heading">Check your products</h1>
     </div>
</section>

<div class=" jumbs container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    @forelse($products as $product)
                        <tr>
                            <td><img width="80px"src="{{$product->image}}" /> </td>
                            <td>{{$product->name}} </td>
                            <td>In stock</td>
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right">{{$product->price}}</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        @empty
                        <div class="container mb-4 d-flex justify-content-center">
                            <h1>Empty cart, please select a product</h1>
                        </div>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light"><a href="/">Keep buying</a></button>
                </div>
                <div class="col-sm-12 col-md-6 text-right lol">
                    <button class="btn btn-block btn-light text-uppercase"><a href="/finishingOrder/add/{id}">Finish</a></button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

