# MWH - Product Search
I had 3 days to work on a product searching system, this was a task done as part of the hiring process for the specific company. The task revolved around creating a small full stack web app that retrieves product data from the a database and displays it on a web page. With the option to filter through the product list using a search box.
The app consists of a single front end page that loads in the product data asynchronously
using a small read-only API that I created

## Server side details
The database consists of two tables I joined together and converted the results to JSON
before sending the request back. PHP PDO was used as the connection driver.

## Client side details
The client side code loads in the data asynchronously by making a request to the server side
code. This data is then used to construct a table displaying all results. The search box utilises live load functionality, where the table results update as the users types.

---

## Technolgies used
- HTML5, CSS3, JavaScript
- PHP 
- MySQL