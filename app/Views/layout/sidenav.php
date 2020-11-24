<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="/">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <?php
        if (!empty(session()->get('logged_in'))) {
        ?>
          <div class="sb-sidenav-menu-heading">Admin</div>
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
            Account
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="/user/new">tambah Account</a>
              <a class="nav-link" href="/user">List Account</a>
            </nav>
          </div>
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseblt" aria-expanded="false" aria-controls="collapseblt">
            <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
            Content
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseblt" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <?php
              echo '<a class="nav-link" href="admin/content/new">Tambah Content</a>';
              echo '<a class="nav-link" href="admin/content/">List Content</a>';
              ?>
            </nav>
          </div>
        <?php
        } ?>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <?php
      if (!empty(session()->get('logged_in'))) {
      ?>
        <div class="small">Login sebagai:</div>
      <?php echo !empty(session()->get('username')) ? session()->get('username') : 'guest';
      } else {
      ?>
        <div class="small">Anda Belum</div>
        Login
      <?php
      } ?>
    </div>
  </nav>
</div>