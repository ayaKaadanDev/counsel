<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('all.exp.with.info')}}">show all the experts</a>
            <a class="navbar-brand text-white" href="{{route('wallets.create')}}">create my wallet</a>
            <a class="navbar-brand text-white" href="{{route('wallets.index')}}">show my wallet</a>
            <a class="navbar-brand text-white" href="{{route('transferView')}}">transfer money and reservation</a>

            <a class="navbar-brand text-white" class="navbar-brand text-white" href="{{route('reservations.index')}}">show my reservations</a>


            <a class="navbar-brand text-white btn btn-black"  href="{{route('expert')}}" style="background-color: black ; color:white">search</a>


        </div>
    </nav>

    <div class="p-5">
        <div class="mt-4 mb-5">
            <table class="table shadow p-3 mb-5 bg-white rounded">
                <thead>
                <tr>
                    <th scope="col">my name</th>
                    <th scope="col">date</th>
                    <th scope="col">expert's name</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($reservation as $r)
                    <tr>
                        <td>{{$r->user->name}}</td>
                        <td>{{$r->date->date}}</td>
                        <td>{{$r->date->user->name}}</td>
                        <td>
                            <a href="{{route('reservations.edit',$r->id)}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                            <form action="{{route('reservations.destroy',$r->id)}}" method="POST">
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
