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
    h2,
    h3 {
        color: #FFF;
    }

    main {
        background-color: rgb(6, 184, 44);
        height: 100vh;
    }

</style>

<div class="container">
    <br>
    <h2>{{ $categories->name }} Data</h2><br>
    <a class="btn btn-warning" href="/showCategories">Back to Categories</a><br><br>
    <div class="row">
        <table class="table table-info">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>{{ $categories->id }}</td>
                <td>{{ $categories->name }}</td>
            </tr>
        </table>
        @if (count($related) > 0)
            <h3>Related Articles</h3>
            <table class="table table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Category ID</th>

                </tr>
                @foreach ($related as $rel)
                    <tr>
                        <td>{{ $rel->id }}</td>
                        <td>{{ $rel->name }}</td>
                        <td>{{ $rel->details }}</td>
                        <td>{{ $rel->user_id }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <h1>This category has no articles yet</h1>
        @endif
    </div>
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
{{-- </body>

</html> --}}
{{-- </x-app-layout> --}}
