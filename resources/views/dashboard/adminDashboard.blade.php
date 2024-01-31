<x-app-layout>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('counsels.create')}}">create a new counsel</a>
            <a class="navbar-brand text-white" href="{{route('counsels.index')}}">show the counsels</a>
            <a class="navbar-brand text-white" href="{{route('show.all')}}">show the wallets</a>
            {{-- <a class="navbar-brand text-white" href="{{route('all.exp.with.info')}}">show all the experts</a> --}}
        </div>
    </nav>


</x-app-layout>
