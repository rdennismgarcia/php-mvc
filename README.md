# PHP MVC Framework

A lightweight and customizable **PHP MVC (Model-View-Controller)** framework built for clean architecture, rapid development, and scalability. It provides a simple yet powerful structure to help you build modern web applications with minimal setup.

👉 [View on GitHub](https://github.com/rdennismgarcia/php-mvc)

👉 [View Live Demo](http://demo.strativohq.com/php-mvc/)

---

## 🚀 Features

Out of the box, the framework includes:

- **SPL Autoloading** – Automatically loads classes without manual `require` or `include` statements.  
- **Single Entry Point** – A clean front controller structure that improves security and organization.  
- **Helper Functions** – Common utility functions to speed up development.

---

## 📍 Routing

The routing system follows a simple and intuitive URL pattern:

```
http://example.io/{controller}/{method}/{param1?}
```

- **controller** – The controller class to handle the request.  
- **method** – The method (action) inside the controller.  
- **param1** *(optional)* – Any parameter you want to pass to the method.

**Example:**  
```
http://example.io/user/show/5
```
This will call the `show()` method in the `User` controller and pass `5` as a parameter.

---

## 🧠 Controllers

All controllers extend the base `Controller` class.

To load a model inside a controller, use:

```php
$this->model('{YourModel}');
```

**Example:**
```php
class UserController extends Controller {
    public function show($id) {
        $user = $this->model('User');
        $data = $user->find($id);
        $this->view('user/profile', $data);
    }
}
```

---

## 🗄️ Models

Models handle your application’s data logic.

To create a new model, run:

```
php start make:model {YourModel}
```

This will generate a model file inside the `models` directory, ready for you to define your data logic.

---

## 📁 Project Structure (Example)

```
app/
├─ controllers/
│  └─ Pages.php
├─ models/
│  └─ Page.php
├─ views/
│  └─ pages/
│     └─ home.php
core/
├─ Controller.php
├─ Model.php
├─ Router.php
public/
└─ index.php
```

---

## 🧪 Getting Started

1. **Clone the repository**  
   ```bash
   git clone https://github.com/rdennismgarcia/php-mvc.git
   ```

2. **Set up your server**  
   Point your web server’s document root to the `public` directory.

3. **Run the project**  
   Access your application in the browser using the routing structure described above.

---

## 📜 License

This project is open source and available under the [MIT License](LICENSE).
