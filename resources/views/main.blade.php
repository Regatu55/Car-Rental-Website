<!DOCTYPE html>
<html>
<head>
    <title>Rent Car</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" rel="stylrsheet">
    
</head>
<body>
   
             
    
  
<div class="container mt-5">
    <h2 class="mb-3">Rent Car</h2>
        
    @php
    $totalQuantity = 0;
    @endphp
    
    @if(session('cart'))
    @foreach(session('cart') as $item)
        @php
        $totalQuantity += $item['quantity'];
        @endphp
    @endforeach
    @endif

    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ url('cart-list') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Rent <span class="badge text-bg-danger" id="cart-quantity">{{ $totalQuantity }}</span>
            </a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')

