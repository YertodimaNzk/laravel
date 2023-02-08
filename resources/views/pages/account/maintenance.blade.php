@section('css')
<link rel="stylesheet" href="{{ asset('css/account-maintenance.css') }}">
@endsection

<<table>
  <tr>
    <td>Account</td>
    @foreach ($accounts as $account)
    <td>{{ $account->first_name . $account->last_name }} - {{ $account->role_id }}</td>
    @endforeach
  </tr>
  <tr>
    <td>Action</td>
    @foreach ($accounts as $account)
    <td>Update Delete
      <span>
        <a href="/account/update">Update</a>
        <a href="/account/delete">Delete</a>
      </span>
    </td>
    @endforeach
  </tr>
</table>

<script>
  function confirmDelete(id) {
      if(confirm("Are you sure you want to delete this account?")) {
          // delete the account from the database here
          // ...
          
          // remove the row from the table
          var row = document.querySelector("tr[data-id='" + id + "']");
          row.remove();
      }
  }
</script>
