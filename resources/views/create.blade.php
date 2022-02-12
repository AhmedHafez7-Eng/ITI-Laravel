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
    <title>Categories</title>

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
            <h2>Create Category</h2>
            <form method="GET" action="{{ route('categories.save') }}">
                @csrf
                Name: <input type="text" name="name" class="form-control">
                @error('name')
                    <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
                <br>
                <button class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="/showCategories">Cancel</a><br>
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
