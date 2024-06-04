<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Explore</li>
        <li class="nav-item">
            <a href="{{ route('frontend.dashboard') }}" class="nav-link">
                <ion-icon name="home-outline"></ion-icon><span class="ml-4">Dashboard</span></a>
        </li>
        <li class="menu-header">Detail</li>
        <li class="nav-item">
            @if (auth()->user()->name == 'admin')
        <li><a class="nav-link" href="{{ route('products.index') }}"><ion-icon
                    name="storefront-outline"></ion-icon><span class="ml-4">Produk</span></a></li>
        <li><a class="nav-link" href="{{ route('product-categories.index') }}">
                <ion-icon name="file-tray-stacked-outline"></ion-icon><span class="ml-4">Kategori</span></a>
        </li>
    @else
        <li><a class="nav-link" href="{{ route('cart') }}">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="ml-4">My Cart</span></a></li>
        @endif
        </li>


    </ul>
</aside>
