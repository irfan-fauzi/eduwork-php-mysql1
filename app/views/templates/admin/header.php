<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dashboard — AdminLTE style (Tailwind)</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* small AdminLTE-like customizations */
        .sidebar-bg {
            background: linear-gradient(180deg, rgba(31, 41, 55, 1) 0%, rgba(17, 24, 39, 1) 100%);
        }

        .brand {
            font-weight: 700;
            letter-spacing: 0.4px;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }

        .active-tab {
            border-bottom-width: 3px;
            border-color: #0ea5a4;
        }
    </style>
</head>

<body class="min-h-screen bg-slate-100 font-sans text-slate-800">
    <div class="flex">
