<ul>
	<li><b>MENU</b></li>
	<li><a href="#">Menu 1</a></li>
	<li><a href="#">Menu 2</a></li>
	<li><a href="#">Menu 3</a></li>
	<li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>	
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
													 </ul>