<h1>Welcome! <span style="color:coral"> {{ Auth::guard('admin')->user()->name }}</span>, this is your panel</h1>


<a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>Logout</a>
