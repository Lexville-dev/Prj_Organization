<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- left -->
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../views/dashboard.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/newticket.php">Create a Ticket</a>
      </li>
    </ul>
  </div>

<!-- middle -->
  <div class="mx-auto w-100 order-0">
    <ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </ul>
  </div>

<!-- right -->
<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../admin/viewticket.php">Admin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Users
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><h6 class="dropdown-header"> Username: <!--<?php echo $_SESSION['counter']; ?>--> </h6></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../views/user.php">Users</a></li>
            <li><a class="dropdown-item" href="../views/user-edit.php">Edit User</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="../model/logout.php">
              <li>
                <button class="btn dropdown-item" type="submit">Logout</button>
              </li>
            </form>
          </ul>
        </li>
    </ul>
</div>

</div>
</nav>
