<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section {{set_active($activePage)}} ">
        <ul class="nav side-menu">
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                    <li><a href="index3.html">Dashboard3</a></li>
                </ul>
            </li>
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-pencil-square-o"></i> CMS <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.edit.banner')}}">Edit Banner</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.edit.about')}}">Edit About Us</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.list.program')}}">Kelas Dan Programs</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.list.contact')}}">Kontak</a></li>
                </ul>
            </li>
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-calendar"></i> Data Kelas <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.list.jadwal')}}">Jadwal Kelas</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.create.jadwal')}}">Jadwal Baru</a></li>
                </ul>
            </li>
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-users"></i> Data Siswa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.list.pengajar')}}">List Siswa</a></li>
                </ul>
            </li>
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-book"></i> Data Pengajar <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.create.pengajar')}}">Tambah Pengajar</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.list.pengajar')}}">List Pengajar</a></li>
                </ul>
            </li>
            <li class="{{ set_active($activePage) }}"><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" {{ set_show($activePage) }}>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.edit.profile')}}">Edit Profile</a></li>
                    <li class=" {{ set_active_child($activePage) }}"><a href="{{route('admin.edit.password')}}">Ubah Password</a></li>
                </ul>
            </li>

        </ul>
    </div>

</div>
