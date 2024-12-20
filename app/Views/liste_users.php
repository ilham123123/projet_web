
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Liste des utilisateurs</li>
          </ol>
        </nav>
      
      
            
            
                 
                    
                    </div>
                  </a>
                </li>
              </ul>
            </li>
           
          </ul>
        </div>
      </div>
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
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
            <th class="text-center text-secondary opacity-7">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($users) && is_array($users) && count($users) > 0): ?>
            <?php foreach ($users as $user): ?>
                <tr id="user-row-<?= esc($user['id']) ?>">
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['email']) ?></td>
                    <td class="text-center"><?= esc($user['password']) ?></td>
                    <td>
                        <div class="btn-group">
                            <!-- Bouton Supprimer -->
                            <button 
                                class="btn btn-sm btn-danger btn-delete" 
                                data-id="<?= esc($user['id']) ?>">
                                Supprimer
                            </button>
                            <span class="delete-message" style="display:none; margin-left:10px;"></span>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">Aucun utilisateur trouvé.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche l'action par défaut

            const userId = this.getAttribute('data-id'); // Récupère l'ID utilisateur
            const row = document.getElementById('user-row-' + userId); // Ligne correspondante
            const messageSpan = row.querySelector('.delete-message'); // Span pour les messages

            // Confirmation de suppression
            if (!confirm('Voulez-vous vraiment supprimer cet utilisateur ?')) {
                return;
            }

            // Requête AJAX
            fetch(`/delete-user/${userId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json', // Ajout du type MIME
                    'X-Requested-With': 'XMLHttpRequest', // Indique une requête AJAX
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageSpan.textContent = data.message; // Message de succès
                    messageSpan.style.color = 'green';
                    messageSpan.style.display = 'inline';
                    setTimeout(() => {
                        row.remove(); // Supprime la ligne après 2 secondes
                    }, 2000);
                } else {
                    messageSpan.textContent = data.message; // Message d'erreur
                    messageSpan.style.color = 'red';
                    messageSpan.style.display = 'inline';
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                messageSpan.textContent = "Une erreur est survenue.";
                messageSpan.style.color = 'red';
                messageSpan.style.display = 'inline';
            });
        });
    });
});
</script>


              </div>
            </div>
          </div>
        </div>
      </div>
     
     
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-symbols-rounded py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-symbols-rounded">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark active" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2  active ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
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