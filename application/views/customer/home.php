<?php if($this->session->flashdata('msg')) : ?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Notice</h3>
  </div>
  <?php echo $this->session->flashdata('msg'); ?>
</div>
<?php endif; ?>
<h4>Welcome, <?php echo $this->session->userdata('email'); ?>.</h4>
<a class='btn btn-primary' href="/customer/logout">Logout</a>
