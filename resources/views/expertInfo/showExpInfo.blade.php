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



    <div class="shadow border d-flex flex-column m-0 mx-auto mt-4" style="width:100%; max-width:30rem;">
        <div class="p-5">
          <div class="mt-4 mb-5">
            <h4 class="h2 font-weight-bold" style="color: #B99671">{{$expertInfo->user->name}}'s info</h4>
          </div>

          <div class="cdb-form">
              name:  {{$expertInfo->user->name}}
            </div>
            <div class="cdb-form">
               expertness: {{$expertInfo->expertness}}
            </div>
            <div class="cdb-form">
               phone number: {{$expertInfo->phone_num}}
            </div>
            <div class="cdb-form">
                address: {{$expertInfo->address}}
            </div>
            <div class="cdb-form">
                scope: {{$expertInfo->counsel->scope}}
            </div>

        </div>
      </div>









</x-app-layout>
