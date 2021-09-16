<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
{{--<li class="nav-item">--}}
{{--    <a href="{{ route('users') }}" class="nav-link active">--}}
{{--        <i class="nav-icon fas fa-copy"></i>--}}
{{--        <p>Clients</p>--}}
{{--    </a>--}}
{{--</li>--}}
<li class="nav-item ">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Clients
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" >
        <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>

    </ul>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-car"></i>
        <p>
            Cars
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" >
        <li class="nav-item">
            <a href="{{ route('car.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('car.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>

    </ul>
</li>