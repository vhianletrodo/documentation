<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure Documentation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%; /* Set full height for body */
            margin: 0; /* Remove default margin */
        }

        #sidebar {
            background-color: #627d4d; /* Dark green */
            min-height: 100vh; /* Full viewport height */
            color: black;
            position: fixed; /* Make sidebar fixed */
            top: 0; /* Align to the top */
            bottom: 0; /* Extend to the bottom */
            left: 0; /* Align to the left */
        }

        /* Title Styling */
        .menu-title {
            font-size: 1.75rem; /* Larger font for title */
            color: #ffffff; /* White text */
            font-weight: bold;
            padding: 15px; /* Extra padding for visual separation */
            margin-bottom: 0.5rem; /* Spacing below the title */
            border-bottom: 2px solid #ffffff; /* Optional underline */
        }

        /* Main Menu Links */
        #mainMenu .nav-link {
            color: #ffffff; /* White text */
            padding: 10px 15px;
            font-weight: 500;
            text-decoration: none; /* Remove underline */
        }

        #mainMenu .nav-link:hover {
            background-color: #1b5e20; /* Darker green on hover */
            color: #ffffff;
        }

        /* Main Content */
        main {
            margin-left: 250px; /* Adjust margin to accommodate the fixed sidebar */
            padding: 20px; /* Padding for content area */
        }

        /* Submenu Content Area */
        #submenu-content h4 {
            color: #2e7d32; /* Dark green title */
            font-weight: bold;
        }

        /* Submenu Links */
        #submenu-content ul.list-group .list-group-item {
            background-color: #e8f5e9; /* Light green background */
            color: black; /* Black text for items */
            text-decoration: none; /* Remove underline */
        }

        #submenu-content ul.list-group .list-group-item:hover {
            background-color: #c8e6c9; /* Darker green on hover */
        }

        /* Links within list items */
        #submenu-content ul.list-group .list-group-item a {
            color: #2e7d32; /* Link color */
            text-decoration: none; /* Remove underline */
        }

        #submenu-content ul.list-group .list-group-item a:hover {
            color: black; /* Keep color black on hover */
        }

        h1 {
            color: #2e7d32; /* Dark green headers */
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            background-color: #e8f5e9; /* Light green, complements the sidebar */
            color: black; /* Dark green text for contrast */
            padding: 15px 0; /* Vertical padding */
            text-align: center; /* Centered text */
            font-size: 0.9rem;
            position: absolute; /* Position absolute to stick to the bottom */
            bottom: 0; /* Align to the bottom */
            left: 0; /* Align to the left */
            right: 0; /* Extend to the right */
        }

        footer p {
            margin: 0; /* Remove default margin for compact layout */
        }

        footer a {
            color: #2e7d32; /* Dark green links */
            text-decoration: none; /* No underline */
            font-weight: bold;
        }

        footer a:hover {
            color: #627d4d; /* Dark green on hover */
            text-decoration: underline;
        }
    </style>
</head>
<body onload="loadSummary()">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <!-- Menu title -->
                    <h2 class="menu-title">Menu</h2>
                    <ul class="nav flex-column" id="mainMenu">
                        <!-- Main menu items will be injected here by JavaScript -->
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-1">
                <h1>Data Structure Documentation</h1>
                
                <!-- Submenu Content Section -->
                <div id="submenu-content" class="pt-3">
                    <p>Select a menu item to view its submenu.</p>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Data Structure Documentation. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to load the summary
        function loadSummary() {
            const submenuContent = document.getElementById("submenu-content");
            submenuContent.innerHTML = `
                <section id="summary" class="mt-4 mb-4 p-4 bg-light border rounded">
                    <h2>Purpose of This Website</h2>
                    <p>
                        This website is designed to serve as a documentation hub for a data structure, providing an organized and interactive way to explore hierarchical data.
                    </p>
                    <h3>Key Features</h3>
                    <ul>
                        <li><strong>Sidebar Navigation:</strong> The sidebar displays all main categories, offering a quick overview of the data structure. Each category expands on click to reveal detailed subcategories, helping users navigate deeper levels of the data.</li>
                        <li><strong>Content Display for Submenus:</strong> When a main category is clicked, its subcategories (e.g., "Sales Order," "Delivery Receipt") appear in the main content area. Each submenu item corresponds to a different part of the data structure, providing details or links to additional documentation on that topic.</li>
                        <li><strong>Intuitive Styling for Ease of Use:</strong> A green color scheme helps to visually differentiate navigation elements, with interactive feedback on hover, enhancing the user experience and making it easy to understand the structure’s organization.</li>
                    </ul>
                    <h3>Objective</h3>
                    <p>
                        The primary goal of this website is to clearly document and organize complex data structures, making it accessible to users of varying expertise. By categorizing data in a logical and easy-to-navigate format, the website facilitates an understanding of relationships, dependencies, and hierarchical arrangements among data components. With a focus on user-friendly navigation, structured access, and intuitive exploration, this website is an essential resource for anyone seeking to understand or work with the data structure in depth.
                    </p>
                </section>
            `;
        }

        // Load the main menu and submenu from PHP
        fetch('menu.php')
            .then(response => response.json())
            .then(menus => {
                const mainMenu = document.getElementById('mainMenu');
                
                // Populate the main menu
                Object.keys(menus).forEach(menu => {
                    const li = document.createElement('li');
                    li.className = 'nav-item';
                    li.innerHTML = `<a href="#" class="nav-link" onclick="loadSubMenu('${menu}')">${capitalize(menu)}</a>`;
                    mainMenu.appendChild(li);
                });

                // Save the menus for later access
                window.menus = menus;
            });

        // Function to load submenu
        function loadSubMenu(menu) {
            const submenuContent = document.getElementById("submenu-content");
            submenuContent.innerHTML = `<h4>${capitalize(menu)}</h4>`;

            // Fetch submenu items
            const selectedSubmenu = window.menus[menu] || [];
            const ul = document.createElement("ul");
            ul.className = "list-group";

            Object.keys(selectedSubmenu).forEach(item => {
                const li = document.createElement("li");
                li.className = "list-group-item";
                li.innerHTML = `<a href="${selectedSubmenu[item]}">${item}</a>`;
                ul.appendChild(li);
            });

            // Append submenu to content area
            submenuContent.appendChild(ul);
        }

        // Utility function to capitalize the first letter
        function capitalize(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>
</body>
</html>
