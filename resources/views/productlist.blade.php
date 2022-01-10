@extends('layout')
@section('content')
    <div class="container-fluid">
        <h2>Danh sách sản phẩm</h2>
        <table class="table table-striped">
            <tr>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Đơn vị tính</th>
                <th>Đơn giá</th>
                <th>Loại</th>
                <th>Hình sản phẩm</th>
                <th></th>
            </tr>
            @foreach($product as $p)
            <tr>
                <td>{{$p->ProductId}}</td>
                <td>{{$p->ProductName}}</td>
                <td>{{$p->Unit}}</td>
                <td>{{$p->Price}}</td>
                <td>{{$p->Category->CategoryName}}</td>
                <td>
                    <img src="images/{{$p->Img}}" width="50" height="40">
                </td>
                <td>
                    <a href="{{route('productdel', ['ProductId'=>$p ->ProductId])}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{$product->links()}}
    </div>
@stop