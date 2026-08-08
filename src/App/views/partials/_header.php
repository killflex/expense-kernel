<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? e($title) . ' - Expencify' : 'Expencify - Smart Expense & Transaction Tracker'; ?></title>

    <!-- Google Fonts: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Core Application Stylesheet (Dynamic + Relative Fallback) -->
    <link rel="stylesheet" href="/assets/main.css">
</head>

<body>
    <div class="app-layout">
        <!-- Top Navigation Bar -->
        <header class="navbar-wrapper">
            <div class="navbar-container">
                <!-- Brand / Logo -->
                <a href="/" class="brand-logo" id="nav-brand-logo">
                    <div class="brand-icon-box">
                        <svg class="brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.5-1 2-2V7.5c0-.8-.7-1.5-1.5-1.5H19z"></path>
                            <circle cx="7" cy="11" r="1"></circle>
                            <path d="M16 11h.01"></path>
                        </svg>
                    </div>
                    <div class="brand-text-group">
                        <span class="brand-title">Expencify</span>
                    </div>
                </a>

                <!-- Mobile Menu Toggle Button -->
                <button class="mobile-toggle-btn" id="mobile-menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
                    <svg class="icon-menu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" y1="6" x2="20" y2="6"></line>
                        <line x1="4" y1="12" x2="20" y2="12"></line>
                        <line x1="4" y1="18" x2="20" y2="18"></line>
                    </svg>
                    <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <!-- Navigation Links & Actions -->
                <?php
                $currentUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
                $isAbout = str_contains($currentUri, 'about');
                $isHome = !$isAbout;
                ?>
                <nav class="nav-menu" id="primary-nav-menu">
                    <ul class="nav-links-list">
                        <li>
                            <a href="/" class="nav-link <?php echo $isHome ? 'active' : ''; ?>" id="nav-link-dashboard">
                                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span>Transactions</span>
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="nav-link <?php echo $isAbout ? 'active' : ''; ?>" id="nav-link-about">
                                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                <span>About</span>
                            </a>
                        </li>
                    </ul>

                    <!-- User Action / Auth Navigation -->
                    <div class="nav-actions-group">
                        <a href="/login" class="btn btn-ghost" id="nav-btn-login">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                <polyline points="10 17 15 12 10 7"></polyline>
                                <line x1="15" y1="12" x2="3" y2="12"></line>
                            </svg>
                            <span>Login</span>
                        </a>

                        <a href="/register" class="btn btn-primary" id="nav-btn-register">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            <span>Register</span>
                        </a>

                        <div class="nav-divider" aria-hidden="true"></div>

                        <a href="/logout" class="btn btn-outline-danger" id="nav-btn-logout" title="Sign out of account">
                            <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Logout</span>
                        </a>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Main Content Wrapper -->
        <main class="main-content" id="main-content-area">