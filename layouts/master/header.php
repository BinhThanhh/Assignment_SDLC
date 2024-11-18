<header>
        <!-- navbar -->
        <div class="menu">
            <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                <div class="container">
                    <div class="row">
                        <div style="margin-top: -20px; margin-left: 40px;">
                            <nav class="navbar">
                                <!-- Logo -->
                                <a class="navbar-brand" href="#">
                                    <img src="images/logo.png" alt="Kính mắt Zuki" width="100" height="auto">
                                </a>
                                <div style="margin-left: 160px;">
                                    <a id="item" href="main.html">Home</a>
                                </div>
                                <div style="margin-left: 60px;">
                                    <a id="item" href="/layouts/products/glasses_frames.html">Glasses frames</a>
                                </div>
                                <div style="margin-left: 60px;">
                                    <a id="item" href="/layouts/products/Lenses.html">Lenses</a>
                                </div>
                                <div style="margin-left: 60px;">
                                    <a id="item" href="/layouts/products/Sunglasses.html">Sunglasses</a>
                                </div>

                                <!-- Search bar -->
                                <div style="margin-left: 180px;">
                                    <nav class="navbar">
                                        <form method="post" class="d-flex" role="search">
                                            <button id="search" class="btn btn-outline-success" type="submit"><img
                                                    src="images/UI_Icon_Search.png" alt=""></button>
                                        </form>
                                    </nav>
                                </div>

                                <!-- Login/Register -->
                                <div style="margin-left: 40px;">
                                    <a id="login" href="#">Login/Register</a>
                                </div>
                                <input type="text" id="search_input" placeholder="Search..." style="display: none;">
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- js for search tab -->
                <script>
                    const searchBtn = document.getElementById('search');
                    const searchInput = document.getElementById('search_input');

                    searchBtn.addEventListener('mouseover',
                        () => {
                            searchInput.style.display = 'inline';
                            searchInput.focus();
                        });

                    searchBtn.addEventListener('mouseout', () => {
                        searchInput.style.display = 'none';
                    });
                </script>
            </nav>
        </div>
    </header>