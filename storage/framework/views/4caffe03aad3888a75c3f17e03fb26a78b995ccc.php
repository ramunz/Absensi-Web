<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3d597c;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/LogoV2.png" alt="Logo" width="250" height="55">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item <?php echo e($title == 'Profil' ? 'active' : ''); ?>">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>
                <li class="nav-item <?php echo e($title == 'Presensi' ? 'active' : ''); ?>">
                    <a class="nav-link" href="/presensi">Presensi</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn nav-link">
                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                        </button>
                    </form>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/"><i class="bi bi-person-circle"></i> Login</a>
                </li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH E:\Semester 4\Pemograman Web Lanjut\Project Pemweb\Absensi-App\resources\views/components/navbar.blade.php ENDPATH**/ ?>