<x-layout>
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h4 class="mb-0 text-uppercase">Dashboard</h4>
                <p class="mb-0 text-muted"><i class="fa-solid fa-angles-right me-1"></i>Kemahasiswaan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div>
                            <h6 class="mb-3 fs-12 text-fixed-white">Program Kerja</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div>
                                    <h4 class="fs-30 fw-bold mb-1 text-fixed-white">{{ $sumProker?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div>
                            <h6 class="mb-3 fs-12 text-fixed-white">Proposal Kegiatan</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div>
                                    <h4 class="fs-30 fw-bold mb-1 text-fixed-white">{{ $sumProposal ?? 0 }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline2"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div>
                            <h6 class="mb-3 fs-12 text-fixed-white">Laporan Kegiatan</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div>
                                    <h4 class="fs-30 fw-bold mb-1 text-fixed-white">{{ $sumLaporan ?? 0}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline3"></div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
