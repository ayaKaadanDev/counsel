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
            <h4 class="h2 font-weight-bold" style="color: #B99671">updating my reservation</h4>
          </div>
          <form action="{{route('reservations.store')}}" method="POST"> {{--changeStatusD--}}
          @csrf
          <label for="user_id" class="text-muted m-0">
           my name
          </label>
          <div class="cdb-form">
              <select class="form-control" name="user_id">
                  @foreach ($user as $u)
                  <option value="{{$u->id}}">{{$u->name}}</option>
                  @endforeach
                </select>
            </div>

            <label for="date_id" class="text-muted m-0">
              date
            </label>
            <div class="cdb-form">
                <select class="form-control" name="date_id">
                    @foreach ($date as $d)
                    <option value="{{$d->id}}">{{$d->date}}  (whith {{$d->user->name}})</option>
                    @endforeach
                  </select>
              </div>

              <button type="submit" class="btn btn-dark btn-block mb-3 mt-5" style="background-color: black">
            update
          </button>
        </form>
        </div>
      </div>




</x-app-layout>
