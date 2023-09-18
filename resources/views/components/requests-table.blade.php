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
      @endforeach
    </tbody>
  </table>