<h1> This is post index </h1>

<?php echo $this->Html->link('Add New Post',['action'=>'Add',])?>
<table>
  <tr>
    <th> Bil. </Th>
    <th> Title </th>
    <th> Body </th>
    <th> User </th>

    <th> Action </th>
  </tr>

<?php $bilangan = 1?>
<?php foreach ($posts as $post):  ?>
<tr>
  <td><?php echo $bilangan?></td>
  <td> <?php echo $post->title?> </td>
  <td> <?php echo $post->body?> </td>
  <td> <?php echo $post->user->name ?> </td>
  <td> <?php echo $this->Html->link('View',['action'=>'view',$post->id])?>
       <?php echo $this->Html->link('Edit',['action'=>'Edit',$post->id])?>
       <?php echo $this->Html->link('Delete',['action'=>'Delete',$post->id],['confirm'=>'Anda Pasti?'])?>
  </td>
</tr>
<?php $bilangan++; ?>
<?php endforeach; ?>
</table>
