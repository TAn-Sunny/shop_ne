@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Tùy biến</th>
            </tr>
        </thead>
        <tbody>
            @php
                total = 0;
            @endphp
            @foreach ($products as $product)
            @php
                $price = $product -> price_sale * Session::get('/frontend/cart')[$product -> id];
                total += price;
            @endphp
            <tr>
                <td>{{$product -> id}}</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product1.jpg')}}" alt="" ></td>
                <td>{{$product -> name}}</td>
                <td>{{number_format($product -> price_sale)}}</td>
                <td>{{order_detail[$product -> id]}}</td>
                <td>{{number_format($price)}}</td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            @endforeach

            <tr>
                <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                <td style="font-weight: 700;">238.000</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
