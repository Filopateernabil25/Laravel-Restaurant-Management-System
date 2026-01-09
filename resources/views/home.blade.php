<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Base */
        body {
            background: #f3f5f7;
            font-family: "Helvetica Neue", Arial, sans-serif;
            color: #222;
        }

        /* Header / hero */
        .page-hero {
            background: linear-gradient(180deg, #ffffff 0%, #f0f2f4 100%);
            padding: 40px 0 30px;
            margin-bottom: 30px;
            border-bottom: 1px solid #e6e9eb;
        }

        .page-hero .title {
            font-family: "Georgia", serif;
            font-size: 2.6rem;
            font-weight: 700;
            color: #1f2d3d;
        }

        .breadcrumb-custom {
            background: #d35400;
            color: #fff;
            display: inline-block;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 0.95rem;
            box-shadow: 0 2px 6px rgba(211, 83, 0, 0.12);
        }

        /* Navbar */
        .navbar {
            background: #fff;
            box-shadow: 0 1px 6px rgba(31, 45, 61, 0.06);
        }

        .navbar .navbar-brand {
            color: #d35400;
        }

        .nav-link {
            color: #4a4a4a !important;
            font-weight: 600;
        }

        /* Category buttons */
        .btn-category {
            transition: all 0.18s ease;
            border-radius: 20px;
            padding: 7px 14px;
            font-weight: 700;
            border: 1px solid #ef6f3c;
            background: #ffffff;
            color: #ef6f3c;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
        }

        .btn-category.active,
        .btn-category:hover {
            transform: translateY(-3px);
            background: #ef6f3c;
            color: #fff;
            border-color: #ef6f3c;
        }

        .btn-outline-secondary.btn-category {
            border-color: #9aa4ad;
            color: #5b6368;
        }

        /* Card / grid */
        .menu-card {
            border: 1px solid #e3e6e8;
            border-radius: 8px;
            overflow: hidden;
            background: #ffffff;
            transition: transform .22s ease, box-shadow .22s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(31, 45, 61, 0.08);
        }

        .menu-card .img-wrap {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: #f7f8f9;
        }

        .menu-card .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .menu-card .card-body {
            padding: 16px;
            text-align: left;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-card .meta {
            color: #6b7280;
            font-size: 0.85rem;
            margin-bottom: 8px;
            text-transform: capitalize;
        }

        .menu-card .title {
            font-weight: 800;
            color: #16202a;
            margin-bottom: 8px;
            font-size: 1.08rem;
        }

        .menu-card .desc {
            color: #484f57;
            font-size: 0.92rem;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .menu-card .price {
            color: #b93e00;
            font-weight: 900;
            font-size: 1.05rem;
        }

        .menu-card .accent-bar {
            height: 6px;
            background: linear-gradient(90deg, #ef6f3c, #ff8a4d);
            width: 100%;
            border-radius: 2px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
        }

        .category-small {
            font-size: 0.82rem;
            color: #6b7280;
        }

        .btn-order {
            background: #ff9a3c;
            border-color: #ff8a3c;
            color: #1b1b1b;
            font-weight: 700;
        }

        .btn-order:hover {
            background: #ff8a3c;
        }

        @media (min-width: 1200px) {
            .col-custom {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (min-width: 768px) and (max-width: 1199px) {
            .col-custom {
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }

        @media (max-width: 767px) {
            .col-custom {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .menu-card .img-wrap {
                height: 150px;
            }
        }

        /* Improve contrast for accessibility */
        .menu-card,
        .btn-category,
        .breadcrumb-custom,
        .navbar {
            -webkit-font-smoothing: antialiased;
        }

        /* ========== added for logo + improved navbar ========== */
        .brand-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand-wrap img {
            height: 48px;
            width: auto;
            border-radius: 6px;
            object-fit: cover;
        }

        .navbar {
            background: #ffffff;
            box-shadow: 0 6px 18px rgba(22, 28, 36, 0.06);
        }

        .navbar .nav-link {
            color: #2f3a3f !important;
            font-weight: 700;
            padding: 8px 12px;
        }

        .navbar .nav-link:hover {
            color: #ef6f3c !important;
        }

        .nav-actions .btn-book {
            background: #ef6f3c;
            border-color: #ef6f3c;
            color: #fff;
            font-weight: 800;
        }

        .nav-actions .btn-book:hover {
            background: #d35400;
            border-color: #d35400;
        }

        @media (max-width: 767px) {
            .brand-wrap img {
                height: 40px;
            }
        }
        /* ===================================================== */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand brand-wrap" href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('meals.index') }}">Menu</a></li>
                    <li class="nav-item ms-3 nav-actions">
                        <a href="#" class="btn btn-sm btn-book">Book a Table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="page-hero">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <h1 class="title">Breakfast</h1>
                <div class="mt-2">
                    <span class="breadcrumb-custom">Home / Breakfast</span>
                </div>
            </div>
            <div>
                <!-- optional contact / button -->
            </div>
        </div>
    </header>

    <main class="container mb-5">
        <div class="text-center mb-4">
            @foreach($categories as $category)
            <a href="{{ route('category.filter', $category->id) }}"
               class="btn btn-category m-1 {{ request()->routeIs('category.filter') && request()->route('id') == $category->id ? 'active' : '' }}">
                {{ $category->name }}
            </a>
            @endforeach
            <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-category m-1">Show All</a>
        </div>

        <div class="d-flex flex-wrap gx-3 gy-4">
            @forelse($meals as $meal)
            <div class="col-custom p-2">
                <div class="menu-card">
                    <div class="img-wrap">
                        @if($meal->image)
                        <img src="{{ asset('storage/' . $meal->image) }}"  alt="{{ $meal->name }}">
                        @else
                        <img src="https://via.placeholder.com/400x300?text=No+Image" alt="no-image">
                        @endif
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="meta category-small">{{ $meal->category->name ?? 'Uncategorized' }}</div>
                            <div class="title">{{ $meal->name }}</div>
                            <div class="desc">{{ \Illuminate\Support\Str::limit($meal->description, 100) }}</div>
                        </div>

                        <div>
                            <div class="price-row">
                                <div class="price">${{ number_format($meal->price, 2) }}</div>
                                <a href="#" class="btn btn-order btn-sm">Order Now</a>
                            </div>
                            <div class="accent-bar mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">No meals available for this category.</p>
            @endforelse
        </div>
    </main>

    <footer class="text-center py-4" style="background:#fff;">
        <div class="container">
            <p class="mb-0">&copy; 2026 Foodies. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
