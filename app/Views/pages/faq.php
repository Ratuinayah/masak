<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-6 mb-4 mx-auto">

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                                    <h6 class="m-0 font-weight-bold text-primary">Apa itu Masakku?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample1">
                                    <div class="card-body">
                                        Masakku adalah aplikasi yang menyediakan berbagai resep makanan lengkap dengan panduan langkah demi langkah, memudahkan siapa saja untuk memasak dengan praktis dan menyenangkan.
                                    </div>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                                    <h6 class="m-0 font-weight-bold text-primary">Apakah Masakku gratis digunakan?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample2">
                                    <div class="card-body">
                                        Ya, Masakku dapat digunakan secara gratis!
                                    </div>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                                    <h6 class="m-0 font-weight-bold text-primary">Bisakah saya mengirimkan resep saya sendiri ke Website Resep Makanan??</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample3">
                                    <div class="card-body">
                                        Fitur belum dibuat
                                    </div>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample4" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample4">
                                    <h6 class="m-0 font-weight-bold text-primary">Apakah situs web ini memiliki informasi gizi atau informasi alergi?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample4">
                                    <div class="card-body">
                                        Tidak ada
                                    </div>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample5" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample5">
                                    <h6 class="m-0 font-weight-bold text-primary">Bagaimana jika saya mengalami masalah saat menggunakan aplikasi?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample5">
                                    <div class="card-body">
                                        Jika Anda mengalami kendala, silakan hubungi tim dukungan melalui email ke <a href="support@masakku.com"> support@masakku.com</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endsection('content'); ?>