<h1>Edit New Posts </h1>

<?php echo $this->form->create($post) ?>
<?php echo $this->form->control('title') ?>
<?php echo $this->form->control('body') ?>
<?php echo $this->form->control('User_id') ?>
<?php echo $this->form->button('Submit') ?>
<?php echo $this->form->end() ?>
