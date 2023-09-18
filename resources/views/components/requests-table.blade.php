<table class="table table-striped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">nome</th>
        <th scope="col">email</th>
        <th scope="col">azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($roleRequest as $user)      
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <button class="btn btn-info text-white"> attiva {{$role}}</button>
        </td>
      </tr>
      <td>
          @switch($role)
            @case('amministratore')
              <a href="{{route('admin.setAdmin', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>
              @break
              <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>
              @break
              <a href="{{route('admin.setWriter', compact('user'))}}" class="btn btn-info text-white">Attiva {{$role}}</a>
              @break
          @endswitch
      </td>
      @endforeach
    </tbody>
  </table>