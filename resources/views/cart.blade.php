@extends('main')
  
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 50%">Product</th>
            <th style="width: 10%">Price</th>
            <th style="width: 30%">Quantity</th>
            <th style="width: 22%" class="text-center">Subtotal</th>
            <th style="width: 10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $item)
           @php $total += $item['price'] * $item['quantity']@endphp


                
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ isset($item['photo']) ? $item['photo'] : 'N/A' }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $item['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $item['price'] }}</td>
                   
                    <td data-th="Quantity">
                        <input type="number" value="{{$item['quantity']}}" class="form-control quantity cart_update " min="1"/>
                    </td>

                    <td data-th="Subtotal" class="text-center">{{ $item['price'] * $item['quantity'] }}</td>
                    <td class="actions" >
                        <button class="btn btn-outline-danger btn-sm delete-item"><i class="fa fa-trash o">Delete</i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
   <tr>
    <td colspan="5" style="text-align:right;"><h3><strong>Total {{$total}}</strong></h3>
   </tr>


        <tr>
            <td colspan="5" class="text-right">
                <form action="/session" method="POST">
                <a href="{{ url('/products-list') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <button class="btn btn-danger" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>Checkout</button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
  
@section('scripts')
<script type="text/javascript">
  
    $(".delete-item").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection