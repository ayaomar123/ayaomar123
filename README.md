# Aya Al Rahman

**Full-stack engineer.** I build multi-tenant business systems — Laravel APIs, Next.js dashboards, and the billing, permission and audit layers underneath them.

Gaza · Backend-leaning full-stack · Arabic-first (RTL) products

[LinkedIn](https://www.linkedin.com/in/ayaomar98) · [X](https://twitter.com/Aya_Al_RaHmaN) · [Links](https://linktr.ee/AyaOmar)

---

## About

Most of my work is the unglamorous half of a product: tenant isolation, role and permission models, subscription and invoice state, document verification workflows, audit trails, and the API surface a dashboard sits on. I spend real time on schema decisions, because those are the ones that are expensive to undo.

My primary stack is **Laravel (PHP 8.2 / Laravel 12)** with a **Next.js + TypeScript** frontend. I also build on **ASP.NET Core (.NET 8)** with Clean Architecture and **Angular** — several of those projects are public on this profile.

I use AI-assisted tooling as part of how I work, and I've shipped an in-product AI assistant with tool-calling and usage accounting. The architecture decisions — boundaries, schema, permissions, failure modes — stay mine.

## What I build

| | |
| --- | --- |
| **Multi-tenant SaaS** | Subdomain and customer-owned domain tenancy, plan limits, subscriptions, invoicing, payments |
| **Business operations systems** | Leads pipelines, service requests, support ticketing, document verification workflows |
| **REST APIs** | Token auth (Sanctum / JWT), role- and permission-scoped endpoints, rate limiting, validation |
| **Admin dashboards** | Next.js / React and Angular, bilingual AR/EN with genuine RTL |
| **Relational data models** | Normalised schemas, migration-driven change, soft deletes, indexing |
| **Deployment & CI** | GitHub Actions, SSH deploys with rollback and post-deploy verification |

## Tech stack

| Area | |
| --- | --- |
| **Backend** | PHP 8.2 · Laravel 12 · Sanctum — C# · ASP.NET Core 8 · EF Core · MediatR (CQRS) |
| **Frontend** | TypeScript · Next.js 16 · React 19 · Tailwind CSS — Angular 17+ |
| **Data** | MySQL · SQL Server · SQLite · queues, jobs and cache-backed reads |
| **Infrastructure** | Linux · Nginx · Docker · GitHub Actions · Cloudflare (DNS, SaaS custom domains) · S3-compatible storage |
| **Testing** | PHPUnit feature and unit suites · .NET test projects |
| **AI** | AI-assisted development · product-side assistant features (tool-calling, usage limits) |

## Featured work

### Mirsam — multi-tenant real-estate SaaS

*Live product · source is private*

A platform for real-estate agencies. Each agency runs as an isolated tenant on a subdomain or on its own custom domain, with property and unit listings, a leads pipeline, marketing and landing pages, service requests, support ticketing, and its own billing.

- **Tenancy** — single-database tenancy with subdomain resolution, plus customer-owned domains provisioned through Cloudflare SaaS (DNS review, binding progress, media hostnames)
- **Access control** — roles, a permission catalogue, and per-user permission overrides scoped per agency
- **Billing** — plans with enforced limits, add-ons, subscriptions and upgrades, invoices, discounts, taxes, payments
- **Trust & compliance** — configurable verification requirements with document submission, expiry and renewal tracking; geo-aware audit logging
- **Security** — WebAuthn passkeys, login-enumeration protection, rate limiting, reCAPTCHA, encrypted settings secrets, private S3-backed file access
- **Delivery** — 180+ migrations, 40+ service classes, 60 feature test classes, and a GitHub Actions deploy that verifies the server is actually running the commit it deployed

`Laravel 12` `Next.js 16` `React 19` `TypeScript` `Tailwind 4` `MySQL` `S3` `Cloudflare` `GitHub Actions`

[getmirsam.com](https://getmirsam.com)

### Laravel SaaS — single-database multi-tenancy

A working reference for domain-based tenancy in Laravel: tenant resolution from the request host, a global scope that isolates every query, Sanctum auth over HttpOnly cookies, and a documented API surface with production Nginx notes.

`Laravel 11` `Sanctum` `REST` `Multi-tenancy`

[Repository →](https://github.com/ayaomar123/Laravel-saas)

### SupportApp — .NET 8 support ticketing

Ticketing system built as an ASP.NET Core Web API on Clean Architecture (Domain / Application / Infrastructure / Api) with an Angular client. Role-based access across Admin, Manager and Client, file attachments, email and SMS notifications, EF Core persistence, Docker Compose for local runs, and a test project wired into GitHub Actions.

`.NET 8` `Clean Architecture` `EF Core` `Angular` `Docker`

[Repository →](https://github.com/ayaomar123/SupportApp)

### NCS — .NET 8 charity platform

Public appeals and blog, plus a JWT-protected admin surface. CQRS with MediatR, EF Core code-first against SQL Server, FluentValidation, Serilog and Swagger; Angular standalone components with Tailwind on the frontend. Payments are deliberately stubbed behind an `IPaymentProvider` interface for phase two, and the README says so rather than implying otherwise.

`.NET 8` `CQRS / MediatR` `EF Core` `Angular` `Tailwind`

[Repository →](https://github.com/ayaomar123/ncs)

**Also public:** [orphans-system](https://github.com/ayaomar123/orphans-system) (.NET 8 Clean Architecture + Angular 17) · [AspCleanArchitectureRealestate](https://github.com/ayaomar123/AspCleanArchitectureRealestate) (layered ASP.NET Core real-estate system)

## Engineering focus

- Multi-tenant architecture and data isolation
- Permission models that survive real organisational structures
- Subscription and invoice state that stays correct through upgrades, expiry and renewal
- API and schema design that stays cheap to change
- Bilingual AR/EN products with real RTL, not mirrored CSS
- CI/CD that verifies what it deployed, and can roll back

## Currently

Building Mirsam — custom-domain provisioning, an in-product AI assistant, and analytics integration. Currently at Trilum Soft.

## Contact

[LinkedIn](https://www.linkedin.com/in/ayaomar98) · [X](https://twitter.com/Aya_Al_RaHmaN) · [All links](https://linktr.ee/AyaOmar)
