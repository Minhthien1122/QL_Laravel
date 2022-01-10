@extends('layout')
@section('content')
    <div class="productdetail container-fluid">
        Mã sản phẩm: {{$product->ProductId}}<br>
        Tên sản phẩm: {{$product->ProductName}}<br>
        Đơn vị tính: {{$product->Unit}}<br>
        Đơn giá: @php echo number_format($product->Price); @endphp<br>
        <img src="images/{{$product->Img}}" width="800" height="500">
    </div>
@stop