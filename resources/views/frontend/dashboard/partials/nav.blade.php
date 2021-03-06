<nav class="woocommerce-MyAccount-navigation">
    <ul>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
            <a href="{{ route('user-dashboard')}}">Dashboard</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
            <a href="{{ route( 'user-order' )}}">Orders</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
            <a href="my-account-downloads.html">Downloads</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
            <a href="my-account-address.html">Addresses</a>
        </li>
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
            <a href="{{ route('user-account')}}">Account details</a>
        </li>
        
        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
        <form class="nav-link" action="{{ route('logout')}}" method="POST">
            @csrf
            <input class="nav-link" type="submit" value="Logout">
        </form>
        </li>

    </ul>
</nav>