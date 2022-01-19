<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">TaskManagement</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/tasks') }}">Task</a></li>
            <li><a href="{{ url('/categories') }}">Category</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <form action="{{ route('logout') }} " method="POST">
                @csrf
                <button type="submit" class="btn btn-link" style="padding-top: 10px"><span
                        class="glyphicon glyphicon-log-out"></span>Logout
                </button>


            </form>

        </ul>


    </div>
</nav>
