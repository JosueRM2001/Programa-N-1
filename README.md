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

```bash
docker pull erickjrm/programphp:latest
```

- **Step #3**

Then run the following command, which generates the container and the port.

```bash
docker run -d -p 8080:80 --name php erickjrm/programphp:lates
```

- **Step #4**

Open the Docker Desktop to see if the image is created correctly and send it to run to view.

- **Step #5**
**Acces the application**: Is running you can accces the applicaction by to the

following url in your web browser: http://localhost:8080

## Program-N-2 Project
## Steps to run the project locally on your computer
- **Step #1**

Clone the project repository to your machine with the following link (you must have GitHub Desktop installed):

```bash
https://github.com/JosueRM2001/Programa-N-1.git
```

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
  
- **Step #4**

We must install what XAMPP can be installed in the following link:

```bash
https://www.apachefriends.org/es/index.html
```

Once installed we must copy the php path that XAMPP generates for us.

![Captura de pantalla 2024-11-12 073953](https://github.com/user-attachments/assets/fc3aa017-8708-4634-8777-ab618698e88b)

Finally we must paste the following command in the settings,json.

![Captura de pantalla 2024-11-12 074436](https://github.com/user-attachments/assets/30b7686c-4b5a-437b-abfd-83e822959e4d)

The command is:

```bash
"php.validate.executablePath": "C:\\php\\php.exe"
```

To finish, we will right-click and select the following:

![Captura de pantalla 2024-11-12 074813](https://github.com/user-attachments/assets/c26cb7f5-d0b2-4ce4-a69e-a58990facc01)

**With this you can now run the project locally without problems**.
    
