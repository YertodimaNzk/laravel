@section('css')
<link rel="stylesheet" href="{{ asset('css/account-maintenance.css') }}">
@endsection

<<table>
  <tr>
    <th>Account</th>
    <th>Role Account</th>
    <th>Update Role</th>
    <th>Delete</th>
  </tr>
  <?php
  $accounts = [
      ['id' => 1, 'username' => 'user1', 'role' => 'admin'],
      ['id' => 2, 'username' => 'user2', 'role' => 'user'],
      ['id' => 3, 'username' => 'user3', 'role' => 'admin'],
      ['id' => 4, 'username' => 'user4', 'role' => 'user'],
      ['id' => 5, 'username' => 'user5', 'role' => 'admin']
  ];
  
  foreach($accounts as $account) {
      if($account['role'] == 'admin') {
          $role = 'User';
      } else {
          $role = 'Admin';
      }
      ?>
      <tr>
        <td>{{ $account['username']; }}</td>
        <td>{{} $account['role']; }}</td>
        <td><a href="#">Update Role</a></td>
        <td><a href="#" onclick="confirmDelete({{ $account['id']; }})">Delete</a></td>
      </tr>
      <?php
  }
  ?>
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
