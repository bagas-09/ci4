<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->


    <!-- / Navbar -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <nav class="navbar navbar-example navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= base_url('home') ?>">Bagas</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-3">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-3">
                        <div class="navbar-nav me-auto">
                            <a class="nav-item nav-link active" href="<?= base_url('home') ?>">Home</a>
                        </div>

                        <form onsubmit="return false">
                            <a href="<?= base_url('login') ?>" class="btn btn-outline-primary" type="button">Log In</a>
                        </form>
                    </div>
                </div>
            </nav>