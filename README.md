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

## Implementation Details

Describe any key implementation details here, such as algorithms used, data structures, or important functions/classes.

## Usage

Provide instructions on how to use your code, examples of input and expected output, and any other relevant details for users or developers.

## Contributing

Explain how others can contribute to your project, guidelines for pull requests, code review process, etc.

## License

Specify the license under which your code is distributed.

## Contact

Provide contact information or links to reach out for support, feedback, or issues.
