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
        * {
            text-transform: capitalize;
        }

        main {
            background-color: #333;
        }

        h2 {
            color: #FFF;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container">
        <br>
        @if (session('midError'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>UnAuthorized, </strong> {{ session('midError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <br>
        <h2>All Articles</h2><br>
        <a class="btn btn-primary" href="/createArticle">Create Article</a><br><br>
        <a class="btn btn-warning" href="/showCategories">See Categories</a><br><br>
        <div class="row">

            <table class="table table-info">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Category ID</th>
                    <th>Actions</th>
                </tr>
                @if (!empty($articles) && $articles->count())
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->details }}</td>
                            <td>{{ $article->user_id }}</td>
                            <td>
                                <a class="btn btn-danger" href="/deleteArticle/{{ $article->id }}">Delete </a>
                                <a class="btn btn-success" href="/updateArticle/{{ $article->id }}">Update </a>
                                <a class="btn btn-primary" href="/showArticle/{{ $article->id }}">show </a>
                            </td>


                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="emptyRecords" colspan="10">No Articles Found.</td>
                    </tr>
                @endif
            </table>
        </div>
        {{-- Pagination --}}
        {!! $articles->links() !!} <br><br>
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
