<?php include $this->resolve('partials/_header.php'); ?>

<!-- Embedded Self-Contained Styles for Register Page (Prevents browser cache & path resolution glitches) -->
<style>
    /* Scope: Authentication & Register Page */
    .auth-page-container {
        padding-top: 32px;
        padding-bottom: 64px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
        box-sizing: border-box;
    }

    .auth-header-strip {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 36px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .auth-header-strip .badge-pill {
        margin-bottom: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px;
        background-color: var(--primary-50, #eef2ff);
        border: 1px solid var(--primary-200, #c7d2fe);
        color: var(--primary-700, #4338ca);
        border-radius: 9999px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .auth-page-title {
        font-size: 2.4rem;
        font-weight: 800;
        letter-spacing: -0.03em;
        color: var(--slate-900, #0f172a);
        line-height: 1.2;
        margin: 0 0 10px 0;
    }

    .auth-page-subtitle {
        font-size: 1.05rem;
        color: var(--slate-600, #475569);
        line-height: 1.6;
        margin: 0;
    }

    /* Split Layout Grid */
    .auth-split-wrapper {
        display: grid;
        grid-template-columns: 1fr 1.15fr;
        gap: 32px;
        align-items: stretch;
        max-width: 1120px;
        margin: 0 auto;
    }

    /* Left Showcase Panel */
    .auth-showcase-panel {
        position: relative;
        background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 55%, #111827 100%);
        border-radius: 20px;
        padding: 40px;
        color: #ffffff;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.4);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .showcase-glow-orb {
        position: absolute;
        top: -80px;
        right: -80px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.25) 0%, transparent 70%);
        filter: blur(40px);
        pointer-events: none;
    }

    .showcase-content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .showcase-brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
    }

    .showcase-icon-box {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: linear-gradient(135deg, #6366f1, #4338ca);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(79, 70, 229, 0.4);
        flex-shrink: 0;
    }

    .showcase-badge-text {
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: #a5b4fc;
    }

    .showcase-title {
        font-size: 1.75rem;
        font-weight: 800;
        letter-spacing: -0.025em;
        line-height: 1.3;
        margin: 0 0 14px 0;
        color: #ffffff;
    }

    .showcase-desc {
        font-size: 0.95rem;
        color: #cbd5e1;
        line-height: 1.6;
        margin: 0 0 32px 0;
    }

    .showcase-features-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 32px;
    }

    .showcase-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    .feature-icon-box {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .feature-icon-box.bg-indigo {
        background: rgba(99, 102, 241, 0.15);
        border: 1px solid rgba(99, 102, 241, 0.3);
        color: #a5b4fc;
    }

    .feature-icon-box.bg-emerald {
        background: rgba(16, 185, 129, 0.15);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #6ee7b7;
    }

    .feature-icon-box.bg-amber {
        background: rgba(245, 158, 11, 0.15);
        border: 1px solid rgba(245, 158, 11, 0.3);
        color: #fcd34d;
    }

    .feature-info {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .feature-title {
        font-size: 0.95rem;
        font-weight: 700;
        color: #f8fafc;
        margin: 0;
    }

    .feature-desc {
        font-size: 0.85rem;
        color: #94a3b8;
        line-height: 1.5;
        margin: 0;
    }

    /* Testimonial Card */
    .auth-testimonial-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 14px;
        padding: 20px;
        margin-top: auto;
        margin-bottom: 24px;
    }

    .testimonial-stars {
        display: flex;
        gap: 4px;
        color: #f59e0b;
        margin-bottom: 10px;
    }

    .testimonial-quote {
        font-size: 0.875rem;
        font-style: italic;
        color: #e2e8f0;
        line-height: 1.55;
        margin: 0 0 14px 0;
    }

    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .author-avatar {
        width: 34px;
        height: 34px;
        border-radius: 9999px;
        background: linear-gradient(135deg, #4f46e5, #ec4899);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .author-meta {
        display: flex;
        flex-direction: column;
    }

    .author-name {
        font-size: 0.85rem;
        font-weight: 700;
        color: #ffffff;
    }

    .author-role {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    /* Trust Badges Strip */
    .showcase-trust-strip {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
        padding-top: 14px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
    }

    .trust-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 4px 10px;
        border-radius: 9999px;
        font-size: 0.725rem;
        color: #cbd5e1;
    }

    .trust-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #10b981;
        box-shadow: 0 0 6px #10b981;
        flex-shrink: 0;
    }

    /* Right Side: Registration Form Card */
    .auth-form-card {
        background-color: var(--bg-surface, #ffffff);
        border: 1px solid var(--border-color, #e2e8f0);
        border-radius: 20px;
        box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.04);
        padding: 38px;
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
    }

    .card-header-block {
        margin-bottom: 22px;
    }

    .card-badge-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .sub-text-muted {
        font-size: 0.775rem;
        color: var(--slate-500, #64748b);
        font-weight: 500;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 800;
        letter-spacing: -0.025em;
        color: var(--slate-900, #0f172a);
        margin: 0 0 6px 0;
    }

    .card-desc {
        font-size: 0.9rem;
        color: var(--slate-600, #475569);
        line-height: 1.5;
        margin: 0;
    }

    /* Social One-Click Auth */
    .social-auth-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 22px;
    }

    .btn-social {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 10px 14px;
        background-color: #ffffff;
        border: 1px solid var(--border-color, #e2e8f0);
        border-radius: 10px;
        color: var(--slate-700, #334155);
        font-size: 0.85rem;
        font-weight: 600;
        transition: all 150ms ease;
        box-shadow: 0 1px 2px 0 rgba(15, 23, 42, 0.05);
        cursor: pointer;
    }

    .btn-social:hover {
        background-color: #f8fafc;
        border-color: #cbd5e1;
        color: #0f172a;
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(15, 23, 42, 0.08);
    }

    /* Visual Divider */
    .auth-divider {
        position: relative;
        text-align: center;
        margin-bottom: 22px;
    }

    .auth-divider::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background-color: var(--border-color, #e2e8f0);
    }

    .auth-divider span {
        position: relative;
        display: inline-block;
        padding: 0 14px;
        background-color: #ffffff;
        color: var(--slate-400, #94a3b8);
        font-size: 0.775rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Form Layout & Inputs */
    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-grid-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    .form-label {
        font-size: 0.825rem;
        font-weight: 600;
        color: var(--slate-700, #334155);
    }

    .form-label .required {
        color: #e11d48;
    }

    .label-with-hint {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .label-hint {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 500;
    }

    /* Input with prefix icon wrapper */
    .auth-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        box-sizing: border-box;
    }

    .input-icon-prefix {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--slate-400, #94a3b8);
        pointer-events: none;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        z-index: 2;
    }

    .auth-input {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 14px 10px 40px;
        font-size: 0.925rem;
        border-radius: 10px;
        border: 1px solid var(--border-color, #e2e8f0);
        background-color: #ffffff;
        color: var(--slate-900, #0f172a);
        transition: all 150ms ease;
        line-height: 1.4;
    }

    .auth-input:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.18);
    }

    .auth-input.has-toggle-btn {
        padding-right: 44px;
    }

    .auth-input.is-invalid {
        border-color: #f43f5e;
        background-color: #fffbfa;
    }

    .select-wrapper {
        position: relative;
        width: 100%;
    }

    .auth-select {
        width: 100%;
        box-sizing: border-box;
        appearance: none;
        -webkit-appearance: none;
        padding: 10px 36px 10px 14px;
        font-size: 0.9rem;
        border-radius: 10px;
        border: 1px solid var(--border-color, #e2e8f0);
        background-color: #ffffff;
        color: var(--slate-900, #0f172a);
        transition: all 150ms ease;
    }

    .auth-select:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.18);
    }

    .select-arrow {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: #94a3b8;
    }

    /* Password Reveal Toggle */
    .btn-toggle-password {
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        width: 32px;
        height: 32px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: all 150ms ease;
        z-index: 3;
    }

    .btn-toggle-password:hover {
        color: #334155;
        background-color: #f1f5f9;
    }

    /* Password Strength Visualizer */
    .strength-meter-container {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-top: 4px;
    }

    .strength-bar-track {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 6px;
    }

    .strength-segment {
        height: 4px;
        border-radius: 2px;
        background-color: #e2e8f0;
        transition: background-color 200ms ease;
    }

    .strength-segment.is-weak { background-color: #f43f5e; }
    .strength-segment.is-fair { background-color: #f59e0b; }
    .strength-segment.is-good { background-color: #3b82f6; }
    .strength-segment.is-strong { background-color: #10b981; }

    .strength-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.775rem;
    }

    .strength-label {
        color: #64748b;
    }

    .strength-badge {
        font-weight: 700;
        font-size: 0.75rem;
        color: #94a3b8;
    }

    .strength-badge.badge-weak { color: #e11d48; }
    .strength-badge.badge-fair { color: #d97706; }
    .strength-badge.badge-good { color: #2563eb; }
    .strength-badge.badge-strong { color: #059669; }

    /* Password Checklist */
    .password-criteria-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 14px;
        margin-top: 4px;
    }

    .criteria-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.75rem;
        color: #64748b;
        transition: color 150ms ease;
    }

    .criteria-bullet {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #cbd5e1;
        transition: all 150ms ease;
        flex-shrink: 0;
    }

    .criteria-item.is-valid {
        color: #059669;
        font-weight: 600;
    }

    .criteria-item.is-valid .criteria-bullet {
        background-color: #10b981;
        box-shadow: 0 0 4px #10b981;
    }

    /* Password Match Indicator */
    .password-match-indicator {
        font-size: 0.75rem;
        font-weight: 600;
    }

    .password-match-indicator.text-match { color: #059669; }
    .password-match-indicator.text-mismatch { color: #e11d48; }

    /* Custom Checkbox */
    .form-check-group {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .custom-checkbox-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        cursor: pointer;
        user-select: none;
    }

    .custom-checkbox-input {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
        pointer-events: none;
    }

    .custom-checkbox-box {
        width: 18px;
        height: 18px;
        border-radius: 4px;
        border: 1.5px solid #cbd5e1;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 2px;
        transition: all 150ms ease;
    }

    .custom-checkbox-box svg {
        opacity: 0;
        transform: scale(0.6);
        transition: all 150ms ease;
    }

    .custom-checkbox-input:checked + .custom-checkbox-box {
        background-color: #4f46e5;
        border-color: #4f46e5;
    }

    .custom-checkbox-input:checked + .custom-checkbox-box svg {
        opacity: 1;
        transform: scale(1);
    }

    .checkbox-text {
        font-size: 0.85rem;
        color: var(--slate-700, #334155);
        line-height: 1.45;
    }

    .checkbox-text.text-muted {
        color: var(--slate-500, #64748b);
        font-size: 0.8rem;
    }

    /* Submit Button */
    .btn-submit-register {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 13px 24px;
        font-size: 0.95rem;
        font-weight: 700;
        border-radius: 10px;
        margin-top: 6px;
        background: linear-gradient(180deg, #6366f1 0%, #4f46e5 100%);
        color: #ffffff;
        border: 1px solid #4338ca;
        box-shadow: 0 1px 2px rgba(79, 70, 229, 0.2);
        cursor: pointer;
        transition: all 150ms ease;
    }

    .btn-submit-register:hover {
        background: linear-gradient(180deg, #4f46e5 0%, #4338ca 100%);
        transform: translateY(-1px);
        box-shadow: 0 4px 10px rgba(79, 70, 229, 0.28);
    }

    .btn-icon-right {
        transition: transform 150ms ease;
    }

    .btn-submit-register:hover .btn-icon-right {
        transform: translateX(3px);
    }

    /* Card Bottom Footer */
    .card-footer-auth {
        margin-top: 24px;
        padding-top: 18px;
        border-top: 1px solid var(--border-color, #e2e8f0);
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
    }

    .signin-prompt {
        font-size: 0.875rem;
        color: #475569;
        margin: 0;
    }

    .auth-text-link {
        color: #4f46e5;
        text-decoration: none;
    }

    .auth-text-link:hover {
        color: #3730a3;
        text-decoration: underline;
    }

    .footer-guarantee-note {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.775rem;
        color: #64748b;
    }

    .form-error-feedback {
        font-size: 0.775rem;
        color: #e11d48;
        font-weight: 600;
        margin-top: 2px;
    }

    /* Responsive Queries */
    @media (max-width: 960px) {
        .auth-split-wrapper {
            grid-template-columns: 1fr;
            gap: 28px;
        }
        .auth-showcase-panel {
            padding: 32px;
            order: 2;
        }
        .auth-form-card {
            padding: 32px 24px;
            order: 1;
        }
        .auth-page-title {
            font-size: 2.1rem;
        }
    }

    @media (max-width: 640px) {
        .auth-header-strip {
            margin-bottom: 22px;
        }
        .auth-page-title {
            font-size: 1.85rem;
        }
        .social-auth-group {
            grid-template-columns: 1fr;
        }
        .auth-form-card {
            padding: 24px 18px;
        }
        .auth-showcase-panel {
            padding: 24px 18px;
        }
        .form-grid-2 {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container auth-page-container">
    <!-- Page Header Introduction -->
    <header class="auth-header-strip">
        <div class="badge-pill">
            <svg class="badge-icon-mini" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 14px; height: 14px; min-width: 14px; min-height: 14px; flex-shrink: 0;">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <span>Bank-Grade 256-Bit Security • Free Registration</span>
        </div>
        <h1 class="auth-page-title">
            Join <span class="gradient-text">Expencify</span>
        </h1>
        <p class="auth-page-subtitle">
            Create your account to unlock real-time transaction tracking, receipt archiving, and effortless financial control.
        </p>
    </header>

    <!-- Main Auth Split Layout: Showcase Trust Panel + Register Form -->
    <div class="auth-split-wrapper">
        <!-- Left Side: Showcase & Trust Panel -->
        <aside class="auth-showcase-panel">
            <div class="showcase-glow-orb"></div>
            
            <div class="showcase-content">
                <div class="showcase-brand-badge">
                    <div class="showcase-icon-box">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; min-width: 20px; min-height: 20px; flex-shrink: 0;">
                            <path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.5-1 2-2V7.5c0-.8-.7-1.5-1.5-1.5H19z"></path>
                            <circle cx="7" cy="11" r="1"></circle>
                            <path d="M16 11h.01"></path>
                        </svg>
                    </div>
                    <span class="showcase-badge-text">EXPENCIFY PLATFORM</span>
                </div>

                <h2 class="showcase-title">
                    The modern ledger engineered for clarity and peace of mind.
                </h2>
                <p class="showcase-desc">
                    Say goodbye to scattered receipts, bloated accounting software, and untracked expenses. Expencify gives you an audit-ready financial workspace in seconds.
                </p>

                <!-- Value Highlights List -->
                <div class="showcase-features-list">
                    <div class="showcase-feature-item">
                        <div class="feature-icon-box bg-indigo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; min-width: 20px; min-height: 20px; flex-shrink: 0;">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                        </div>
                        <div class="feature-info">
                            <h3 class="feature-title">Live Transaction Tracking</h3>
                            <p class="feature-desc">Monitor total balances, gross income, and operational burn rates in real time.</p>
                        </div>
                    </div>

                    <div class="showcase-feature-item">
                        <div class="feature-icon-box bg-emerald">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; min-width: 20px; min-height: 20px; flex-shrink: 0;">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                            </svg>
                        </div>
                        <div class="feature-info">
                            <h3 class="feature-title">Permanent Receipt Vault</h3>
                            <p class="feature-desc">Attach invoice PDFs and photo receipts with 1-click retrieval for audits and tax time.</p>
                        </div>
                    </div>

                    <div class="showcase-feature-item">
                        <div class="feature-icon-box bg-amber">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; min-width: 20px; min-height: 20px; flex-shrink: 0;">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                        <div class="feature-info">
                            <h3 class="feature-title">Strict Privacy Guarantee</h3>
                            <p class="feature-desc">Zero third-party trackers or ad profiling. Your financial data is strictly yours.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Quote Card -->
                <div class="auth-testimonial-card">
                    <div class="testimonial-stars" aria-label="5 out of 5 stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg class="star-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="width: 16px; height: 16px; min-width: 16px; min-height: 16px; flex-shrink: 0;">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <blockquote class="testimonial-quote">
                        &ldquo;Expencify reduced our month-end receipt auditing from days to literally minutes. Clean, lightning fast, and intuitive.&rdquo;
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-avatar font-mono">SR</div>
                        <div class="author-meta">
                            <span class="author-name">Sophia Reynolds</span>
                            <span class="author-role">Operations & Finance, Studio Apex</span>
                        </div>
                    </div>
                </div>

                <!-- Security Badges Strip -->
                <div class="showcase-trust-strip">
                    <div class="trust-pill font-mono">
                        <span class="trust-dot"></span>
                        <span>256-Bit SSL</span>
                    </div>
                    <div class="trust-pill font-mono">
                        <span class="trust-dot"></span>
                        <span>PHP 8.4 Engine</span>
                    </div>
                    <div class="trust-pill font-mono">
                        <span class="trust-dot"></span>
                        <span>99.9% Uptime</span>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Right Side: Interactive Registration Card -->
        <main class="auth-form-card">
            <div class="card-header-block">
                <div class="card-badge-row">
                    <span class="badge-pill" style="margin: 0; padding: 4px 10px; font-size: 0.75rem;">Get Started Free</span>
                    <span class="sub-text-muted">No credit card required</span>
                </div>
                <h2 class="card-title">Create your account</h2>
                <p class="card-desc">Enter your details below to set up your personal expense tracking space.</p>
            </div>

            <!-- Social One-Click Signup Buttons -->
            <div class="social-auth-group">
                <button type="button" class="btn-social" id="btn-signup-google" title="Register with Google">
                    <svg class="social-icon" width="18" height="18" viewBox="0 0 24 24" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                    </svg>
                    <span>Sign up with Google</span>
                </button>

                <button type="button" class="btn-social" id="btn-signup-github" title="Register with GitHub">
                    <svg class="social-icon" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                    </svg>
                    <span>Sign up with GitHub</span>
                </button>
            </div>

            <!-- Visual Divider -->
            <div class="auth-divider">
                <span>or register with email</span>
            </div>

            <!-- Server-Side Error Banner (Optional rendering) -->
            <?php if (!empty($errors['general'])): ?>
                <div class="auth-alert-box alert-danger" role="alert" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 20px; background-color: #fff1f2; border: 1px solid #fecdd3; color: #be123c;">
                    <svg class="alert-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <span><?php echo e(is_array($errors['general']) ? $errors['general'][0] : $errors['general']); ?></span>
                </div>
            <?php endif; ?>

            <!-- Form Element -->
            <form action="/register" method="POST" class="auth-form" id="register-form" novalidate>
                <!-- Email Address -->
                <div class="form-group">
                    <label for="register-email" class="form-label">
                        Email Address <span class="required">*</span>
                    </label>
                    <div class="auth-input-wrapper">
                        <span class="input-icon-prefix">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </span>
                        <input
                            type="email"
                            id="register-email"
                            name="email"
                            class="form-control auth-input <?php echo !empty($errors['email']) ? 'is-invalid' : ''; ?>"
                            placeholder="alex@example.com"
                            value="<?php echo e($oldFormData['email'] ?? ''); ?>"
                            required
                            autocomplete="email">
                    </div>
                    <?php if (!empty($errors['email'])): ?>
                        <div class="form-error-feedback">
                            <?php echo e(is_array($errors['email']) ? $errors['email'][0] : $errors['email']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Age & Country Row -->
                <div class="form-grid-2">
                    <!-- Age -->
                    <div class="form-group">
                        <label for="register-age" class="form-label">
                            Age <span class="required">*</span>
                        </label>
                        <div class="auth-input-wrapper">
                            <span class="input-icon-prefix">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                            <input
                                type="number"
                                id="register-age"
                                name="age"
                                class="form-control auth-input font-mono <?php echo !empty($errors['age']) ? 'is-invalid' : ''; ?>"
                                placeholder="25"
                                min="18"
                                max="120"
                                value="<?php echo e($oldFormData['age'] ?? ''); ?>"
                                required>
                        </div>
                        <?php if (!empty($errors['age'])): ?>
                            <div class="form-error-feedback">
                                <?php echo e(is_array($errors['age']) ? $errors['age'][0] : $errors['age']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Country -->
                    <div class="form-group">
                        <label for="register-country" class="form-label">
                            Country <span class="required">*</span>
                        </label>
                        <div class="select-wrapper">
                            <select
                                id="register-country"
                                name="country"
                                class="form-select auth-select <?php echo !empty($errors['country']) ? 'is-invalid' : ''; ?>"
                                required>
                                <?php
                                $selectedCountry = $oldFormData['country'] ?? 'USA';
                                $countries = [
                                    'USA' => 'United States (USA)',
                                    'Canada' => 'Canada',
                                    'Mexico' => 'Mexico',
                                    'United Kingdom' => 'United Kingdom (UK)',
                                    'Australia' => 'Australia',
                                    'Germany' => 'Germany',
                                    'France' => 'France',
                                    'Indonesia' => 'Indonesia',
                                    'Singapore' => 'Singapore',
                                    'Japan' => 'Japan',
                                    'Other' => 'Other Country'
                                ];
                                foreach ($countries as $code => $countryLabel): ?>
                                    <option value="<?php echo e($code); ?>" <?php echo $selectedCountry === $code ? 'selected' : ''; ?>>
                                        <?php echo e($countryLabel); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <svg class="select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px; min-width: 16px; min-height: 16px; flex-shrink: 0;">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                        <?php if (!empty($errors['country'])): ?>
                            <div class="form-error-feedback">
                                <?php echo e(is_array($errors['country']) ? $errors['country'][0] : $errors['country']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Social Media / Website URL -->
                <div class="form-group">
                    <div class="label-with-hint">
                        <label for="register-social" class="form-label">Social Media Profile or Website</label>
                        <span class="label-hint">Optional</span>
                    </div>
                    <div class="auth-input-wrapper">
                        <span class="input-icon-prefix">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                            </svg>
                        </span>
                        <input
                            type="url"
                            id="register-social"
                            name="social_media_url"
                            class="form-control auth-input <?php echo !empty($errors['social_media_url']) ? 'is-invalid' : ''; ?>"
                            placeholder="https://twitter.com/yourusername"
                            value="<?php echo e($oldFormData['social_media_url'] ?? ''); ?>">
                    </div>
                    <?php if (!empty($errors['social_media_url'])): ?>
                        <div class="form-error-feedback">
                            <?php echo e(is_array($errors['social_media_url']) ? $errors['social_media_url'][0] : $errors['social_media_url']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="register-password" class="form-label">
                        Password <span class="required">*</span>
                    </label>
                    <div class="auth-input-wrapper">
                        <span class="input-icon-prefix">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </span>
                        <input
                            type="password"
                            id="register-password"
                            name="password"
                            class="form-control auth-input has-toggle-btn <?php echo !empty($errors['password']) ? 'is-invalid' : ''; ?>"
                            placeholder="Create a strong password"
                            required
                            autocomplete="new-password">
                        <button
                            type="button"
                            class="btn-toggle-password"
                            data-target="register-password"
                            aria-label="Toggle password visibility"
                            aria-pressed="false">
                            <svg class="icon-eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg class="icon-eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none; width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>

                    <!-- Dynamic Password Strength Visualizer -->
                    <div class="strength-meter-container" id="strength-meter-wrap">
                        <div class="strength-bar-track">
                            <div class="strength-segment" id="seg-1"></div>
                            <div class="strength-segment" id="seg-2"></div>
                            <div class="strength-segment" id="seg-3"></div>
                            <div class="strength-segment" id="seg-4"></div>
                        </div>
                        <div class="strength-meta">
                            <span class="strength-label">Password strength:</span>
                            <span class="strength-badge font-mono" id="strength-badge">Too Short</span>
                        </div>
                    </div>

                    <!-- Password Requirement Hints -->
                    <div class="password-criteria-list">
                        <div class="criteria-item" id="crit-length">
                            <span class="criteria-bullet"></span>
                            <span>At least 8 characters</span>
                        </div>
                        <div class="criteria-item" id="crit-casing">
                            <span class="criteria-bullet"></span>
                            <span>Mixed uppercase & lowercase</span>
                        </div>
                        <div class="criteria-item" id="crit-number">
                            <span class="criteria-bullet"></span>
                            <span>Number or special character</span>
                        </div>
                    </div>

                    <?php if (!empty($errors['password'])): ?>
                        <div class="form-error-feedback">
                            <?php echo e(is_array($errors['password']) ? $errors['password'][0] : $errors['password']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <div class="label-with-hint">
                        <label for="register-confirm-password" class="form-label">
                            Confirm Password <span class="required">*</span>
                        </label>
                        <span class="password-match-indicator" id="password-match-status"></span>
                    </div>
                    <div class="auth-input-wrapper">
                        <span class="input-icon-prefix">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <polyline points="9 12 11 14 15 10"></polyline>
                            </svg>
                        </span>
                        <input
                            type="password"
                            id="register-confirm-password"
                            name="confirm_password"
                            class="form-control auth-input has-toggle-btn <?php echo !empty($errors['confirm_password']) ? 'is-invalid' : ''; ?>"
                            placeholder="Repeat your password"
                            required
                            autocomplete="new-password">
                        <button
                            type="button"
                            class="btn-toggle-password"
                            data-target="register-confirm-password"
                            aria-label="Toggle confirm password visibility"
                            aria-pressed="false">
                            <svg class="icon-eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <svg class="icon-eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none; width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                <line x1="1" y1="1" x2="23" y2="23"></line>
                            </svg>
                        </button>
                    </div>
                    <?php if (!empty($errors['confirm_password'])): ?>
                        <div class="form-error-feedback">
                            <?php echo e(is_array($errors['confirm_password']) ? $errors['confirm_password'][0] : $errors['confirm_password']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Terms and Conditions Checkbox -->
                <div class="form-check-group">
                    <label class="custom-checkbox-item">
                        <input
                            type="checkbox"
                            name="tos"
                            id="input-tos"
                            class="custom-checkbox-input"
                            <?php echo !empty($oldFormData['tos']) ? 'checked' : ''; ?>
                            required>
                        <span class="custom-checkbox-box">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="width: 12px; height: 12px; min-width: 12px; min-height: 12px; flex-shrink: 0;">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        <span class="checkbox-text">
                            I agree to the <a href="#" class="auth-text-link">Terms of Service</a> and acknowledge the <a href="#" class="auth-text-link">Privacy Policy</a>. <span class="required">*</span>
                        </span>
                    </label>
                    <?php if (!empty($errors['tos'])): ?>
                        <div class="form-error-feedback">
                            <?php echo e(is_array($errors['tos']) ? $errors['tos'][0] : $errors['tos']); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Optional Newsletter Checkbox -->
                <div class="form-check-group">
                    <label class="custom-checkbox-item">
                        <input
                            type="checkbox"
                            name="updates_opt_in"
                            id="input-updates"
                            class="custom-checkbox-input"
                            checked>
                        <span class="custom-checkbox-box">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" style="width: 12px; height: 12px; min-width: 12px; min-height: 12px; flex-shrink: 0;">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        <span class="checkbox-text text-muted">
                            Send me occasional updates about new ledger features and financial management tips.
                        </span>
                    </label>
                </div>

                <!-- Form Submit Button -->
                <button type="submit" class="btn btn-primary btn-submit-register" id="btn-submit-account">
                    <span class="btn-text">Create Free Account</span>
                    <svg class="btn-icon-right" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px; flex-shrink: 0;">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </form>

            <!-- Card Bottom Trust & Switcher -->
            <div class="card-footer-auth">
                <p class="signin-prompt">
                    Already have an Expencify account?
                    <a href="/login" class="auth-text-link font-semibold">Sign in here</a>
                </p>
                <div class="footer-guarantee-note">
                    <svg class="mini-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 14px; height: 14px; min-width: 14px; min-height: 14px; flex-shrink: 0;">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <span>Instant activation • 100% Free plan included</span>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Interactive Client-side Validation & UX Helpers -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Password Visibility Toggle
        const toggleButtons = document.querySelectorAll('.btn-toggle-password');
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');
                const targetInput = document.getElementById(targetId);
                const eyeOpen = btn.querySelector('.icon-eye-open');
                const eyeClosed = btn.querySelector('.icon-eye-closed');

                if (!targetInput) return;

                const isPassword = targetInput.type === 'password';
                targetInput.type = isPassword ? 'text' : 'password';
                btn.setAttribute('aria-pressed', isPassword ? 'true' : 'false');

                if (eyeOpen && eyeClosed) {
                    eyeOpen.style.display = isPassword ? 'none' : 'block';
                    eyeClosed.style.display = isPassword ? 'block' : 'none';
                }
            });
        });

        // 2. Interactive Password Strength & Match Analysis
        const passwordInput = document.getElementById('register-password');
        const confirmInput = document.getElementById('register-confirm-password');
        const strengthBadge = document.getElementById('strength-badge');
        const segments = [
            document.getElementById('seg-1'),
            document.getElementById('seg-2'),
            document.getElementById('seg-3'),
            document.getElementById('seg-4')
        ];

        const critLength = document.getElementById('crit-length');
        const critCasing = document.getElementById('crit-casing');
        const critNumber = document.getElementById('crit-number');
        const matchStatus = document.getElementById('password-match-status');

        function updatePasswordStrength() {
            const val = passwordInput ? passwordInput.value : '';
            let score = 0;

            const hasLength = val.length >= 8;
            const hasCasing = /[a-z]/.test(val) && /[A-Z]/.test(val);
            const hasNumberOrSpec = /[0-9]/.test(val) || /[^A-Za-z0-9]/.test(val);
            const isStrongLong = val.length >= 12;

            // Update Criteria Checklist
            if (critLength) {
                critLength.classList.toggle('is-valid', hasLength);
            }
            if (critCasing) {
                critCasing.classList.toggle('is-valid', hasCasing);
            }
            if (critNumber) {
                critNumber.classList.toggle('is-valid', hasNumberOrSpec);
            }

            if (val.length > 0) {
                if (hasLength) score++;
                if (hasCasing) score++;
                if (hasNumberOrSpec) score++;
                if (isStrongLong && score >= 3) score++;
                score = Math.max(1, score);
            }

            // Segment styling
            segments.forEach((seg, idx) => {
                if (!seg) return;
                seg.className = 'strength-segment';
                if (val.length === 0) return;

                if (idx < score) {
                    if (score === 1) seg.classList.add('is-weak');
                    else if (score === 2) seg.classList.add('is-fair');
                    else if (score === 3) seg.classList.add('is-good');
                    else if (score >= 4) seg.classList.add('is-strong');
                }
            });

            // Badge text & color
            if (strengthBadge) {
                if (val.length === 0) {
                    strengthBadge.textContent = 'Too Short';
                    strengthBadge.className = 'strength-badge font-mono';
                } else if (score === 1) {
                    strengthBadge.textContent = 'Weak';
                    strengthBadge.className = 'strength-badge font-mono badge-weak';
                } else if (score === 2) {
                    strengthBadge.textContent = 'Fair';
                    strengthBadge.className = 'strength-badge font-mono badge-fair';
                } else if (score === 3) {
                    strengthBadge.textContent = 'Good';
                    strengthBadge.className = 'strength-badge font-mono badge-good';
                } else {
                    strengthBadge.textContent = 'Strong';
                    strengthBadge.className = 'strength-badge font-mono badge-strong';
                }
            }

            checkPasswordMatch();
        }

        function checkPasswordMatch() {
            if (!passwordInput || !confirmInput || !matchStatus) return;
            const p1 = passwordInput.value;
            const p2 = confirmInput.value;

            if (p2.length === 0) {
                matchStatus.textContent = '';
                matchStatus.className = 'password-match-indicator';
                return;
            }

            if (p1 === p2) {
                matchStatus.textContent = '✓ Passwords match';
                matchStatus.className = 'password-match-indicator text-match';
            } else {
                matchStatus.textContent = '✕ Do not match';
                matchStatus.className = 'password-match-indicator text-mismatch';
            }
        }

        if (passwordInput) {
            passwordInput.addEventListener('input', updatePasswordStrength);
        }
        if (confirmInput) {
            confirmInput.addEventListener('input', checkPasswordMatch);
        }
    });
</script>

<?php include $this->resolve('partials/_footer.php'); ?>
