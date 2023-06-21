<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIB -PASKAS, Solo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="m-4 flex-shrink-0 p-3 border col-4 rounded" style="">
            <a href="/"
                class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                <svg class="bi pe-none me-2" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-5 fw-semibold">GIB --PASKAS, SOLO--</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1 bg-success rounded col-3">
                    <button
                        class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed bg-warning"
                        data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                        DASHBOARD
                    </button>
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/home"
                                    class="btn link-body-emphasis d-inline-flex text-decoration-none rounded"
                                    style="width: 100px;">Home</a></li>
                            <li><a href="/"
                                    class="btn link-body-emphasis d-inline-flex text-decoration-none rounded"
                                    style="width: 100px;">Landing Page</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1 bg-success rounded col-4 text-white">
                    <button
                        class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed bg-success"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Keanggotaan
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/calon-anggota"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded m-2">Calon
                                    Anggota</a></li>
                            <li><a href="/verifikasi-calon-anggota"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded m-2">Verifikasi
                                    Calon Anggota</a></li>
                            <li><a href="/anggota"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded m-2">Daftar
                                    Anggota</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                        User/Pengguna
                    </button>
                    <div class="collapse" id="user-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/peran"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Daftar
                                    Peran</a></li>
                            <li><a href="/user"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Daftar
                                    User</a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#pondok-collapse" aria-expanded="false">
                        Pondok/Mitra
                    </button>
                    <div class="collapse" id="pondok-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/calon-mitra"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Calon Mitra</a></li>
                            <li><a href="/pondok"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Daftar Mitra</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#alur-collapse" aria-expanded="false">
                        Alur Dana
                    </button>
                    <div class="collapse" id="alur-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/daftar_trip"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Daftar Trip</a></li>
                            <li><a href="trip-penyaluran-dana"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Trip Penyaluran Dana</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#ota-collapse" aria-expanded="false">
                        Orang Tua Asuh/OTA
                    </button>
                    <div class="collapse" id="ota-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/daftar-ota"
                                    class="link-body-emphasis d-inline-flex text-decoration-none rounded">Daftar Orang Tua Asuh</a></li>
                        </ul>
                    </div>
                </li>

                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                            <li><a href="#"
                                    class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign
                                    out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-7 m-4">@yield('content')</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
