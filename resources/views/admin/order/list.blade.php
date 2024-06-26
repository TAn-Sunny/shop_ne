@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ghi Chú</th>
                <th>Chi tiết</th>
                <th>Ngày</th>
                <!-- <th>Trạng thái</th> -->
                <th>Tùy biến</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order -> id}}</td>
                    <td>{{$order -> name}}</td>
                    <td>{{$order -> phone}}</td>
                    <td>{{$order -> email}}</td>
                    <td>{{$order -> address}}, {{$order -> city}}</td>
                    <td>{{$order -> note }}</td>
                    <td>
                        <a class="edit-class" href="/admin/order/detail/{{$order -> order_detail}}">Chi tiết</a>
                    </td>
                    <td>{{$order -> created_at}}</td>
                    <!-- <td>
                        <a class="non_confirm-order" href="">Đã xác nhận</a>
                    </td> -->
                    <td>
                    <a onclick="removeRow(product_id={{$order -> id}},url ='/admin/product/delete')" class="delete-class" href="#">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('footer')
<script>
    function removeRow(product_id,url){
      if(confirm('Bạn có chắn chắn muốn xóa order này không?')){
            $.ajax({
            url: url,
            data: {product_id},
            method: 'GET',
            dataType:'JSON',
            success: function(res){
                if(res.success == true){
                    location.reload();
                }
            }
        }
        )
      }
    }
</script>
@endsection
