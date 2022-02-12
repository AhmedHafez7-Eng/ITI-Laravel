<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <!DOCTYPE html>
<html>

<> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Articles</title>

    <style>
        main {
            background-color: rgb(151, 25, 25);
            height: 100vh;
            color: #FFF;
        }

    </style>

    <div class="container">
        <br>
        <div class="row">
            <h2>Create Article </h2>

            <form method="GET" action="{{ route('article.save') }}">
                @csrf
                Name
                <input class="form-control" type="text" name="name">
                @error('name')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror<br>
                Details
                <input class="form-control" type="text" name="details">
                @error('details')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror<br>
                Slug
                <input class="form-control" type="text" name="slug">
                @error('slug')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror<br>
                Category ID
                <input class="form-control" type="text" name="user_id" value="">
                @error('Category ID')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror<br>
                is used: <br>
                Yes:
                <input type="radio" name="is_used" value=1>
                No:<input type="radio" name="is_used" value=0>
                @error('is_used')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
                <br><br><button class="btn btn-primary">Submit</button>
                <a class="btn btn-info" href="/showArticles">Cancel</a><br>
            </form>
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
</x-app-layout>
