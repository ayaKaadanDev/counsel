<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/bootstrap.css">

<x-app-layout>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('counsels.create')}}">create a new counsel</a>
            <a class="navbar-brand text-white" href="{{route('counsels.index')}}">show the counsels</a>
            <a class="navbar-brand text-white" href="{{route('show.all')}}">show the wallets</a>
            {{-- <a class="navbar-brand text-white" href="{{route('all.exp.with.info')}}">show all the experts</a> --}}
        </div>
    </nav>

    <div class="p-5">
        <div class="mt-4 mb-5">
            <table class="table shadow p-3 mb-5 bg-white rounded">
                <thead>
                <tr>
                    <th scope="col">scope</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($counsel as $c)
                    <tr>
                        <td>{{$c->scope}}</td>
                        <td>
                            <a href="{{route('counsels.edit',$c->id)}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                            <form action="{{route('counsels.destroy',$c->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="background-color: red">delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            </div>
        </div>









</x-app-layout>
