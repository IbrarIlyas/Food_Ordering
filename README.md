Food Ordering App - Project Summary

Project Overview:
- This project was created using ChatGPT assistance.
- Total time taken to complete: 1.5 to 2 hours.

Project Flow Description:
1. Homepage (Menu Page)
- Displays all food items using Bootstrap cards.
- Each item includes an image, name, price, and 'Add to Cart' button.
- JavaScript is used to manage cart data using localStorage.
- When a user clicks 'Add to Cart', the item is stored in localStorage, and a success message appears for 5 seconds.
2. Checkout Page
- Accessed via a 'Go to Checkout' button on the menu page.
- Displays all items stored in the cart with their quantities and total price.
- Includes a form to enter customer name and phone number.
- When submitted, the cart is converted into a JSON string and sent to the server along with customer data.
3. Order Submission (Backend Logic)
- The backend parses the cart JSON.
- It creates a new order entry with the customer's details.
- Then it creates order item entries for each selected menu item.
4. Admin Panel
- Displays a list of all submitted orders.
- Each order shows customer information and a list of items with quantities.

Technologies Used:
- Laravel (PHP framework) for backend and routing.
- Blade templating engine for frontend views.
- Bootstrap for styling and responsive layout.
- JavaScript and localStorage for cart functionality.
