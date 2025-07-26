# MsAccessPHP

🛠️ A small hobby project for reading data from a Microsoft Access database using PHP.

## 📁 Project Structure

MsAccessPHP/
│
├── app/
│ ├── autoload.php # Autoloads necessary classes
│ ├── Config/
│ │ ├── config.php # Main PHP configuration for database path
│ │ ├── config.json # JSON version of configuration
│ │ └── Helpers/
│ │ └── helper.php # Utility functions
│ ├── Controller/
│ │ ├── App.php # Base controller
│ │ └── Home.php # Main logic for accessing the database
│ └── DB/
│ └── Backansoft.ldb # Sample or lock file from Access DB
│
├── start.cmd # CMD script to launch the project on Windows
└── README.md # This documentation file


## 🚀 How to Run

1. Run `start.cmd` on a Windows machine.
2. Make sure you have a local web server (e.g., XAMPP or WAMP) with ODBC support.
3. Open your browser and go to `http://localhost`.

## 🧰 Tech Stack

- PHP (simple procedural/OOP hybrid)
- ODBC connection to Microsoft Access `.mdb` file
- Local Windows CMD script for easy start

## 🔌 Access Database Connection Example

Defined in `config.php`:

```php
return [
    "connection" => [
        "mdb" => "C:\\path\\to\\your\\database.mdb"
    ]
];
