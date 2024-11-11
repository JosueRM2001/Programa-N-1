# Presentation
This is a basic presentation project developed with PHP.

## Description
This project shows a page with a formal presentation that includes sections like "Introduction", "Objectives" and "Technical Details".

It is a simple program to show a program how it works in the PHP programming language.

## Project Structure
**Contains the Following**
- `index.php`: Main presentation file.
- `styles.css`: CSS file for styling the page.
- `Dockerfile`: Docker image configuration.

## Development Requirements
- **Docker Desktop** (if you want to run it in a container)
- **Visual Studio Code** (optional, but recommended)
- **PHP extension for Visual Studio Code** (for better support and syntax highlighting).
- **GitHub Desktop** (if you want to clone and use the project)

## Docker Hub
## Steps to generate the image and container for Docker Hub
- **Step #1**

Open the cmd terminal on your computer (you must have Docker Desktop installed).

- **Step #2**

Run the following command, which will generate the image:

docker pull erickjrm/programphp:latest

- **Step #3**

Then run the following command, which generates the container and the port.

docker run -d -p 5000:5000 --name python erickjrm/programpython:latest

- **Step #4**

Open the Docker Desktop to see if the image is created correctly and send it to run to view.

## Program-N-1 Project
## Steps to run the project locally on your computer
- **Step #1**

Clone the project repository to your machine with the following link (you must have GitHub Desktop installed):

https://github.com/JosueRM2001/Programa-N-1.git

- **Step #2**

Open the project with Visual Estudio Code (you must have VisualEstudio Code installed, if possible the most recent version).

- **Step #3**

Install the following extensions in Visual Estudio Code:

- PHP Intelephene
- PHP IntelliSense
- PHP Debug
- PHP Server
- PHP Extension Pack
- Docker

**With this you can now run the project locally without problems**.
    
