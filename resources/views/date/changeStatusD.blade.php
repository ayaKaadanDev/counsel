<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('all.exp.with.info')}}">show all the experts</a>
            <a class="navbar-brand text-white" href="{{route('wallets.create')}}">create my wallet</a>
            <a class="navbar-brand text-white" href="{{route('wallets.index')}}">show my wallet</a>
            <a class="navbar-brand text-white" href="{{route('transferView')}}">transfer money and reservation</a>

            <a class="navbar-brand text-white" href="{{route('reservations.create')}}">reservation</a>

            <a class="navbar-brand text-white btn btn-black"  href="{{route('expert')}}" style="background-color: black ; color:white">search</a>

            {{-- <div class="input-group">

                <form action="{{route('find.Expert')}}" method="GET">
                    @csrf
                    <span><input name="search_exp" type="search" class="form-control rounded" placeholder="enter expert's name" aria-label="Search" aria-describedby="search-addon" /></span>
                    <button type="submit" class="btn btn-outline-black" style="background-color: black ; color:white">search</button>
                </form>

            </div>
            <div class="input-group">

                <form action="{{route('find.Counsel')}}" method="GET">
                    @csrf
                    <span><input name="search_con" type="search" class="form-control rounded" placeholder="enter counsel's scope" aria-label="Search" aria-describedby="search-addon" /></span>
                    <button type="submit" class="btn btn-outline-black" style="background-color: black ; color:white">search</button>
                </form>

            </div> --}}
        </div>
    </nav>


    <div class="shadow border d-flex flex-column m-0 mx-auto mt-4" style="width:100%; max-width:30rem;">
        <div class="p-5">
          <div class="mt-4 mb-5">
            <h4 class="h2 font-weight-bold" style="color: #B99671">reserve the date</h4>
          </div>
          <form action="{{route('changeStatusD',$reservation->date->id)}}" method="POST">
          @csrf
          @method('put')
          {{-- <label for="date" class="text-muted m-0">
            date
          </label>
          <div class="cdb-form">
            <div class="cdb-form">
                <select class="form-control" name="date">
                    @foreach ($date as $d)
                    <option value="{{$d->id}}">{{$d->date}}</option>
                    @endforeach
                  </select>
              </div>
          </div> --}}
          <label for="status" class="text-muted m-0">
            change the date status
          </label>
          <div class="cdb-form">
            <div class="cdb-form">
                <select class="form-control" name="status">
                    <option value="reserve">reserve</option>
                  </select>
              </div>
          </div>
          <button type="submit" class="btn btn-dark btn-block mb-3 mt-5" style="background-color: black">
            update
          </button>
        </form>
        </div>
      </div>
{{-- hellllllloooooooooooooooooooooooooooooooo --}}



</x-app-layout>
