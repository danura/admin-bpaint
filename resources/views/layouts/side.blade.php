
     <!--<li
        class="dropdown {{ setActive('admin/role'). setActive('admin/permission'). setActive('admin/user') }}">
        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users
            Management</span></a>
        @endif
        
        <ul class="dropdown-menu">
            @can('roles.index')
                <li class="{{ setActive('admin/role') }}"><a class="nav-link"
                    href="{{ route('admin.role.index') }}"><i class="fas fa-unlock"></i> Roles</a>
            </li>
            @endcan

            @can('permissions.index')
                <li class="{{ setActive('admin/permission') }}"><a class="nav-link"
                href="{{ route('admin.permission.index') }}"><i class="fas fa-key"></i>
                Permissions</a></li>
            @endcan

            @can('users.index')
                <li class="{{ setActive('admin/user') }}"><a class="nav-link"
                    href="{{ route('admin.user.index') }}"><i class="fas fa-users"></i> Users</a>
            </li>
            @endcan
        </ul>
    </li>-->
    
    @foreach (Helpers::Mainmenu() as $mm)
    <li class="dropdown">
        
        @if ($mm->m_routes=='#')
            <a href="#" class="nav-link has-dropdown"><i class="{{ $mm->m_icon }}"></i><span>{{ $mm->m_name }}</span></a>
            <ul class="dropdown-menu">
                @foreach (Helpers::Submenu() as $sm)
                    @if ($mm->m_id==$sm->m_parent_id)
                    <li >
                        <a class="nav-link"  href="{{ route('admin.role.index') }}"> <i class="fas fa-unlock"></i> {{ $sm->m_name }}
                        </a>
                    </li>
                    @endif
                @endforeach
            
            </ul>
        @else 
            <a href="#" class="nav-link "><i class="{{ $mm->m_icon }}"></i><span>{{ $mm->m_name }}</span></a>
        @endif
    </li>
    @endforeach

   <!-- @can('sliders.index')
    <li class="{{ setActive('admin/slider') }}"><a class="nav-link"
            href="#"><i class="fas fa-laptop"></i>
            <span>Sliders</span></a></li>
    @endcan-->


