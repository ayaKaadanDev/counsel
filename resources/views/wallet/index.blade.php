<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
    </nav>


    <div class="p-5">
        <a href="{{route('home')}}"><button class="btn btn-dark" type="button">home</button></a>
        <div class="mt-4 mb-5">
            <table class="table shadow p-3 mb-5 bg-white rounded">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">money</th>
                    {{-- <th scope="col">transfer</th> --}}
                    {{-- <th scope="col">edit</th>
                    <th scope="col">delete</th> --}}
                </tr>
                </thead>
                <tbody>
                    @foreach ($wallet as $w)
                    <tr>
                        <td>{{$w->user->name}}</td>
                        <td>{{$w->money}}</td>
                        {{-- <td>
                            <a href="{{route('',$w->id)}}" class="btn btn-primary">edit</a>
                        </td> --}}
                        {{-- <td>
                            <a href="{{route('Dates.edit',$d->id)}}" class="btn btn-primary">edit</a>
                        </td> --}}
                        {{-- <td>
                            <form action="{{route('Dates.destroy',$d->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="background-color: red">delete</button>
                            </form>
                        </td> --}}
                    </tr>

                    @endforeach
                </tbody>
            </table>
            </div>
        </div>




</x-app-layout>
