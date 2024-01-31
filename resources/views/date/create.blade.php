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

    <div class="shadow border d-flex flex-column m-0 mx-auto mt-4" style="width:100%; max-width:30rem;">
        <div class="p-5">
          <div class="mt-4 mb-5">
            <h4 class="h2 font-weight-bold" style="color: #B99671">creating a new date</h4>
          </div>
          <form action="{{route('Dates.store')}}" method="POST">
          @csrf
          <label for="user_id" class="text-muted m-0">
            expert name
          </label>
          <div class="cdb-form">
            <div class="cdb-form">
                <select class="form-control" name="user_id">
                    @foreach ($expert as $e)
                    <option value="{{$e->id}}">{{$e->name}}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <label for="date" class="text-muted m-0">
            date
          </label>
          <div class="cdb-form">
            <input type="datetime-local" class="form-control" name="date" />
          </div>
          <button type="submit" class="btn btn-dark btn-block mb-3 mt-5" style="background-color: black">
            Send
          </button>
        </form>
        </div>
      </div>

</x-app-layout>
