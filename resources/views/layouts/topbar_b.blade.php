 <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
           
                <div class="navbar-brand" >
                    <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-menu">
                         <!-- navbar start, navbar end -->
                         <div class="navbar-start">
                            <a class="navbar-item" href="{{ route('lotteries')}}">Events</a>
                            <a class="navbar-item" href="{{ route('adminHome') }}">List</a>
                            <a class="navbar-item" href="{{ route('prizes') }}">Prizes</a>
                            <a class="navbar-item" href="{{ route('winners') }}">Winners</a>
                         </div>


                         <div class="navbar-end">
                            <!-- navbar items -->
                            @guest
                       
                                <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                         
                          
                                <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                          
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="navbar-dropdown  is-right is-boxed">
                                <a class="navbar-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                

                                </div>





                             </div>
                        @endguest
                         </div>
                 </div>
        </nav>