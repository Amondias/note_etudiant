<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Grand titre -->
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <span class="brand-text font-weight-bold">Tableau de bord</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                <!-- Lien vers Étudiants -->
                <li class="nav-item">
                    <a href="{{ route('etudiant.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Liste des étudiants</p>
                    </a>
                </li>

                <!-- Lien vers Évaluations -->
                <li class="nav-item">
                    <a href="{{ route('evaluation.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>Liste des devoirs</p>
                    </a>
                </li>

                <!-- Lien vers Notes -->
                <li class="nav-item">
                    <a href="{{ route('note.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Liste des notes</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
