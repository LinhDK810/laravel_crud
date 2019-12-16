<form>
   @if(isset($result))
        @foreach($result as $u)
            <tr>
                <td>{{$u->user_id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->class}}</td>
            </tr>

        @endforeach
       @endif
</form>