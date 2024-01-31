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

    {{-- <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">search</button>
      </div> --}}

    {{-- <h1>this is user dashboard</h1> --}}

</x-app-layout>
