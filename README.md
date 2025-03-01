# Laravel Timesheet Project

This is a Laravel-based project for managing users, projects, and timesheets. It includes dynamic attributes for projects and a flexible filtering system.

---

## Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Mahmoud-creator/TaskFlow.git
   cd TaskFlow
   
3. **Install Dependencies:**:
    ```bash
    composer install

4. **Copy .env.example to .env**:
    ```bash
    cp .env.example .env

5. **Run Migrations and Seeders**:
    ```bash
    php artisan migrate --seed

6. **Run the server**:
    ```bash
    php artisan serve

## API Documentation

### Authentication

### Register: `POST /api/register`

```json
{
  "first_name": "John",
  "last_name": "Doe",
  "email": "john.doe@example.com",
  "password": "password"
}

### Login: `POST /api/login`

```json
{
  "email": "john.doe@example.com",
  "password": "password"
}

### Login: `POST /api/logout` (Requires authentication)


## Users

Get All Users: GET /api/users

Get User by ID: GET /api/users/{id}

Create User: POST /api/users

Update User: PUT /api/users/{id}

Delete User: DELETE /api/users/{id}

## Projects

Get All Projects: GET /api/projects

Get Project by ID: GET /api/projects/{id}

Create Project: POST /api/projects

Update Project: PUT /api/projects/{id}

Delete Project: DELETE /api/projects/{id}


## Timesheets

Get All Timesheets: GET /api/timesheets

Get Timesheet by ID: GET /api/timesheets/{id}

Create Timesheet: POST /api/timesheets

Update Timesheet: PUT /api/timesheets/{id}

Delete Timesheet: DELETE /api/timesheets/{id}



## Filtering Projects

### Filter by Regular Fields:

GET /api/projects?filters[name]=ProjectA&filters[status]=active
Filter by Dynamic Attributes:

GET /api/projects?attributes[department]=IT
Filter with Operators:

GET /api/projects?filters[name][operator]=LIKE&filters[name][value]=ProjectA


