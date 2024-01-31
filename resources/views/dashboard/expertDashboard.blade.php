<x-app-layout>
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

        {{-- <h1>this is expert dashboard</h1> --}}

</x-app-layout>
