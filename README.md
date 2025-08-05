
# 🌍 FasnArsh Travel Agency

A full-featured travel booking website built with **PHP**, **MySQL**, and **XAMPP**. This project allows users to book flights, hotels, and car rentals via a single integrated portal.

---

## 🚀 Features

- ✈️ Flight Booking  
- 🏨 Hotel Booking  
- 🚗 Car Rentals  
- 👤 User Registration & Login  
- 🔒 Session Management  
- 📋 Booking Processing with MySQL  

---

## ⚙️ Technologies Used

| Stack | Details |
|-------|---------|
| **Back‑End** | PHP 8.x |
| **Database** | MySQL 8 (phpMyAdmin) |
| **Front‑End** | HTML • CSS • JavaScript (Bootstrap) |
| **Local Server** | XAMPP (Apache + MySQL) |

---

## 🖥️ How to Run the Project Locally

1. **Install XAMPP** → <https://www.apachefriends.org/index.html>  
2. **Copy the project folder** (`dbms_project`) into `C:\xampp\htdocs\`.  
3. **Start Apache & MySQL** from the XAMPP Control Panel.  
4. **Create the database** `travel_agency` in <http://localhost/phpmyadmin>.  
5. **Import** `travel_agency.sql` (or create tables manually).  
6. **Configure DB credentials** in `db.php`:

   ```php
   <?php
   $connection = mysqli_connect("localhost", "root", "", "travel_agency");
   ?>
   ```
7. **Visit** <http://localhost/dbms_project/> in your browser.

---

## 📸 Screenshots

> **Note**: Place the images inside a folder called `screenshots/` (or update the paths).

| Home Page | About Us | Hotel Booking |
|-----------|----------|---------------|
| ![Home](C:\Users\Arshee Fathima\OneDrive\Pictures\Screenshots\home.png) | ![About](C:\Users\Arshee Fathima\OneDrive\Pictures\Screenshots\about.png) | ![Hotel Booking](C:\Users\Arshee Fathima\OneDrive\Pictures\Screenshots\hotel_booking.png) |

---

## 🗃️ Project Structure

```text
dbms_project/
│
├── index.php
├── login.php
├── register_user.php
├── process_booking.php
├── Flight_Bookings.php
├── Hotel_Bookings.php
├── Car_rentals.php
├── validate_login.php
├── user_info.php
├── /images
└── /screenshots
```

---

