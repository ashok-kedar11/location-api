# Laravel JSON:API Location Management System

This is a backend API built using **Laravel 11** implementing **JSON:API specification** for resource management with **Sanctum authentication**.

- Laravel 11
- PHP 8.2
- Laravel Sanctum (Authentication)
- Laravel JSON:API package
- MySQL

##  Features ##

### Authentication (Custom Laravel APIs)
- Register user
- Login user
- Logout user (token revoke)

### Location Management (JSON:API)
- Countries CRUD
- States CRUD 
- Cities CRUD 
- Relationships handling
- Includes support (nested relations)
- Pagination, Filtering, Sorting

##  Installation Setup

step1= 1. Clone Repository

git clone https://github.com/ashok-kedar11/location-api.git
cd location-api

step2 Install Dependencies
composer install

step 3=Environment Setup
copy .env.example .env

step 4=Generate Key
php artisan key:generate

step 5=Run Migrations
php artisan migrate

step 6=Start Server
php artisan serve

============================================================
============================================================
## Authentication APIs

1. Register

POST Request Method

/api/register
Request 
{
  "name": "Ashok Kedar",
  "email": "ashokkedar12@gmail.com",
  "password": "ashok123",
  "password_confirmation": "ashok123"
}
Response
{
  "message": "User registered successfully",
  "token": "5|vUAiWOgO02YiT7YI895CAGP0n4Pw8byaTJ5hjmOO09c4c2c6"
}
=================================================================
2. Login

POST

/api/login
Request
{
  "email": "ashokkedar12@gmail.com",
  "password": "ashok123",
}
Response
{
  "message": "Login successful",
  "token": "5|vUAiWOgO02YiT7YI895CAGP0n4Pw8byaTJ5hjmOO09c4c2c6"
}
========================================================================

## JSON:API Resource Endpoints

Base URL:

/api/v1

Required Headers:

Accept: application/vnd.api+json
Content-Type: application/vnd.api+json
Authorization: Bearer {token} (for protected routes)


# Countries
Create Country

POST

/api/v1/countries
Request
{
  "data": {
    "type": "countries",
    "attributes": {
      "name": "India"
    }
  }
}
Response=
{
    "jsonapi": {
        "version": "1.0"
    },
    "links": {
        "self": "http://127.0.0.1:8000/api/v1/countries/3"
    },
    "data": {
        "type": "countries",
        "id": "3",
        "attributes": {
            "name": "USA",
            "createdAt": "2026-05-20T10:25:18.000000Z",
            "updatedAt": "2026-05-20T10:25:18.000000Z"
        },
        "relationships": {
            "states": {
                "links": {
                    "related": "http://127.0.0.1:8000/api/v1/countries/3/states",
                    "self": "http://127.0.0.1:8000/api/v1/countries/3/relationships/states"
                }
            }
        },
        "links": {
            "self": "http://127.0.0.1:8000/api/v1/countries/3"
        }
    }
}

Get All Countries

GET

/api/v1/countries



