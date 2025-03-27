# Zippy Used Autos 🚗

A full-featured PHP MVC application for managing used car inventory.  
Built for both public users (filter & view) and admin users (CRUD vehicles, makes, types, classes).

---

## 🔧 Features

### ✅ Public Homepage
- View all vehicles (default: sorted by price)
- Filter by **Make**, **Type**, or **Class**
- Sort by **Price** or **Year**
- Responsive design using Tailwind CSS

### ✅ Admin Backend (`/admin`)
- Add and delete vehicles
- Manage **Makes**, **Types**, and **Classes**
- Success messages after each action
- Organized using MVC design pattern

---

## 📁 Project Structure

```
zippy-used-autos/
│
├── index.php                # Entry point (public)
├── /admin                   # Admin backend
│   ├── index.php            # Admin home
│   ├── add_vehicle.php
│   ├── manage_makes.php
│   ├── manage_types.php
│   └── manage_classes.php
│
├── /controllers             # All controller logic
│   ├── vehicle.php
│   ├── makes.php
│   ├── types.php
│   └── classes.php
│
├── /model                   # Database functions
│   ├── database.php
│   ├── vehicle_db.php
│   ├── makes_db.php
│   ├── types_db.php
│   └── classes_db.php
│
├── /view                    # Public + admin views
│   ├── vehicle_list.php
│   ├── admin_home.php
│   ├── add_vehicle_form.php
│   ├── makes_list.php
│   ├── types_list.php
│   └── classes_list.php
│
└── /css
    ├── style.css            # Tailwind input
    └── tailwind.css         # Built output
```

---

## 🛠️ Getting Started

### 1. Clone the repo  
```bash
git clone https://github.com/soksreng/zippy-used-autos.git
```

### 2. Set up the database
- Create a database called `zippyusedautos`
- Create the tables:
  - `vehicles`
  - `makes`
  - `types`
  - `classes`
- Insert data manually or import from `zippyusedautos.sql`

### 3. Configure DB connection  
In `model/database.php`, update:

```php
$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
$username = 'root';
$password = '';
```

### 4. Run locally  
Use XAMPP (or MAMP/Laragon), then visit:
```
http://localhost/zippy-used-autos/
```

---

## 🎨 Tailwind CSS Setup (Optional)

If you're using Tailwind via CLI:

### 1. Install Tailwind
```bash
npm install -D tailwindcss
```

### 2. Build CSS
```bash
npx tailwindcss -i ./css/style.css -o ./css/tailwind.css --watch
```

---

## 🌐 URLs

- **Public Site:** `http://localhost/zippy-used-autos/`
- **Admin Panel:** `http://localhost/zippy-used-autos/admin/`

---

## 📸 Screenshots 

  ### 🔍 Public Homepage (User View)
  <img width="1195" alt="Screenshot 2025-03-27 at 12 43 12 AM" src="https://github.com/user-attachments/assets/7cb9d79f-3e6a-47f4-970c-1b13bd00c0ef" />

  ### 🛠 Admin Dashboard
  <img width="1195" alt="Screenshot 2025-03-27 at 12 43 25 AM" src="https://github.com/user-attachments/assets/e73c67de-f71c-459a-b88e-bc044938cf39" />

  ### ➕ Add Vehicle Form
  <img width="601" alt="Screenshot 2025-03-27 at 12 44 08 AM" src="https://github.com/user-attachments/assets/d05c5895-45f9-4453-a20c-38537acde3fc" />

  ### 🏷 Manage Make Page
  <img width="601" alt="Screenshot 2025-03-27 at 12 43 53 AM" src="https://github.com/user-attachments/assets/af53f05d-273c-44e8-a1ed-0d981e5a5749" />

  ### 🏷 Manage Type Page
  <img width="601" alt="Screenshot 2025-03-27 at 12 43 40 AM" src="https://github.com/user-attachments/assets/dcf69b8f-589b-46ac-af2c-5ea237a6e978" />

  ### 🏷 Add Class Page
  <img width="601" alt="Screenshot 2025-03-27 at 12 44 00 AM" src="https://github.com/user-attachments/assets/2f66227f-24f8-4227-8348-5f6e85abd90a" />

  ### 🗃 Database Structure (phpMyAdmin)
  <img width="916" alt="Screenshot 2025-03-27 at 12 44 58 AM" src="https://github.com/user-attachments/assets/2cf1aaca-3add-45ae-84f1-0bf3e9bfd5a4" />
  <img width="916" alt="Screenshot 2025-03-27 at 12 45 08 AM" src="https://github.com/user-attachments/assets/82dd84b8-988f-44ca-9513-fa233a9a4d46" />
  <img width="916" alt="Screenshot 2025-03-27 at 12 45 18 AM" src="https://github.com/user-attachments/assets/99a9c282-37f1-4971-b868-3f086c90972c" />
  <img width="916" alt="Screenshot 2025-03-27 at 12 45 25 AM" src="https://github.com/user-attachments/assets/97160012-6cb8-4c98-bc11-7703e7fd0f14" />









## ✨ Extra Features

- Green success banners after adding/deleting items
- Error redirect fallback handling
- Modular code structure (MVC)

---

## 👨‍💻 Author

Sok Sreng(Jack) – CS Student @ Fort Hays & AUPP  

---

## 📄 License

This project is for educational use only.
