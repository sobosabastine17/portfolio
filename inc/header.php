 <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Responsive personal portfolio built with HTML, Tailwind CSS, and JavaScript."
    />
    <meta
      name="keywords"
      content="Sabastine Sobo portfolio template, backend developer, system administrator and aspiring DevOps"
    />
    <meta name="author" content="Sabastine Sobo" />
    <title>Sobo Sabastine</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              bg: "#111111", // Custom dark background
              text: "#ffffff", // Primary text color
              accent: "#7a00cc", // Highlight/Accent color
            },
            fontFamily: {
              poppins: ["Poppins", "sans-serif"],
              gloria: ['"Gloria Hallelujah"', "cursive"],
              tangerine: ['"Tangerine"', "cursive"],
            },
          },
        },
      };
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tangerine:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Animate On Scroll (AOS) Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <!-- Lottie Animation Library -->
    <script src="https://unpkg.com/lottie-web@5.7.4/build/player/lottie.min.js"></script>

    <!-- Alpine.js (For UI Interactivity like Navbar Toggle) -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- Custom CSS and JS -->
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/script.js"></script>
  </head>