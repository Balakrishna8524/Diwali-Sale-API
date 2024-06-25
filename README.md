# Diwali-Sale-API

## Description

Diwali-Sale-API is an assignment project that challenges reasoning and logical thinking through the implementation of Diwali sale logic, as part of an interview assessment.

## Rules for Discounts

### Rule 1

Customers can buy one product and get another product for free as long as the price of the free product is equal to or less than the price of the first product.

- **Description:** The code processes the items by sorting them in descending order. For each payable item, it looks for the first eligible free item (equal to or less than the payable item) and moves it to the discounted list.

### Rule 2

Customers can buy one product and get another product for free as long as the price of the free product is less than the price of the first product.

- **Description:** Similar to Rule 1, but ensures the free item is strictly less than the payable item.

### Rule 3

Customers can buy two products and get two products for free as long as the price of the free product is less than the price of the first product.

- **Description:** The code processes the items by taking two payable items at a time and then finding two eligible free items (less than the minimum price of the two payable items).


## Installation and Setup

Follow these instructions to set up the project locally:

### Prerequisites

- PHP >= 8.0
- Composer (for PHP dependencies)

### Step 1: Clone the repository
Clone the repository to your local machine:
**git clone <repository url here>**


### Step 2: Start application
Goto application folder, and start the application by running artisan command there:
**php artisan serve**


### Step 3: Test application
Goto below documentation link and as instructed test the API's:
**https://documenter.getpostman.com/view/13373910/2sA3XY7yCy**



