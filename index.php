<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RT 27 - Lingkungan Kita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="img/logo.png">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    },
                    colors: {
                        hijau: '#237a3b',
                        hijauMuda: '#eaf6e9',
                        hijauTua: '#075b27'
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        section,
        footer {
            scroll-margin-top: 80px;
        }
    </style>

</head>

<body class="font-poppins text-gray-800 bg-white">
    <?php
    include 'pages/navbar.php';
    include 'pages/beranda.php';
    include 'pages/program.php';
    include 'pages/pengumuman.php';
    include 'pages/agenda.php';
    include 'pages/galeri.php';
    include 'pages/kontak.php';
    ?>
    <script>
        const menuButton = document.getElementById("menuButton");
        const mobileMenu = document.getElementById("mobileMenu");

        menuButton.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });
    </script>
    
</body>

</html>