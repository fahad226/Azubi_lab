# Introduction

This repository contains a Dockerfile that can be used to build an image for running a PHP web application with Apache server. The Dockerfile uses PHP 7.4 and installs the necessary packages and extensions required for the web app to run smoothly. In addition, there is a basic login form created with HTML, CSS, and PHP that can be utilized as a template for authentication in web applications.

# Prerequisites

To use this Dockerfile, you need to have the following installed on your machine:

Docker

Or
gitpod.io


# Building the Docker Image

To build the Docker image, you can use the following command in the directory where the Dockerfile is located:

```bash
docker build -t <image-name> .
````
Replace <image-name> with the name you want to give to the Docker image.


# Running the Containerized Application

To run the containerized application, use the following command:

```bash
docker run -p 80:80 <image-name>
```
This command maps port 80 of the Docker container to port 80 of the host machine, allowing the web application to be accessed through a web browser by entering the host machine's IP address.

You can modify the COPY command in the Dockerfile to copy the contents of your own web app to the container.


When you open the login form, you will see two fields: username and password. To test the form, use the following credentials:

Username: fahad

Password: password123

If you enter the correct credentials and click the "Submit" button, you will see a welcome message. If you enter incorrect credentials, you will see an error message.

# Pushing the Docker Image to AWS using Fargate

To push the Docker image to AWS, you can use Amazon Elastic Container Registry (ECR) to store and manage Docker images. Follow these steps:

```bash
$(aws ecr get-login --no-include-email --region <region>)
```
Replace <region> with the AWS region where the ECR repository was created.

Tag the Docker image using the following command:

```bash
docker tag <image-name>:latest <aws-account-id>.dkr.ecr.<region>.amazonaws.com/<repository-name>:latest
```
This command pushes the Docker image to the ECR repository you created earlier.

Create an ECS task definition that references the Docker image stored in the ECR repository.

Create an ECS service with Fargate launch type to run the containerized application using the task definition.

With Fargate, you don't need to worry about the underlying infrastructure that runs your containers, as Fargate manages the infrastructure for you. Instead, you can focus on developing and deploying your containerized applications.

# Conclusion

This documentation has provided information on how to build a Docker image for running a PHP web application with Apache server, how to run the containerized application using Docker, and how to push the Docker image to AWS using Fargate. By following these steps, you can easily deploy your PHP web application in a containerized environment.
