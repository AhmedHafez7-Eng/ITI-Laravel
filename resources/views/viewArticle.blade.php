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
            background-color: rgb(6, 184, 44);
            height: 100vh;
        }

        h2 {
            color: #FFF;
        }

    </style>

    <div class="container">
        <br>
        <h2 style="color: #FFF;">{{ $articles->name }} Data</h2><br>
        <a class="btn btn-warning" href="/showArticles">Back to Articles</a><br>
        <br>
        <div class="row">
            <table class="table table-success">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>details</th>
                    <th>related category name</th>
                </tr>
                <tr>

                    <td>{{ $articles->id }} </td>
                    <td>{{ $articles->name }} </td>
                    <td>{{ $articles->details }} </td>
                    <td>{{ $category->name }}</td>
                </tr>
            </table>
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
