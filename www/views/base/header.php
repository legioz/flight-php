<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>

                <a class="navbar-item" href="/buy">
                    Pricing
                </a>
                
            </div>
            <?php if (!isset($_SESSION)) : ?>
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="/signup">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="/login">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Anonymous'; ?></span>
                        </a>
                        <div class="navbar-dropdown is-right">
                            <a class="navbar-item" href="/profile">
                                Profile
                            </a>
                            <hr class="navbar-divider">
                            <span class="icon-text">
                                <a class="navbar-item" href="/exit">
                                    <span>Exit</span>
                                    <span class="icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>
</header>