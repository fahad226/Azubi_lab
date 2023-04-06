# Fahad Docker Login Form

This is a simple login form that can be used as a template for authentication in web applications. It is built with HTML, CSS, and PHP, and utilizes the Apache web server and PHP 7.4 in a Docker container.

# Getting Started

To use this login form, you will need to have Docker installed on your machine or use gitpod environment which in this case i use the gitpod environment. They all work the same. Once you have Docker installed, you can follow these steps:

1. Clone this repository to your local machine.

2. Navigate to the project directory in your terminal or use the gitpod terminal.

3. Run the following command to build the Docker image:

Copy code

```bash
  docker build -t fahad .
```

After the image is built, run the following command to start a Docker container:

Copy code

```bash
  docker run -d -p 8000:80 fahad
```


Open your web browser and go to http://localhost:8000 to view the login form.

# Usage

When you open the login form, you will see two fields: username and password. To test the form, use the following credentials:

Username: fahad

Password: password123

If you enter the correct credentials and click the "Submit" button, you will see a welcome message. If you enter incorrect credentials, you will see an error message.

# Customization

You can customize the login form by modifying the HTML and CSS code in the index.html file. If you want to use the login form in your own web application, you can copy the PHP code from login.php and modify it to suit your needs.

# License

This project is licensed under the MIT License. See the LICENSE file for details.
