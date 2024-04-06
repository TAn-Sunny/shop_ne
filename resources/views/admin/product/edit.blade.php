@extends('admin.main')
@section('content')
<form action="" enctype="multipart/form-data" method="post" >
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{$product -> name}}" name="name" placeholder="Tên sản phẩm">
                <input type="text" value="{{$product -> material}}" name="material" placeholder="Chất liệu">
            </div>
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{$product -> price_nomal}}" name="price_nomal" placeholder="Giá bán">
                <input type="text" value="{{$product -> price_sale}}" name="price_sale" placeholder="Giá giảm">
            </div>
            <textarea class="editor_des" value="" name="description" placeholder="Đặc điểm nổi bật" id="" >{{$product -> description}}</textarea>
            <br>
            <textarea class="editor_content" value="" name="content" placeholder="Mô tả sản phẩm" id="" >{{$product -> content}}</textarea>
            <br>
            <button type="submit" class="main-btn">Cập nhật Sản Phẩm</button>
        </div>
        <div class="admin-content-main-content-right">
            <div class="admin-content-main-content-right-image">
                <label for="file">Ảnh đại diện</label>
                <input type="file" id="file">
                <input type="hidden" name="image" value="{{$product -> image}}" id="input-file-img-hiden">
                <div class="image-show" id="input-file-img">
                    <img src="{{Asset($product -> image)}}" alt="">
                </div>
            </div>
            <div class="admin-content-main-content-right-images">
                <label for="files">Ảnh sản phẩm</label>
                <input type="file" id="files" multiple>
                <div class="images-show" id="input-file-imgs">
                    @php
                        $product_images = explode("*", $product -> images);
                    @endphp
                    @foreach($product_images as $product_image)
                        <img src="{{Asset($product -> image)}}" alt="">
                        <input type="hidden" name="images[]" value="{{$product_image}}" id="input-file-img-hiden">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>
@endsection
@section('footer')
<script src="{{Asset('backend/Asset/ckeditor5_col/ckeditor.js')}}"></script>
<script src="{{Asset('backend/Asset/ckeditor5_col/script.js')}}"></script>
<script src="{{Asset('backend/Asset/JS/product_ajax.js')}}"></script>
<script>
    ClassicEditor
	.create( document.querySelector( '.editor_des' ), {
		// Editor configuration.
	} )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( handleSampleError );
ClassicEditor
	.create( document.querySelector( '.editor_content' ), {
		// Editor configuration.
	} )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( handleSampleError );
</script>

@endsection
