<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            <a class="navbar-brand text-white" href="{{route('counsels.create')}}">create a new counsel</a>
            <a class="navbar-brand text-white" href="{{route('counsels.index')}}">show the counsels</a>
            <a class="navbar-brand text-white" href="{{route('show.all')}}">show the wallets</a>
            {{-- <a class="navbar-brand text-white" href="{{route('all.exp.with.info')}}">show all the experts</a> --}}
        </div>
    </nav>


    <div class="shadow border d-flex flex-column m-0 mx-auto mt-4" style="width:100%; max-width:30rem;">
        <div class="p-5">
          <div class="mt-4 mb-5">
            <h4 class="h2 font-weight-bold" style="color: #B99671">update the wallet</h4>
          </div>
          <form action="{{route('wallets.update',$wallet->id)}}" method="POST">
          @csrf
          @method('put')
          <label for="user_id" class="text-muted m-0">
            name
          </label>
          <div class="cdb-form">
              <select class="form-control" name="user_id">
                  @foreach ($user as $u)
                  <option value="{{$u->id}}">{{$u->name}}</option>
                  @endforeach
                </select>
            </div>
            <label for="money" class="text-muted m-0">
                money
              </label>
              <div class="cdb-form">
                <input type="number" class="form-control" name="money" value="{{$wallet->money}}" required/>
              </div>

              <button type="submit" class="btn btn-dark btn-block mb-3 mt-5" style="background-color: black">
            Send
          </button>
        </form>
        </div>
      </div>


</x-app-layout>
