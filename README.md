# Attendance Management System

A web-based attendance management system built with HTML, CSS, JavaScript, and PHP. This system provides an efficient solution for tracking and managing student/employee attendance with a user-friendly interface and robust backend functionality.

## 🚀 Features

- **User Authentication**: Secure login system for admins and users
- **Real-time Attendance Tracking**: Mark attendance with timestamp
- **Student/Employee Management**: Add, edit, delete, and manage user profiles
- **Attendance Reports**: Generate daily, weekly, and monthly reports
- **Dashboard Analytics**: Visual representation of attendance data
- **Search & Filter**: Advanced search functionality for records
- **Responsive Design**: Mobile-friendly interface
- **Data Export**: Export attendance data to CSV/Excel
- **Leave Management**: Handle leave requests and approvals
- **Multi-user Support**: Different access levels for admins and users

## 🛠️ Tech Stack

- **Frontend**: 
  - HTML5
  - CSS3
  - JavaScript (Vanilla JS)
  - Bootstrap (for responsive design)
- **Backend**: 
  - PHP 7.4+
  - MySQL 5.7+
- **Server**: 
  - XAMPP (Apache + MySQL + PHP)

## 📋 Prerequisites

Before setting up this project, ensure you have:

- XAMPP Server (Latest version)
- Web Browser (Chrome, Firefox, Safari, Edge)
- Text Editor (VS Code, Sublime Text, etc.)
- Basic knowledge of PHP and MySQL

## 🚀 Installation Guide

### Step 1: Install XAMPP
1. Download XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. Install XAMPP on your system
3. Start Apache and MySQL modules from XAMPP Control Panel

### Step 2: Download Project
```bash
# Option 1: Clone from GitHub
git clone https://github.com/harshad8782/Attendance-Management-System.git

# Option 2: Download ZIP file and extract
```

### Step 3: Setup Project Files
1. Copy the project folder to `xampp/htdocs/`
2. Rename folder to `attendance-system` (optional)

### Step 4: Database Setup
1. Open browser and go to `http://localhost/phpmyadmin/`
2. Create new database: `attendance_db`
3. Import the SQL file:
   - Select `attendance_db`
   - Go to `Import` tab
   - Choose the `.sql` file from project folder
   - Click `Go`

### Step 5: Configure Database Connection
Edit the database configuration file (usually `config.php` or `connection.php`):

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### Step 6: Run the Application
1. Open web browser
2. Navigate to `http://localhost/attendance-system/`
3. Login with default credentials (see below)

## 👤 Default Login Credentials

**Admin Account:**
- Username: `admin`
- Password: `admin123`

**Student/Employee:**
- Username: `student1`
- Password: `password123`

⚠️ **Important**: Change default passwords after first login!

## 📁 Project Structure

```
attendance-system/
│
├── index.php                 # Main entry point
├── login.php                # Login page
├── logout.php               # Logout functionality
├── dashboard.php            # Main dashboard
├── config.php               # Database configuration
│
├── css/
│   ├── style.css           # Custom styles
│   └── bootstrap.min.css   # Bootstrap framework
│
├── js/
│   ├── main.js             # Custom JavaScript
│   ├── jquery.min.js       # jQuery library
│   └── bootstrap.min.js    # Bootstrap JS
│
├── admin/
│   ├── index.php           # Admin dashboard
│   ├── manage_students.php # Student management
│   ├── attendance.php      # Attendance records
│   └── reports.php         # Generate reports
│
├── student/
│   ├── profile.php         # Student profile
│   ├── attendance.php      # Mark attendance
│   └── history.php         # Attendance history
│
├── includes/
│   ├── header.php          # Common header
│   ├── footer.php          # Common footer
│   └── functions.php       # Utility functions
│
├── database/
│   └── attendance_db.sql   # Database schema
│
└── uploads/                # File uploads (photos, etc.)
```

## 🔧 Usage Instructions

### For Administrators:
1. **Login** with admin credentials
2. **Dashboard** - View overall attendance statistics
3. **Manage Students** - Add/edit/delete student records
4. **View Attendance** - Check daily attendance records
5. **Generate Reports** - Create attendance reports
6. **Settings** - Configure system settings

### For Students/Employees:
1. **Login** with your credentials
2. **Mark Attendance** - Check in/out for the day
3. **View Profile** - Update personal information
4. **Attendance History** - View your attendance records
5. **Apply Leave** - Submit leave applications

## 📊 Database Tables

- **users** - Store user information (admin, students, employees)
- **attendance** - Daily attendance records with timestamps
- **classes** - Class/department information
- **subjects** - Subject details (if applicable)
- **leave_requests** - Leave application records
- **settings** - System configuration

## 🔐 Security Features

- **Password Encryption** - Secure password hashing
- **SQL Injection Prevention** - Prepared statements
- **Session Management** - Secure user sessions
- **Input Validation** - Server-side validation
- **Access Control** - Role-based permissions

## 🐛 Troubleshooting

### Common Issues:

**Database Connection Error:**
- Check if MySQL is running in XAMPP
- Verify database credentials in config file
- Ensure database exists

**Login Problems:**
- Clear browser cache
- Check user credentials in database
- Verify session configuration

**Attendance Not Saving:**
- Check database connection
- Verify table structure
- Look for JavaScript errors in console

**Pages Not Loading:**
- Ensure Apache is running
- Check file paths and permissions
- Verify project is in htdocs folder

## 📱 Browser Compatibility

- ✅ Chrome (Latest)
- ✅ Firefox (Latest)
- ✅ Safari (Latest)
- ✅ Edge (Latest)
- ⚠️ Internet Explorer (Limited support)

## 🔄 Updates & Maintenance

- **Backup Database** - Regular backups recommended
- **Update Dependencies** - Keep PHP/MySQL updated
- **Security Patches** - Apply updates promptly
- **Monitor Logs** - Check for errors regularly

## 🤝 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/new-feature`)
3. Commit changes (`git commit -m 'Add new feature'`)
4. Push to branch (`git push origin feature/new-feature`)
5. Open Pull Request

## 📄 License

This project is open source. Please check the repository for specific license terms.

## 📞 Support

- **GitHub Issues**: [Create an issue](https://github.com/harshad8782/Attendance-Management-System/issues)
- **Email**: harshad8782@gmail.com
- **Documentation**: Check the wiki section

## 🌟 Acknowledgments

- PHP Community for excellent documentation
- Bootstrap team for responsive framework
- jQuery for DOM manipulation
- XAMPP for local development environment
- All contributors and testers

---

**Developer**: Harshad  
**Repository**: [GitHub Link](https://github.com/harshad8782/Attendance-Management-System)  
**Version**: 1.0  
**Last Updated**: 2025

For more projects and updates, visit the [developer's profile](https://github.com/harshad8782).
