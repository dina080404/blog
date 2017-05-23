<h1> This is user index </h1>

<table>
  <tr>
    <th> Nama </th>
    <th> Username </th>
    <th> Password </th>
    <th> Email </th>
    <th> Status </th>
  </tr>
<?php foreach ($users as $users):  ?>
<tr>
  <td> <?php echo $users->name ?> </td>
  <td> <?php echo $users->username ?> </td>
    <td> <?php echo $users->password ?> </td>
      <td> <?php echo $users->email ?> </td>
        <td> <?php echo $users->status ?> </td>
</tr>
<?php endforeach; ?>
</table>
