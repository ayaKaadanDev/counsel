<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #B99671">
        <div class="container">
            {{-- <div class="input-group"> --}}

                <div class="input-group">
                    <form action="{{route('find.Expert')}}" method="GET">
                        @csrf
                        <span>
                            <select name="search_exp" >
                                @foreach ($user as $u)
                                    <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </span>
                        <button type="submit" class="btn btn-outline-black" style="background-color: black ; color:white">search</button>
                    </form>
                </div>

                <div class="input-group">
                    <form action="{{route('find.Counsel')}}" method="GET">
                        @csrf
                        <span>
                            {{-- <input name="search_con" type="search" class="form-control rounded" placeholder="enter counsel's scope" aria-label="Search" aria-describedby="search-addon" /> --}}
                            <select name="search_exp" >
                                @foreach ($counsel as $c)
                                    <option value="{{$c->id}}">{{$c->scope}}</option>
                                @endforeach
                            </select>
                        </span>
                        <button type="submit" class="btn btn-outline-black" style="background-color: black ; color:white">search</button>
                    </form>
                </div>

            </div>
      </div>
    </nav>




</x-app-layout>
