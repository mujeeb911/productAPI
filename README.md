# Product API (Symfony 7.2)

A simple Symfony-based API that retrieves product details by ID. This project demonstrates a clean architecture by using a **Product entity**, a **repository for data retrieval**, and a **controller for handling API requests**.

## Features
- Retrieve a product by its ID via `/api/products/{id}`
- Returns product details (`id`, `name`, `price`) in **JSON format**
- Returns a **404 Not Found** response if the product doesn’t exist

## Installation & Setup
1. Clone the repository:
   ```sh
   git clone <repo-url>
   cd productapi
   
2. Install dependencies:
   ```sh
   composer install
   
3. Start the Symfony server:
   ```sh
    symfony server:start