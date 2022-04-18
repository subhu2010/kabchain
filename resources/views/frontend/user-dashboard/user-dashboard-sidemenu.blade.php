
<div class="col-lg-12 mb-4">
	<ul class="nav flex-row nav-account">
		<li class="nav-item {{ (request()->is('user-dashboard*')) ? 'active' : '' }}">
			<a class="nav-link " href="{{url('user-dashboard')}}">Dashboard</a>
		</li>
		<li class="nav-item {{ (request()->is('user-order*','view-order*')) ? 'active' : '' }}">
			<a class="nav-link" href="{{url('user-order')}}">Orders</a>
		</li>
		<li class="nav-item {{ (request()->is('user-address*')) ? 'active' : '' }}">
			<a class="nav-link" href="{{url('user-address')}}">Address</a>
		</li>
		<li class="nav-item {{ (request()->is('user-account*')) ? 'active' : '' }}">
			<a class="nav-link" href="{{url('user-account')}}">Account Deatil</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Logout</a>
		</li>
	</ul>
</div>