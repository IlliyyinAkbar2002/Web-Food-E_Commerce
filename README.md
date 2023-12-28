<p><a target="_blank" href="https://app.eraser.io/workspace/6CY5E29m4gcAlKdMlCy3" id="edit-in-eraser-github-link"><img alt="Edit in Eraser" src="https://firebasestorage.googleapis.com/v0/b/second-petal-295822.appspot.com/o/images%2Fgithub%2FOpen%20in%20Eraser.svg?alt=media&amp;token=968381c8-a7e7-472a-8ed6-4a6626da5501"></a></p>

<a href="https://app.eraser.io/workspace/6CY5E29m4gcAlKdMlCy3?elements=9cf2RfYTF6FiR9qu_ehN3g">View on Eraser<br /><img src="https://app.eraser.io/workspace/6CY5E29m4gcAlKdMlCy3/preview?elements=9cf2RfYTF6FiR9qu_ehN3g&type=embed" /></a>

# Web-Food-E_Commerce

**Entities**

- **Orders:** This entity stores information about orders placed by customers. It has the following attributes:
  - id: The unique identifier for the order.
  - customer_id: The identifier for the customer who placed the order.
  - order_date: The date and time the order was placed.
  - status: The current status of the order (e.g., pending, in progress, completed).
- **Order items:** This entity stores information about the individual items ordered by a customer. It has the following attributes:
  - id: The unique identifier for the order item.
  - order_id: The identifier for the order that the item belongs to.
  - product_id: The identifier for the product that was ordered.
  - quantity: The quantity of the product that was ordered.
- **Products:** This entity stores information about the products that are available for purchase on the e-commerce website. It has the following attributes:
  - id: The unique identifier for the product.
  - name: The name of the product.
  - price: The price of the product.
  - category_id: The identifier for the category that the product belongs to.
- **Customers:** This entity stores information about the customers who use the e-commerce website. It has the following attributes:
  - id: The unique identifier for the customer.
  - name: The name of the customer.
  - email: The email address of the customer.
- **Addresses:** This entity stores information about the shipping addresses that customers can use for their orders. It has the following attributes:
  - id: The unique identifier for the address.
  - customer_id: The identifier for the customer who owns the address.
  - street: The street address.
  - city: The city.
  - zip_code: The zip code.
  - country: The country.
  - is_primary: A flag indicating whether this is the customer's primary shipping address.

**Relationships**

- **One order has many order items:** A single order can have multiple order items.
- **One product has many order items:** A single product can be ordered multiple times in a single order.
- **One customer has many orders:** A single customer can place multiple orders.
- **One customer has many addresses:** A single customer can have multiple shipping addresses.
  **One address belongs to one customer:** A single shipping address can only belong to one customer.

<!--- Eraser file: https://app.eraser.io/workspace/6CY5E29m4gcAlKdMlCy3 --->
