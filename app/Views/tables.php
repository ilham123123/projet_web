
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/l.jpg');?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/l.jpg');?>">
  <title>
   Gestion des incidents 
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/css/nucleo-icons.css');?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/nucleo-svg.css');?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/css/material-dashboard.css?v=3.2.0');?>" rel="stylesheet" />


  
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="https://demos.creative-tim.com/material-dashboard/pages/dashboard" target="_blank">
        <img src=<?= base_url('assets/img/l.jpg');?> class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Gestion des incidents</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('dashboard');?>">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="<?= base_url('tables');?>">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Table Incidents</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('liste_users');?>">
            <i class="material-symbols-rounded opacity-5">receipt_long</i>
            <span class="nav-link-text ms-1">Liste des utilisateurs</span>
          </a>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link text-dark" href="logout">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Deconnexion</span>
          </a>
        </li>
      
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
     
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
        </nav>
       
               
                 
                     
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
             
              <table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom Utilisateur</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Téléphone</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type d'incident</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de déclaration</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
            <th class="text-center text-secondary opacity-7">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php if (isset($incidents) && is_array($incidents)): ?>
            <?php foreach ($incidents as $incident): ?>
                <tr>
                    <td><?= esc($incident['full_name']) ?></td>
                    <td><?= esc($incident['email']) ?></td>
                    <td class="text-center"><?= esc($incident['phone']) ?></td>
                    <td class="text-center"><?= esc($incident['incident_type']) ?></td>
                    <td class="text-center"><?= esc($incident['date_incident']) ?></td>
                    <td><?= esc($incident['description']) ?></td>
                    <td>
                    <a href="<?= site_url('reponse/' . $incident['id']) ?>" class="btn btn-sm btn-danger">Répondre</a>


                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="text-center">Aucun incident trouvé.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

              </div>
            </div>
          </div>
        </div>
      </div>
     
          
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>