@extends('master')
@section('content')
<div class="d-flex align-items-center py-3">
    <h2>All Products</h2>
</div>
<div class="tableblock p-4">
    <div class="row" id="">
        <div class="col-sm-4">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="./images/pro1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <span href="#" class="btn btn-primary">Go somewhere</span> -->
                    <span href="#" class="fa fa-trash" title="Do you want to remove this product?"></span>
                    <span href="#" class="fa fa-heart float-right" title="Do you like this product?"></span>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="./images/pro1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <span href="#" class="btn btn-primary">Go somewhere</span> -->
                    <span href="#" class="fa fa-trash" title="Do you want to remove this product?"></span>
                    <span href="#" class="fa fa-heart float-right" title="Do you like this product?"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="./images/pro1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <span href="#" class="btn btn-primary">Go somewhere</span> -->
                    <span href="#" class="fa fa-trash" title="Do you want to remove this product?"></span>
                    <span href="#" class="fa fa-heart float-right" title="Do you like this product?"></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 pt-4">
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="./images/pro1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <span href="#" class="btn btn-primary">Go somewhere</span> -->
                    <span href="#" class="fa fa-trash" title="Do you want to remove this product?"></span>
                    <span href="#" class="fa fa-heart float-right" title="Do you like this product?"></span>
                </div>
            </div>
        </div>
    </div>

    <table id='productTable' width='100%' border="1" style='border-collapse: collapse;'>
        <thead>
            <tr>
                <td>S.no</td>
                <td>Image</td>
                <td>Title</td>
                <td>Description</td>
            </tr>
        </thead>
    </table>

</div>
@endsection