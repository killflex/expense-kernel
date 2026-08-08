        </main>

        <!-- Footer Section -->
        <footer class="footer-wrapper">
            <div class="footer-container">
                <div class="footer-brand-side">
                    <div class="footer-logo">
                        <div class="footer-icon-box">
                            <svg class="brand-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.5-1 2-2V7.5c0-.8-.7-1.5-1.5-1.5H19z"></path>
                                <circle cx="7" cy="11" r="1"></circle>
                                <path d="M16 11h.01"></path>
                            </svg>
                        </div>
                        <span class="footer-brand-name">Expencify</span>
                    </div>
                    <p class="footer-desc">A simple, powerful, and secure expense and transaction tracking engine designed with clean architecture.</p>
                    <div class="footer-status-pill">
                        <span class="status-dot"></span>
                        <span>PHP 8.4 Engine</span>
                    </div>
                </div>

                <div class="footer-nav-columns">
                    <div class="footer-col">
                        <h4>Application</h4>
                        <ul>
                            <li><a href="/">Transactions</a></li>
                            <li><a href="/about">About Expencify</a></li>
                            <li><a href="#new-transaction" id="footer-quick-add">Add Transaction</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Account</h4>
                        <ul>
                            <li><a href="/login">Sign In</a></li>
                            <li><a href="/register">Create Account</a></li>
                            <li><a href="/logout">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-container">
                    <p>&copy; <?php echo date('Y'); ?> Expencify. Built for modern financial clarity. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a>
                        <span class="dot-separator">•</span>
                        <a href="#">Terms of Service</a>
                        <span class="dot-separator">•</span>
                        <a href="#">Documentation</a>
                    </div>
                </div>
            </div>
        </footer>
        </div>

        <!-- Client-side Interactive Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Mobile Menu Toggle
                const toggleBtn = document.getElementById('mobile-menu-toggle');
                const navMenu = document.getElementById('primary-nav-menu');

                if (toggleBtn && navMenu) {
                    toggleBtn.addEventListener('click', () => {
                        const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
                        toggleBtn.setAttribute('aria-expanded', !isExpanded);
                        navMenu.classList.toggle('is-open');
                    });
                }

                // Modal Interactions (New Transaction Modal)
                const modal = document.getElementById('transaction-modal');
                const openModalBtns = document.querySelectorAll('.js-open-transaction-modal, #footer-quick-add');
                const closeModalBtns = document.querySelectorAll('.js-close-modal');

                const openModal = () => {
                    if (modal) {
                        modal.classList.add('is-active');
                        document.body.style.overflow = 'hidden';
                        const firstInput = modal.querySelector('input, select, textarea');
                        if (firstInput) firstInput.focus();
                    }
                };

                const closeModal = () => {
                    if (modal) {
                        modal.classList.remove('is-active');
                        document.body.style.overflow = '';
                    }
                };

                openModalBtns.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        openModal();
                    });
                });

                closeModalBtns.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        closeModal();
                    });
                });

                // Close modal on Escape key
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && modal && modal.classList.contains('is-active')) {
                        closeModal();
                    }
                });

                // Live Table Search & Filter
                const searchInput = document.getElementById('transaction-search-input');
                const searchForm = document.getElementById('search-filter-form');
                const searchClearBtn = document.getElementById('search-clear-btn');
                const categoryFilter = document.getElementById('category-filter');
                const tableRows = document.querySelectorAll('.transaction-table tbody tr:not(.empty-row)');
                const emptyStateRow = document.getElementById('table-no-results-row');
                const resultCountBadge = document.getElementById('filtered-count-badge');

                function filterTransactions() {
                    const query = (searchInput ? searchInput.value : '').toLowerCase().trim();
                    const selectedCategory = categoryFilter ? categoryFilter.value.toLowerCase().trim() : '';

                    let matchCount = 0;

                    tableRows.forEach(row => {
                        const text = row.innerText.toLowerCase();
                        const rowCategory = (row.dataset.category || '').toLowerCase();

                        const matchesQuery = !query || text.includes(query);
                        const matchesCat = !selectedCategory || selectedCategory === 'all' || rowCategory === selectedCategory;

                        if (matchesQuery && matchesCat) {
                            row.style.display = '';
                            matchCount++;
                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (emptyStateRow) {
                        emptyStateRow.style.display = matchCount === 0 ? 'table-row' : 'none';
                    }

                    if (resultCountBadge) {
                        resultCountBadge.textContent = `${matchCount} results found`;
                    }

                    if (searchClearBtn) {
                        searchClearBtn.style.display = query.length > 0 ? 'inline-flex' : 'none';
                    }
                }

                if (searchInput) {
                    searchInput.addEventListener('input', filterTransactions);
                }

                if (categoryFilter) {
                    categoryFilter.addEventListener('change', filterTransactions);
                }

                if (searchForm) {
                    searchForm.addEventListener('submit', (e) => {
                        e.preventDefault();
                        filterTransactions();
                    });
                }

                if (searchClearBtn) {
                    searchClearBtn.addEventListener('click', () => {
                        if (searchInput) {
                            searchInput.value = '';
                            filterTransactions();
                            searchInput.focus();
                        }
                    });
                }

                // File upload label update
                const receiptInput = document.getElementById('receipt-upload');
                const fileLabelText = document.getElementById('file-upload-name');
                if (receiptInput && fileLabelText) {
                    receiptInput.addEventListener('change', (e) => {
                        if (e.target.files && e.target.files.length > 0) {
                            fileLabelText.textContent = e.target.files[0].name;
                            fileLabelText.classList.add('has-file');
                        } else {
                            fileLabelText.textContent = 'Choose receipt PDF or image (Max 5MB)';
                            fileLabelText.classList.remove('has-file');
                        }
                    });
                }

                // Interactive Delete Confirmation
                const deleteButtons = document.querySelectorAll('.js-delete-btn');
                deleteButtons.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        const desc = btn.dataset.desc || 'this transaction';
                        if (!confirm(`Are you sure you want to delete "${desc}"? This action cannot be undone.`)) {
                            e.preventDefault();
                        }
                    });
                });
            });
        </script>
        </body>

        </html>