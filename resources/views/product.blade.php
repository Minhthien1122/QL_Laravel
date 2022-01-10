@extends('layout')
@section('content')
     <div class="container-fluid">
        <div class="row">
            @foreach ($product as $p)
            <div class="product col-sm-3 col-md-3 col-lg-3">
                <a href="{{route('productdetail', ['ProductId'=>$p->ProductId])}}">{{$p->ProductName}}</a><br>
                <a href="{{route('productdetail', ['ProductId'=>$p->ProductId])}}">
                    <img src="images/{{$p->Img}}" height="50px">
                </a>
                <br>@php echo number_format($p->Price).' VNĐ'; @endphp
            </div>
            @endforeach
        </div>
    </div>
    {{$product->links()}}
@stop