# Shopping Website

Welcome to the Shopping Website repository! This project is a complete online shopping platform built with PHP, HTML, and Bootstrap. It provides functionalities for user registration, product browsing, cart management, and checkout processes.

## Table of Contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Usage](#usage)
5. [File Structure](#file-structure)
6. [Contributing](#contributing)
   
## Features

- **User Management**: Registration, login, password change, and password recovery.
- **Product Management**: Browse and search products, add to and remove from the cart.
- **Cart Management**: View and manage items in the cart.
- **Checkout Process**: Complete the purchase and order processing.
- **Responsive Design**: Built using Bootstrap for a responsive user interface.

## Requirements

- PHP 7.x or higher
- MySQL database
- Web server (e.g., Apache or Nginx)
- Internet connection for Bootstrap and other resources

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/mhdayaan/ShoppingWebsite
   cd ShoppingWebsite
   ```

2. Set up a MySQL database and import the database schema provided in `database/schema.sql`.

3. Configure your web server to point to the `public/` directory of the project.

4. Update the database connection details in the `common.php` file:
   ```php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'shopping_website';
   ```

## Usage

1. Start your web server and open your browser.

2. Navigate to the URL where your web server is hosting the site (e.g., `http://localhost/`).

3. Register a new account or log in with existing credentials.

4. Browse the products, add items to your cart, and proceed to checkout.

## File Structure

- `aboutus.php`: About Us page.
- `cart-add.php`: Add item to cart.
- `cart-remove.php`: Remove item from cart.
- `cart.php`: View and manage cart.
- `change_password.php`: Change password page.
- `change_script.php`: Script to handle password changes.
- `check-if-added.php`: Check if an item is added to the cart.
- `common.php`: Commonly used functions and configurations.
- `contactus.php`: Contact Us page.
- `footer.php`: Footer section of the website.
- `forgot_password.php`: Forgot password page.
- `forgot_script.php`: Script to handle forgot password.
- `header.php`: Header section of the website.
- `home.php`: Home page.
- `index.php`: Main entry point of the website.
- `login.php`: Login page.
- `login_script.php`: Script to handle login.
- `logout.php`: Log out functionality.
- `setting.php`: Settings page.
- `setting_script.php`: Script to handle settings updates.
- `signup.php`: Signup page.
- `signup_script.php`: Script to handle registration.
- `style.css`: Custom styles for the website.
- `success.php`: Success page for various actions.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, please open an issue or submit a pull request.

1. Fork the repository.
2. Create a new branch for your changes.
3. Make your changes and commit them.
4. Push to the branch and open a pull request.
