<h1> Add New Users </h1>


<?php echo $this->form->create() ?>
<?php echo $this->form->control('name') ?>
<?php echo $this->form->control('username') ?>
<?php echo $this->form->control('password') ?>
<?php echo $this->form->control('email') ?>
<?php echo $this->form->control('status') ?>
<?php echo $this->form->button('Submit') ?>
<?php echo $this->form->end() ?>
