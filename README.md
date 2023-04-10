# Introduction

This repository contains a Dockerfile that can be used to build an image for running a PHP web application with Apache server. The Dockerfile uses PHP 7.4 and installs the necessary packages and extensions required for the web app to run smoothly.

# Prerequisites

To use this Dockerfile, you need to have the following installed on your machine:

Docker
Or You can use gitpod which in this case what is what i am using

# Getting Started

To get started, follow the steps below:

Clone this repository to your local machine.
Navigate to the directory where the Dockerfile and web app files are located.
Run the following command to build the Docker image:

```bash
docker build -t your-image-name .
````

Note that you should replace your-image-name with a name that you want to give to your Docker image.
 Once the image is built, you can run a container with the following command:

```bash
docker run -p 80:80 -d your-image-name
``` 
This command will run the container in detached mode (-d) and map the container's port 80 to the host's port 80 (-p 80:80).
Access your web app by opening a web browser and going to http://localhost

You can modify the COPY command in the Dockerfile to copy the contents of your own web app to the container.


When you open the login form, you will see two fields: username and password. To test the form, use the following credentials:

Username: fahad

Password: password123

If you enter the correct credentials and click the "Submit" button, you will see a welcome message. If you enter incorrect credentials, you will see an error message.

# Customization

You can customize the login form by modifying the HTML and CSS code in the index.html file. If you want to use the login form in your own web application, you can copy the PHP code from login.php and modify it to suit your needs.

# License

This project is licensed under the MIT License. See the LICENSE file for details.
