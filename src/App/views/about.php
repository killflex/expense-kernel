<?php include $this->resolve('partials/_header.php'); ?>

<div class="container about-page-container">
    <!-- Hero Section -->
    <section class="about-hero-section">
        <div class="badge-pill">
            <span>About Expencify</span>
        </div>
        <h1 class="about-hero-title">
            The transparent, frictionless ledger for <span class="gradient-text">modern financial control</span>.
        </h1>
        <p class="about-hero-subtitle">
            Expencify was engineered from the ground up to solve a simple problem: personal and business finance tools have become slow, cluttered, and bloated. We built a fast, dependable, and receipt-first platform that puts you in complete command of every dollar.
        </p>

        <div class="about-hero-actions">
            <a href="/" class="btn btn-primary" id="btn-about-view-ledger">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
                <span>Explore Transactions</span>
            </a>
            <a href="/register" class="btn btn-secondary" id="btn-about-get-started">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="4"></circle>
                    <line x1="20" y1="8" x2="20" y2="14"></line>
                    <line x1="23" y1="11" x2="17" y2="11"></line>
                </svg>
                <span>Create Free Account</span>
            </a>
        </div>
    </section>

    <!-- Key Metrics Strip -->
    <section class="about-stats-grid">
        <div class="about-stat-card">
            <div class="about-stat-number font-mono">100%</div>
            <div class="about-stat-label">Strictly Typed Core</div>
            <p class="about-stat-desc">Engineered on PHP 8.4 with rigorous type declarations and high performance.</p>
        </div>
        <div class="about-stat-card">
            <div class="about-stat-number font-mono">&lt; 15ms</div>
            <div class="about-stat-label">Lightning Fast Renders</div>
            <p class="about-stat-desc">Zero heavy client framework overhead. Pure semantic HTML and optimized CSS.</p>
        </div>
        <div class="about-stat-card">
            <div class="about-stat-number font-mono">1-Click</div>
            <div class="about-stat-label">Audit-Ready Receipts</div>
            <p class="about-stat-desc">Direct PDF and image attachment links paired permanently with every entry.</p>
        </div>
        <div class="about-stat-card">
            <div class="about-stat-number font-mono">0%</div>
            <div class="about-stat-label">Third-Party Tracking</div>
            <p class="about-stat-desc">Your financial records remain strictly confidential, private, and secure.</p>
        </div>
    </section>

    <!-- Mission & Core Value Pillars -->
    <section class="about-section">
        <div class="section-header-center">
            <span class="sub-badge">Why Expencify</span>
            <h2 class="section-title">Built on principles of clarity and reliability</h2>
            <p class="section-subtitle">Everything you need to audit, organize, and monitor financial flow without unnecessary complexity.</p>
        </div>

        <div class="pillars-grid">
            <div class="pillar-card">
                <div class="pillar-icon-box bg-indigo-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <h3 class="pillar-title">Precision Cashflow Tracking</h3>
                <p class="pillar-text">
                    Log income and expenses with pinpoint accuracy. Distinguish between operational burn, payroll, software subscriptions, and client revenues with clear visual tags.
                </p>
                <div class="pillar-tag font-mono">Real-time Metrics</div>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon-box bg-emerald-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
                <h3 class="pillar-title">Immutable Receipt Vault</h3>
                <p class="pillar-text">
                    Every transaction can store direct proof of expense — PDFs, invoices, and photo receipts. Say goodbye to missing expense documentation when filing audits or tax returns.
                </p>
                <div class="pillar-tag font-mono">Audit Verification</div>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon-box bg-amber-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3 class="pillar-title">Zero-Latency Live Filter</h3>
                <p class="pillar-text">
                    Find any transaction in an instant. Query by merchant name, category, or amount range with client-side reactive filtering and zero page reloads.
                </p>
                <div class="pillar-tag font-mono">Instant Search</div>
            </div>

            <div class="pillar-card">
                <div class="pillar-icon-box bg-rose-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h3 class="pillar-title">Clean Architecture</h3>
                <p class="pillar-text">
                    Built upon a robust custom MVC framework with decoupled routing, template engines, and strict parameter checking to ensure stability and maintainability.
                </p>
                <div class="pillar-tag font-mono">PHP 8.4 MVC</div>
            </div>
        </div>
    </section>

    <!-- Workflow / How It Works -->
    <section class="about-section workflow-section">
        <div class="section-header-center">
            <span class="sub-badge">Workflow</span>
            <h2 class="section-title">How Expencify streamlines your accounting</h2>
            <p class="section-subtitle">A straightforward three-step pipeline to keep your ledger clean and up to date.</p>
        </div>

        <div class="workflow-steps-grid">
            <div class="workflow-step-card">
                <div class="step-badge font-mono">01</div>
                <h4 class="step-title">Record & Categorize</h4>
                <p class="step-desc">Quickly submit your transaction details via the modal form — specify amount, date, category, and attach receipt files.</p>
            </div>

            <div class="workflow-step-connector">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>

            <div class="workflow-step-card">
                <div class="step-badge font-mono">02</div>
                <h4 class="step-title">Real-Time Balances</h4>
                <p class="step-desc">Total balance, gross revenue, and expenditure stats update immediately, offering an accurate snapshot of financial health.</p>
            </div>

            <div class="workflow-step-connector">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>

            <div class="workflow-step-card">
                <div class="step-badge font-mono">03</div>
                <h4 class="step-title">Instant Audit & Review</h4>
                <p class="step-desc">Review, filter, inspect receipt files, or delete erroneous records anytime with intuitive inline table controls.</p>
            </div>
        </div>
    </section>

    <!-- Architecture & Tech Stack Card -->
    <section class="about-section">
        <div class="tech-stack-card">
            <div class="tech-stack-header">
                <div>
                    <h3 class="tech-stack-title">Engineered with modern web craftsmanship</h3>
                    <p class="tech-stack-subtitle">No bloated libraries, no unnecessary complexity. Just clean, maintainable, and robust code.</p>
                </div>
                <div class="tech-badge">
                    <span>PHP 8.4 Engine</span>
                </div>
            </div>

            <div class="tech-tags-wrapper">
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>PHP 8.4</strong> Strict Types & OOP
                </div>
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>Custom MVC</strong> Router & Controller Lifecycle
                </div>
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>Vanilla CSS</strong> Custom Design Tokens & Flex/Grid
                </div>
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>Vanilla JS</strong> Client-Side Filtering & Modal Management
                </div>
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>Template Engine</strong> Modular Partials & View Resolution
                </div>
                <div class="tech-tag-item">
                    <span class="tech-tag-bullet"></span>
                    <strong>Accessible HTML5</strong> Semantic Markup & ARIA Attributes
                </div>
            </div>
        </div>
    </section>

    <!-- Final Call to Action Banner -->
    <section class="about-cta-banner">
        <div class="cta-content">
            <h2 class="cta-title">Ready to take command of your finances?</h2>
            <p class="cta-desc">Start organizing your income, expenses, and receipts with Expencify today.</p>
            <div class="cta-buttons-group">
                <a href="/" class="btn btn-primary btn-lg" id="btn-cta-transactions">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>Go to Transactions</span>
                </a>
                <a href="/register" class="btn btn-secondary btn-lg" id="btn-cta-register">
                    <span>Sign Up Now</span>
                </a>
            </div>
        </div>
    </section>
</div>

<?php include $this->resolve('partials/_footer.php'); ?>