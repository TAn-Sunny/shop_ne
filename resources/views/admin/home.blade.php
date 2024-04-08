<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.parts.head')
</head>
<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                @include('admin.parts.sidebar')
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    @include('admin.parts.header')
                </div>
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <H1>Dashboard</H1>
                    </div>
                    <div class="admin-content-main-content">
                        <!--  Nội dung nằm ở đây -->
                        <h1>Chào mừng bạn đến với trang admin của BAZAAR!</h1>
                        <!-- <h1 style="color: #333; font-size: 32px; font-weight: bold;">CHÀO MỪNG BẠN ĐẾN VỚI TRANG ADMIN CỦA BAZAAR!</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
       @include('admin.parts.footer')
    </footer>
</body>
</html>
