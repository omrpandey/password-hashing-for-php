# Password Hashing for PHP

## Overview
This project allows you to securely hash passwords for multiple users at once using a CSV file. You can upload a CSV file containing user details along with plain text passwords, and the system will process the file to hash the passwords. Once completed, the system exports a new CSV file with the hashed passwords.

## Features
- Bulk password hashing through CSV file upload
- Uses PHP password hashing functions for security
- Exports the processed CSV file with hashed passwords
- Simple and user-friendly interface

## Installation
1. Clone this repository or download the source files:
   ```bash
   git clone https://github.com/your-repo/password-hashing-for-php.git
   ```
2. Move to the project directory:
   ```bash
   cd password-hashing-for-php
   ```
3. Ensure you have a PHP environment set up (XAMPP, WAMP, or a live server).
4. Place the project folder inside your web server's root directory (e.g., `htdocs` for XAMPP).

## Usage
### 1. Prepare CSV File
Create a CSV file with at least two columns:
- **Username**
- **Password** (plain text)

Example:
```csv
Username,Password
john_doe,password123
jane_smith,securepass
```

### 2. Upload CSV File
1. Open the web interface in your browser (`http://localhost/password-hashing-for-php/`).
2. Select and upload the CSV file.

### 3. Process and Download
- The system will process each password using `password_hash()` in PHP.
- A new CSV file will be generated with hashed passwords.
- Download the processed CSV file.

## Example Output
```csv
Username,Hashed Password
john_doe,$2y$10$xxxxxxxxxxxxxxxxxxxxxx
jane_smith,$2y$10$xxxxxxxxxxxxxxxxxxxxxx
```

## Security Considerations
- The passwords are hashed using `password_hash()` with the `PASSWORD_DEFAULT` algorithm (usually bcrypt).
- Never store plain text passwords.
- Ensure the generated CSV file is securely stored.

## Requirements
- PHP 7.4 or higher
- Web server (Apache, Nginx, or built-in PHP server)
- Browser for accessing the UI

## License
This project is open-source under the MIT License.

## Contributing
Feel free to fork the repository and submit pull requests for improvements.

## Contact
For any queries or issues, reach out to [your email] or open an issue on GitHub.

