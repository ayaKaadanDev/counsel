<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('expert_infos.create')}}">create my information</a>
            <a class="navbar-brand text-white" href="{{route('expert_infos.index')}}">show my information</a>
            <a class="navbar-brand text-white" href="{{route('Dates.create')}}">create new date</a>
            <a class="navbar-brand text-white" href="{{route('Dates.index')}}">show my date</a>
            <a class="navbar-brand text-white" href="{{route('wallets.create')}}">create my wallet</a>
            <a class="navbar-brand text-white" href="{{route('wallets.index')}}">show my wallet</a>

            <a class="navbar-brand text-white" href="{{route('expertReservation')}}">my reservation</a>

        </div>
    </nav>
    </nav>


    <div class="p-5">
        <div class="mt-4 mb-5">
            <table class="table shadow p-3 mb-5 bg-white rounded">
                <thead>
                <tr>
                    <th scope="col">expert name</th>
                    <th scope="col">date</th>
                    <th scope="col">status</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($date as $d)
                    <tr>
                        <td>{{$d->user->name}}</td>
                        <td>{{$d->date}}</td>
                        <td>{{$d->status}}</td>
                        <td>
                            <a href="{{route('Dates.edit',$d->id)}}" class="btn btn-primary">edit</a>
                        </td>
                        <td>
                            <form action="{{route('Dates.destroy',$d->id)}}" method="POST">
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
