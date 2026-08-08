<?php include $this->resolve('/partials/_header.php'); ?>

<div class="container transaction-page-container">
    <!-- Top Header Banner & Actions -->
    <section class="page-header-section">
        <div class="page-header-text">
            <div class="badge-pill">
                <span class="badge-dot"></span>
                <span>Live Ledger</span>
            </div>
            <h1 class="page-title">Transactions</h1>
            <p class="page-subtitle">Track, filter, and audit all incoming revenues and outgoing expenses with verified receipts.</p>
        </div>

        <div class="page-header-actions">
            <button type="button" class="btn btn-primary js-open-transaction-modal" id="btn-create-transaction">
                <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <span>New Transaction</span>
            </button>
        </div>
    </section>

    <!-- Financial Metric Summary Cards -->
    <section class="metrics-grid" aria-label="Financial summary">
        <div class="metric-card">
            <div class="metric-header">
                <span class="metric-label">Total Balance</span>
                <div class="metric-icon-box bg-indigo-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                </div>
            </div>
            <div class="metric-value font-mono">$18,420.50</div>
            <div class="metric-footer text-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mini-icon">
                    <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                    <polyline points="17 6 23 6 23 12"></polyline>
                </svg>
                <span>+12.4% from last month</span>
            </div>
        </div>

        <div class="metric-card">
            <div class="metric-header">
                <span class="metric-label">Monthly Income</span>
                <div class="metric-icon-box bg-emerald-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="19" x2="12" y2="5"></line>
                        <polyline points="5 12 12 5 19 12"></polyline>
                    </svg>
                </div>
            </div>
            <div class="metric-value font-mono text-emerald">+$7,950.00</div>
            <div class="metric-footer text-muted">
                <span>5 incoming payouts</span>
            </div>
        </div>

        <div class="metric-card">
            <div class="metric-header">
                <span class="metric-label">Monthly Expenses</span>
                <div class="metric-icon-box bg-rose-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                </div>
            </div>
            <div class="metric-value font-mono text-rose">-$2,410.25</div>
            <div class="metric-footer text-muted">
                <span>18 recorded receipts</span>
            </div>
        </div>

        <div class="metric-card">
            <div class="metric-header">
                <span class="metric-label">Receipts Attached</span>
                <div class="metric-icon-box bg-amber-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
            </div>
            <div class="metric-value font-mono">92.8%</div>
            <div class="metric-footer text-muted">
                <span>21 of 23 transactions verified</span>
            </div>
        </div>
    </section>

    <!-- Transactions Main Card Section -->
    <section class="card table-card-wrapper">
        <!-- Search, Filter & Utility Controls -->
        <div class="table-toolbar">
            <form id="search-filter-form" class="search-form" onsubmit="return false;">
                <div class="search-input-group">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input
                        type="text"
                        id="transaction-search-input"
                        class="search-input"
                        placeholder="Search description, amount, receipt, or date..."
                        autocomplete="off">
                    <button type="button" class="btn-clear-search" id="search-clear-btn" aria-label="Clear search">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <button type="submit" class="btn btn-secondary" id="btn-search-submit">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <span>Search</span>
                </button>
            </form>

            <div class="filter-controls-group">
                <div class="select-wrapper">
                    <select id="category-filter" class="form-select" aria-label="Filter by category">
                        <option value="all">All Categories</option>
                        <option value="income">Income & Client Payments</option>
                        <option value="subscription">Subscriptions & SaaS</option>
                        <option value="infrastructure">Cloud & Hosting</option>
                        <option value="hardware">Equipment & Supplies</option>
                        <option value="dining">Food & Meals</option>
                        <option value="utilities">Utilities & Telecom</option>
                    </select>
                    <svg class="select-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>

                <button type="button" class="btn btn-primary js-open-transaction-modal" id="btn-quick-new-transaction">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>New Transaction</span>
                </button>
            </div>
        </div>

        <!-- Filter Status Feedback -->
        <div class="filter-meta-bar">
            <span class="results-badge" id="filtered-count-badge">Showing 7 transactions</span>
            <div class="legend-group">
                <span class="legend-item"><span class="legend-dot income"></span> Income</span>
                <span class="legend-item"><span class="legend-dot expense"></span> Expense</span>
            </div>
        </div>

        <!-- Transaction Table -->
        <div class="table-responsive">
            <table class="transaction-table" id="transactions-data-table">
                <thead>
                    <tr>
                        <th scope="col" class="th-desc">Description</th>
                        <th scope="col" class="th-amount">Amount</th>
                        <th scope="col" class="th-receipts">Receipts</th>
                        <th scope="col" class="th-date">Date</th>
                        <th scope="col" class="th-actions text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1: Client Milestone (Income) -->
                    <tr data-category="income">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon income" title="Income">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">Client Milestone Payout — FinTech Dashboard UI</span>
                                    <span class="desc-sub">Acme Global Corp • Wire Transfer #WT-88219</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge income font-mono">+$4,250.00</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                </svg>
                                <span class="receipt-name">invoice_#88219.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Aug 08, 2026</span>
                                <span class="date-sub">11:45 AM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Client Milestone Payout">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="Client Milestone Payout" title="Delete Transaction" aria-label="Delete Client Milestone Payout">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2: AWS Infrastructure (Expense) -->
                    <tr data-category="infrastructure">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon expense" title="Infrastructure Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                        <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">Amazon Web Services — EC2 & RDS Cluster</span>
                                    <span class="desc-sub">Monthly Cloud Infrastructure • Auto-debit</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge expense font-mono">-$342.18</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span class="receipt-name">aws_tax_inv_0826.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Aug 05, 2026</span>
                                <span class="date-sub">09:12 AM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit AWS Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="AWS Cloud Infrastructure" title="Delete Transaction" aria-label="Delete AWS Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3: SaaS Subscription (Expense) -->
                    <tr data-category="subscription">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon expense" title="Subscription Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">GitHub Enterprise + Figma Organization</span>
                                    <span class="desc-sub">Software Development Tools • Annual renewal</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge expense font-mono">-$189.00</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span class="receipt-name">gh_figma_receipt.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Aug 03, 2026</span>
                                <span class="date-sub">02:30 PM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Subscription">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="GitHub & Figma Subscription" title="Delete Transaction" aria-label="Delete Subscription">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4: Stripe SaaS Payout (Income) -->
                    <tr data-category="income">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon income" title="Income">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="12" y1="19" x2="12" y2="5"></line>
                                        <polyline points="5 12 12 5 19 12"></polyline>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">Stripe Balance Transfer — Monthly Subscriptions</span>
                                    <span class="desc-sub">Direct Deposit • Stripe Payout #po_99182a</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge income font-mono">+$3,700.00</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span class="receipt-name">stripe_payout_summary.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Aug 01, 2026</span>
                                <span class="date-sub">08:00 AM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Stripe Payout">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="Stripe Payout" title="Delete Transaction" aria-label="Delete Stripe Payout">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5: Hardware Equipment (Expense) -->
                    <tr data-category="hardware">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon expense" title="Equipment Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="8" y1="21" x2="16" y2="21"></line>
                                        <line x1="12" y1="17" x2="12" y2="21"></line>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">Dell UltraSharp 32" 4K Monitor & Ergonomic Arm</span>
                                    <span class="desc-sub">Workstation Upgrade • B&H Photo</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge expense font-mono">-$879.50</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span class="receipt-name">bh_invoice_90412.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Jul 28, 2026</span>
                                <span class="date-sub">04:15 PM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Equipment Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="Dell UltraSharp Monitor" title="Delete Transaction" aria-label="Delete Equipment Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6: Food / Team Lunch (Expense without receipt) -->
                    <tr data-category="dining">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon expense" title="Dining Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                        <line x1="6" y1="1" x2="6" y2="4"></line>
                                        <line x1="10" y1="1" x2="10" y2="4"></line>
                                        <line x1="14" y1="1" x2="14" y2="4"></line>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">Team Planning Lunch & Specialty Coffee</span>
                                    <span class="desc-sub">Artisan Kitchen • Card Ending in 4108</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge expense font-mono">-$94.50</span>
                        </td>
                        <td class="td-receipts">
                            <span class="receipt-empty-badge">
                                <svg class="mini-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                                <span>No receipt</span>
                            </span>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Jul 24, 2026</span>
                                <span class="date-sub">01:10 PM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Team Lunch">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="Team Planning Lunch" title="Delete Transaction" aria-label="Delete Team Lunch">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7: Utilities & Telecom (Expense) -->
                    <tr data-category="utilities">
                        <td class="td-desc">
                            <div class="desc-cell">
                                <div class="category-icon expense" title="Utilities Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="desc-content">
                                    <span class="desc-title">High-Speed Gigabit Fiber Internet</span>
                                    <span class="desc-sub">Verizon Business • Monthly Telecom</span>
                                </div>
                            </div>
                        </td>
                        <td class="td-amount">
                            <span class="amount-badge expense font-mono">-$125.00</span>
                        </td>
                        <td class="td-receipts">
                            <a href="#view-receipt" class="receipt-pill" title="View attached receipt document">
                                <svg class="receipt-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                                <span class="receipt-name">verizon_bill_jul.pdf</span>
                            </a>
                        </td>
                        <td class="td-date">
                            <div class="date-cell">
                                <span class="date-main">Jul 20, 2026</span>
                                <span class="date-sub">10:00 AM</span>
                            </div>
                        </td>
                        <td class="td-actions text-right">
                            <div class="action-buttons-group">
                                <button type="button" class="btn-action edit" title="Edit Transaction" aria-label="Edit Fiber Internet Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                                <button type="button" class="btn-action delete js-delete-btn" data-desc="Gigabit Fiber Internet" title="Delete Transaction" aria-label="Delete Fiber Internet Expense">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Empty State Row (Shown dynamically when filter matches 0 items) -->
                    <tr id="table-no-results-row" class="empty-row" style="display: none;">
                        <td colspan="5">
                            <div class="empty-state-box">
                                <div class="empty-icon-circle">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        <line x1="8" y1="11" x2="14" y2="11"></line>
                                    </svg>
                                </div>
                                <h3 class="empty-state-title">No matching transactions</h3>
                                <p class="empty-state-text">We couldn't find any transaction matching your current search terms or filter selection.</p>
                                <button type="button" class="btn btn-secondary" onclick="document.getElementById('search-clear-btn').click();">
                                    Reset Filters
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        <div class="table-pagination-wrapper">
            <div class="pagination-info">
                <span>Showing <strong class="text-dark">1</strong> to <strong class="text-dark">7</strong> of <strong class="text-dark">48</strong> transactions</span>
            </div>

            <nav class="pagination-controls" aria-label="Transactions table pagination">
                <button type="button" class="btn-page prev" disabled aria-label="Previous page">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    <span>Prev</span>
                </button>

                <div class="page-numbers">
                    <button type="button" class="btn-page-number is-active" aria-current="page">1</button>
                    <button type="button" class="btn-page-number">2</button>
                    <button type="button" class="btn-page-number">3</button>
                    <span class="pagination-ellipsis">...</span>
                    <button type="button" class="btn-page-number">7</button>
                </div>

                <button type="button" class="btn-page next" aria-label="Next page">
                    <span>Next</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </nav>
        </div>
    </section>
</div>

<!-- Modal: New Transaction Dialog -->
<div class="modal-backdrop" id="transaction-modal" role="dialog" aria-modal="true" aria-labelledby="modal-heading">
    <div class="modal-dialog">
        <div class="modal-header">
            <div class="modal-header-info">
                <div class="modal-icon-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </div>
                <div>
                    <h2 class="modal-title" id="modal-heading">New Transaction</h2>
                    <p class="modal-sub">Add a new financial transaction with receipt and category details.</p>
                </div>
            </div>
            <button type="button" class="modal-close-btn js-close-modal" aria-label="Close dialog">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <form class="modal-form" method="POST" action="/transactions" enctype="multipart/form-data">
            <div class="modal-body">
                <!-- Transaction Type Toggle -->
                <div class="form-group">
                    <label class="form-label">Transaction Type</label>
                    <div class="type-toggle-group">
                        <label class="type-radio-label">
                            <input type="radio" name="type" value="expense" checked class="type-radio-input">
                            <span class="type-pill expense-pill">
                                <svg class="mini-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <polyline points="19 12 12 19 5 12"></polyline>
                                </svg>
                                Expense
                            </span>
                        </label>
                        <label class="type-radio-label">
                            <input type="radio" name="type" value="income" class="type-radio-input">
                            <span class="type-pill income-pill">
                                <svg class="mini-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="12" y1="19" x2="12" y2="5"></line>
                                    <polyline points="5 12 12 5 19 12"></polyline>
                                </svg>
                                Income
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="input-description" class="form-label">Description <span class="required">*</span></label>
                    <input
                        type="text"
                        id="input-description"
                        name="description"
                        class="form-control"
                        placeholder="e.g. AWS Cloud Infrastructure Billing"
                        required>
                </div>

                <!-- Amount & Date Grid -->
                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="input-amount" class="form-label">Amount ($) <span class="required">*</span></label>
                        <div class="input-prefix-wrapper">
                            <span class="input-prefix">$</span>
                            <input
                                type="number"
                                step="0.01"
                                min="0.01"
                                id="input-amount"
                                name="amount"
                                class="form-control font-mono pl-currency"
                                placeholder="0.00"
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input-date" class="form-label">Date <span class="required">*</span></label>
                        <input
                            type="date"
                            id="input-date"
                            name="date"
                            class="form-control"
                            value="<?php echo date('Y-m-d'); ?>"
                            required>
                    </div>
                </div>

                <!-- Category -->
                <div class="form-group">
                    <label for="input-category" class="form-label">Category</label>
                    <div class="select-wrapper">
                        <select id="input-category" name="category" class="form-select">
                            <option value="infrastructure">Cloud & Hosting</option>
                            <option value="subscription">Subscriptions & SaaS</option>
                            <option value="hardware">Equipment & Hardware</option>
                            <option value="dining">Food & Meals</option>
                            <option value="utilities">Utilities & Telecom</option>
                            <option value="income">Income & Client Payment</option>
                            <option value="other">Other / Miscellaneous</option>
                        </select>
                        <svg class="select-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>

                <!-- Receipt Upload -->
                <div class="form-group">
                    <label class="form-label">Receipt Document (PDF or Image)</label>
                    <div class="file-dropzone">
                        <input type="file" id="receipt-upload" name="receipt" class="file-input" accept=".pdf,.png,.jpg,.jpeg,.webp">
                        <label for="receipt-upload" class="file-dropzone-inner">
                            <div class="file-icon-box">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                </svg>
                            </div>
                            <span class="file-label-main" id="file-upload-name">Choose receipt PDF or image (Max 5MB)</span>
                            <span class="file-label-sub">Drag and drop file here, or click to browse</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary js-close-modal">Cancel</button>
                <button type="submit" class="btn btn-primary">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <span>Save Transaction</span>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include $this->resolve('/partials/_footer.php'); ?>