# banks-ethiopia
A Laravel-based financial web application replicating the Banks Ethiopia system with custom enhancements. Includes exchange rate comparison, loan applications, news, and bank details.

# Banks Ethiopia (Replica Project)

This project is a **Laravel-based financial web application**, replicated with my own enhancements during my internship.  
It provides exchange rate comparison, loan applications, bank details, and financial news updates in a clean and responsive interface.

---

## 🚀 Features

- 💱 **Currency Exchange Rate Comparison**
  - Compare buying and selling rates across multiple banks.
  - Includes independent forex rates.
  - Displays bank logos and flags for clarity.

- 🏦 **Loan Application System**
  - Multi-step loan form with field validation.
  - Stores loan applications securely in the database.
  - Supports co-applicant and loan type selections.

- 📰 **Financial News & Updates**
  - Section for displaying financial news and exchange-related details.

- 📢 **Bank Information**
  - Logos, contact details, and other information for major banks.

- 🎨 **Responsive UI**
  - Built with **Tailwind CSS**.
  - Optimized for desktop and mobile devices.

---

## 🛠 Tech Stack

- **Backend**: [Laravel 10](https://laravel.com/), PHP 8+
- **Frontend**: Blade, [Tailwind CSS](https://tailwindcss.com/)
- **Database**: MySQL
- **Tools**: Composer, NPM, Vite

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/banks-ethiopia-replica.git
cd banks-ethiopia-replica

# 2. Install dependencies
composer install
npm install && npm run dev

# 3. Configure environment
cp .env.example .env
# Update your database and mail credentials inside .env

# 4. Run migrations
php artisan migrate

# 5. Start the development server
php artisan serve
