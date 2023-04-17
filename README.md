# Footworld E-commerce Website
This is an e-commerce website developed with Laravel PHP framework that sells sneakers.

### Features
- User Authentication (Login & Register)
- User Authorization (Admin, Customer)
- User Profile
- Product Categories
- Product Search
- Product Details
- Cart Management
- Order Management
- Admin Panel
- CRUD Operations (Create, Read, Update, Delete)
- Error Handling

### Installation

1. Clone the repository.

    `git clone https://github.com/your-username/footworld.git`

2. Install the dependencies.

    `cd footworld`
    `composer install`
    `npm install`

3. Copy the .env.example file and rename it to .env. Update the database configuration and other environment variables.

    `cp .env.example .env`

4. Generate the application key.

    `php artisan key:generate`

5. Run the database migrations and seed the database with sample data.
  
    `php artisan migrate --seed`

6. Start the server.

    `php artisan serve`

7. Access the application by visiting http://localhost:8000 in your web browser.


### Usage

#### Authentication
- Visit the login page to log in to the application as a registered user.
- Visit the register page to create a new account.

#### Admin Panel
- Log in to the application as an admin to access the admin panel.
- From the admin panel, you can manage products, categories, orders.

#### Products
- View the list of available products by visiting  the products page.
- Filter products by category or search for specific products.
- Click on a product to view its details.
- Add products to the cart from the product details page or the products list page.
- View the cart by clicking on the cart icon in the header.
- Update or remove products from the cart.
- Proceed to checkout to place an order.

### Orders

- View the list of orders by visiting the orders page.
- Click on an order to view its details.

### Contributing

- If you would like to contribute to this project, please fork the repository and submit a pull request.

### License

Copyright (c) 2023 MAHFOUDI FAHD
