@section('css')
<link rel="stylesheet" href="{{ asset('css/account-maintenance.css') }}">
@endsection

<table>
  <thead>
    <tr>
      <th>Account</th>
      <th>Role account</th>
      <th>Update role</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($accounts as $account) : ?>
      <tr>
        <td><?= $account->name ?></td>
        <td><?= $account->role ?></td>
        <td>
          <form action="{{ route('update-role', $account->id) }}" method="post">
            @csrf
            @method('PUT')
            <select name="role">
              <option value="admin" <?= $account->role === 'admin' ? 'selected' : '' ?>>Admin</option>
              <option value="user" <?= $account->role === 'user' ? 'selected' : '' ?>>User</option>
            </select>
            <button type="submit">Update</button>
          </form>
        </td>
        <td>
          <form action="{{ route('delete-account', $account->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
