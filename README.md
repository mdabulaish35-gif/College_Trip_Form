# 🏔️ JIS College of Engineering — Darjeeling Trip Form

A web-based student registration form built with **PHP** and **MySQL** for confirming participation in the JIS College of Engineering Darjeeling Trip.

🔗 **Live Demo:** [https://collegetripform.infinityfreeapp.com](https://collegetripform.infinityfreeapp.com)

---

## ✨ Features

- **Student Registration Form:** Collects student Name, Age, Gender, Email, Phone Number, and additional notes.
- **Database Storage:** Saves all form submissions directly into a MySQL/MariaDB database with an automatic timestamp.
- **Duplicate Submission Prevention:** Uses PHP Sessions and the Post/Redirect/Get (PRG) pattern so refreshing the page does not resubmit the form.
- **Animated Background UI:** Features a full-screen, gently floating background image (`jis.png`) styled with custom CSS.

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP (`mysqli`)
- **Database:** MySQL / MariaDB
- **Local Development:** XAMPP (Apache + MariaDB)
- **Live Hosting:** InfinityFree

---

## 📁 Project Structure

```text
├── index.php       # Main form UI and PHP/MySQL backend logic
├── project.css     # Styling and floating background animation
├── project.js      # Client-side JavaScript
├── jis.png         # Campus background image
├── trip.sql        # MySQL database schema and sample data
└── README.md       # Project documentation
```

---

## 🚀 Run Locally with XAMPP

Follow these steps to run the project on your local machine:

### 1. Prerequisites
- Install [XAMPP](https://www.apachefriends.org/) (includes Apache, PHP, and MariaDB/MySQL).

### 2. Clone or Download the Repository
Move the project folder into your XAMPP `htdocs` directory (usually `C:\xampp\htdocs\` on Windows):

```bash
cd C:\xampp\htdocs
git clone <your-repository-url>
```

### 3. Start Local Servers
Open the **XAMPP Control Panel** and click **Start** next to both:
- **Apache**
- **MySQL**

### 4. Set Up the Database
1. Open your browser and go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Click **New** in the left sidebar and create a database named **`trip`**.
3. Select the **`trip`** database, click the **Import** tab at the top, and choose the **`trip.sql`** file from this repository.
4. Click **Import / Go** to create the `trip` table and load the sample records.

### 5. Verify Database Configuration
Ensure the connection settings at the top of `index.php` match your local XAMPP setup:

```php
$server = "localhost";
$username = "root";
$password = "";
$database = "trip";
```

### 6. Open the Project
Visit the following URL in your browser (replace `<folder-name>` with your actual folder name inside `htdocs`):

```text
http://localhost/<folder-name>/index.php
```

---

## 🗄️ Database Schema (`trip` Table)

| Column | Type | Description |
| :--- | :--- | :--- |
| `S_no` | `INT(3)` (PK, AI) | Auto-incrementing serial number |
| `Name` | `TEXT` | Student's full name |
| `Age` | `INT(3)` | Student's age |
| `Gender` | `VARCHAR(8)` | Student's gender |
| `Email` | `VARCHAR(100)` | Student's email address |
| `phone` | `VARCHAR(10)` | Student's phone number |
| `Other` | `TEXT` | Additional notes or preferences |
| `Date` | `DATE` | Automatic submission date (`current_timestamp()`) |

---

## 📄 License

This project is open-source and available for educational use.
