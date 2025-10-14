# 📘 Portfolio Website – “How to Help Kids Take a Break from Their Phones, in order to read”

This is a lightweight, and elegant personal portfolio website built with **HTML, CSS, JavaScript, PHP, and MySQL**.  
It also serves as an educational demo project for running a dynamic website locally and deploying a static version to GitHub Pages.

---

## 🌍 Live Demo
Static version hosted on **GitHub Pages** (HTML/CSS/JS only):  
👉 [https://thanasissoftwaredeveloper.github.io/portfolio/](https://thanasissoftwaredeveloper.github.io/portfolio/)

The live PHP/MySQL version must be run locally or on a web server that supports PHP.

---

## ⚙️ Requirements (for local PHP/MySQL version)

To run the full version on your computer, install:

- **[XAMPP](https://www.apachefriends.org/)** or **[WAMP](https://www.wampserver.com/en/)**  
  (includes Apache + PHP + MySQL)
- A code editor such as **VS Code** or **Sublime Text**
- Optional: **phpMyAdmin** (included with XAMPP/WAMP)

---

## 🧩 File & Folder Structure

project_root/
│
├── index.php # Homepage
├── contact.php # Contact form (sends emails)
├── login.php # Login and signup form
├── donate.php # Donation page (PayPal / Bitcoin)
│
├── includes/
│ ├── header.php # Common header section (navbar, logo)
│ ├── footer.php # Common footer section
│ ├── config.php # Database connection settings
│ ├── counter.php # Visitor counter logic
│ ├── register.php # User registration handling
│ ├── login_process.php # Login verification
│
├── assets/
│ ├── style.css # Main CSS styling
│ ├── script.js # JS for burger menu, UI effects
│
├── images/
│ ├── favicon.png # Site icon (little girl with bangs)
│ └── ... # Other images
│
├── data/
│ └── database.sql # SQL script for creating tables
│
└── README.md # Documentation (this file)
