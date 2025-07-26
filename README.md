# MsAccessPHP

🛠️ A small hobby project for reading data from a Microsoft Access database using PHP.

## 📁 Project Structure

MsAccessPHP/
│
├── app/
│   ├── autoload.php
│   ├── Config/
│   │   ├── config.php
│   │   ├── config.json
│   │   └── Helpers/
│   │       └── helper.php
│   ├── Controller/
│   │   ├── App.php
│   │   └── Home.php
│   └── DB/
│       └── Backansoft.ldb
│
├── start.cmd
└── README.md



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
