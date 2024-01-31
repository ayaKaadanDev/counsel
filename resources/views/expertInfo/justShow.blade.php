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
                    <th scope="col">name</th>
                    {{-- <th scope="col">expertness</th>
                    <th scope="col">phone number</th>
                    <th scope="col">address</th> --}}
                    <th scope="col">counsel</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($expertInfo as $ei)

                        <tr>
                            <td><a href="{{route('show.expert.info',$ei->id)}}">{{$ei->user->name}}</a></td>
                            <td>{{$ei->counsel->scope}}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            </div>
        </div>


</x-app-layout>
