# Laravel Course and Lesson API

This is a Laravel-based API for managing courses and lessons. The API provides endpoints to create and update courses and lessons.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

- PHP >= 8.2
- Composer
- MySQL or any other supported database

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/erfanfh/faragiran.git
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Copy the example environment file and configure the environment:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database and other configurations.

5. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```

6. **Start the development server:**

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.


## API Endpoints

### Update a Course

- **URL:** `/courses/{id}`
- **Method:** `PUT`
- **Body (raw, JSON):**
    ```json
    {
      "price": 100
    }
    ```

### Create a Lesson

- **URL:** `/lessons`
- **Method:** `POST`
- **Body (raw, JSON):**
    ```json
    {
      "name": "Lesson Name",
      "course_id": 1,
      "price": 100.00
    }
    ```
