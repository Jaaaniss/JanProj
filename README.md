 <li class="nav-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="vjg"><b>Login</b> <span class="caret"></span></a>
                                    <div class="dropdown-menu">
                                        <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
                                            <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control @error('password') is invalid @enderror"  id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        @error('password')
                                            <span class="">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                        <button id="vjg2" type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/register">New around here? Sign up</a>
                                    </div>
                                </li>