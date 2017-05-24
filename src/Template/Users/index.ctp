<h1> This is user index </h1>

<?php echo $this->Html->link('Add New User',['action'=>'Add',])?>
<table>
  <tr>
    <th> Bil. </Th>
    <th> Nama </th>
    <th> Username </th>
    <th> Status </th>
    <th> Action </th>
  </tr>

<?php $bilangan = 1?>
<?php foreach ($users as $user):  ?>
<tr>
  <td><?php echo $bilangan?></td>
  <td> <?php echo $user->name?> </td>
  <td> <?php echo $user->username?> </td>
  <td> <?php echo $user->status ?> </td>
  <td> <?php echo $this->Html->link('View',['action'=>'view',$user->id])?>
       <?php echo $this->Html->link('Edit',['action'=>'Edit',$user->id])?>
       <?php echo $this->Html->link('Delete',['action'=>'Delete',$user->id],['confirm'=>'Anda Pasti?'])?>
  </td>
</tr>
<?php $bilangan++; ?>
<?php endforeach; ?>
</table>
