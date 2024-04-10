@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm">
                <input type="text" value="{{old('material')}}" name="material" placeholder="Chất liệu">
            </div>
            <div class="admin-content-main-content-two-input">
                <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán">
                <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm">
            </div>
            <div class="admin-content-main-content-two-input">
                <select name="category" class="category-dropdown">
                    <option value="" disabled selected>Choose a category</option>
                    <option value="1">Pants</option>
                    <option value="2">Jacket</option>
                    <option value="3">T-Shirt</option>
                    <option value="4">Vest</option>
                    <option value="5">Polo</option>
                    <option value="6">Dress</option>
                    <option value="7">Accessory</option>
                </select>
            </div>
            <textarea class="editor_des" value="{{old('description')}}" name="description" placeholder="Đặc điểm nổi bật" id=""></textarea>
            <br>
            <textarea class="editor_content" value="{{old('content')}}" name="content" placeholder="Mô tả sản phẩm" id=""></textarea>
            <br>
            <button type="submit" class="main-btn">Thêm Sản Phẩm</button>
        </div>
        <div class="admin-content-main-content-right">
            <div class="admin-content-main-content-right-image">
                <label for="file">Ảnh đại diện</label>
                <input type="file" id="file">
                <input type="hidden" name="image" id="input-file-img-hiden">
                <div class="image-show" id="input-file-img">

                </div>
            </div>
            <div class="admin-content-main-content-right-images">
                <label for="files">Ảnh sản phẩm</label>
                <input type="file" id="files" multiple>
                <div class="images-show" id="input-file-imgs">
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
        .create(document.querySelector('.editor_des'), {
            // Editor configuration.
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(handleSampleError);
    ClassicEditor
        .create(document.querySelector('.editor_content'), {
            // Editor configuration.
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(handleSampleError);
</script>

@endsection