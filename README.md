# MsAccessPHP

# MsAccessPHP

🛠️ A small hobby project for reading data from a Microsoft Access database using PHP.  
📚 The purpose of this project is educational — to experiment with Access, ODBC, and PHP basics.  
🚀 It is open for improvements, extensions, and learning opportunities.


## 📁 Project Structure

```plaintext
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
```



## 🚀 How to Run

1. Run `start.cmd` on a Windows machine.
2. Make sure you have a local web server (e.g., XAMPP or WAMP) with ODBC support.
3. Open your browser and go to `http://localhost`.

## 🧰 Tech Stack

- PHP (simple procedural/OOP hybrid)
- ODBC connection to Microsoft Access `.mdb` file
- Local Windows CMD script for easy start

## 🔌 Access Database Connection Example

Defined in `config.json`:

```json
{
    "PATH": "app/DB/Backansoft.mdb",
    "DRIVER": "Microsoft Access Driver (*.mdb, *.accdb)",
    "PASS": ""
}
```
## 🔧 Model Class – Database Helper Methods

The `Model` class provides easy-to-use methods for interacting with a Microsoft Access database via ODBC and PDO.

### 🧩 Available Methods

---

#### 📄 `all($sql)`
Runs a SQL query and returns all rows as an associative array.

```php
$model->all("SELECT * FROM Users");

```
#### 📄 `first($sql)`
Runs a SQL query and returns all rows as an associative array.

```php
$user = $model->first("SELECT * FROM Settings where user_id = 115);

```
#### 📄 `insert($table,$data)`
Inserts a new record into the specified table.
$data is an associative array where keys match column names.

Returns the last inserted ID (MS Access-specific using @@IDENTITY), or false on failure.

```php
$model->insert("Users", [
  "name" => "John",
  "email" => "john@example.com"
]);

```
#### 📄 `edit($table, $data, $where)`
$data is an associative array of fields to update.
$where is a raw SQL condition (e.g. "id = 5").

Returns true if a row was updated, otherwise false.

```php
$model->edit("Users", [
  "email" => "new@example.com"
], "id = 1");

```

#### 📄 `delete($table,$where)`
Deletes rows from the table based on the given condition.ative array.

```php
$model->delete("Users", "id = 3");

```
These methods offer a lightweight abstraction over common SQL operations for Access databases via ODBC in PHP.

## 🧩 Utility Functions

The project provides a few handy helper functions defined in `fn.php`:

- `view($name, $data = [])`:  
  Loads a PHP view file from the `/views/` directory and optionally passes data to it. Similar to templating.

- `dd($var)`:  
  "Dump and Die" – prints the contents of a variable for debugging and stops script execution.

- `rr($url)`:  
  "Redirect and Return" – performs a simple HTTP redirect to the given URL.