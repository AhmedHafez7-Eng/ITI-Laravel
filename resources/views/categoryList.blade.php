@if (Auth::check())
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    </x-app-layout>
@else
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"
        style="gap:0 20px; padding:15px 30px; justify-content: space-between;">
        <a class="navbar-brand" href="#">Laravel</a>
        <div class="links">
            <a class="btn btn-success" href="{{ route('login') }}">Login</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
        </div>
    </nav>
@endif



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Categories</title>
<style>
    main {
        background-color: #333;
    }

    h2 {
        color: #FFF;
    }

    .pagination {
        justify-content: center;
    }

    .pagination li {
        width: 50px;
        text-align: center;
    }

    .emptyRecords {
        text-align: center;
    }

</style>
{{-- </head>

<body class="bg-dark"> --}}

<div class="container">
    <br>
    @if (session('midError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>UnAuthorized, </strong> {{ session('midError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <br>
    <h2>Categories list</h2><br>
    <a class="btn btn-primary" href="/create">Create Category</a><br><br>
    <a class="btn btn-info" href="/showArticles">See Articles</a><br><br>
    <div class="row">
        <table class="table table-success">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            @if (!empty($categories) && $categories->count())
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/delete/{{ $category->id }}">Delete </a>
                            <a class="btn btn-info" href="/update/{{ $category->id }}">Update </a>
                            <a class="btn btn-success" href="/show/{{ $category->id }}">show </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="emptyRecords" colspan="10">No Categories Found.</td>
                </tr>
            @endif
        </table>
    </div>
    {{-- Pagination --}}
    {!! $categories->links() !!} <br><br>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

{{-- </x-app-layout> --}}
