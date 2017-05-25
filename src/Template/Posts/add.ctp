<h1> Add New Post </h1>


<?php echo $this->form->create($post) ?>
<?php echo $this->form->control('title') ?>
<?php echo $this->form->control('body') ?>
<?php echo $this->form->control('status') ?>
<?php echo $this->form->input('user_id') ?>
<?php echo $this->form->button('Submit') ?>
<?php echo $this->form->end() ?>
