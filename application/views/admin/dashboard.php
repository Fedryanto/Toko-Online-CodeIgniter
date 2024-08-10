<div class="container-fulid">
<!-- Navbar -->
<!-- Tampilan Profil -->
<section class="jumbotron">
  <div class="container">
    <h1 class="display-4">Welcome 
      <?php echo $this->session->userdata('username') ?></h1>
    <p class="lead">Selamat datang di Fashi Shop, tempat dimana fashion anda yang utama, kepuasan anda nomor 1 bagi kami</p>
  </div>
</section>
<hr>
<section class="jumbotron text-center">
    <h1 class="display-4"> <?php echo $this->session->userdata('username') ?> </h1>
    <img src="<?php echo base_url('assets/img/profile.jpg') ?>" alt="profle" width="150" class="rounded-circle" >
  <hr class="my-4">
  <h5>Admin | Manager</h5>
</section>