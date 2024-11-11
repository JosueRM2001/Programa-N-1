# Presentation
Este es un proyecto de presentación básico desarrollado con PHP. 

## Descripción
Este proyecto muestra una página con una presentación formal que incluye secciones como "Introducción", "Objetivos" y "Detalles Técnicos".
Es una programa simple para mostrar un programa como funciona en el lengujae de programacion de PHP.

## Estructura del Proyecto
 **Contiene lo Siguiente**
- `index.php`: Archivo principal de la presentación.
- `styles.css`: Archivo CSS para la estilización de la página.
- `Dockerfile`: Configuración de la imagen del Docker.

## Requisitos para su Desarrollo
- **Docker Desktop** (si deseas ejecutarlo en un contenedor)
- **Visual Studio Code** (opcional, pero recomendado)
- **La extención PHP para Visual Studio Code** (para mejorar el soporte y resaltado de sintaxis).
- **GitHub Desktop** (si deseas clonar y utilizar el proyecto)
  
## Doker Hub
## Pasos para generar la imgen y contenedor de Doker Hub
- **Paso N°1**
- Abrir la terminal de cmd de tu computadora (se debe tener instaldo Docker Desktop)
- **Paso N°2**
- Ejecutar el siguiente comando, el cual generara la imagen.
- docker pull erickjrm/programphp:latest
- **Paso N°3**
- Luego ejecutar el siguiente comando, el cual genera el contenedor y el puerto.
- docker run -d -p 5000:5000 --name python erickjrm/programpython:latest
- **Paso N°4** 
- Abrir el Docker Desktop para ver si la imgen esta creada corectamente y mandarla a corer para poder visualizar.
  
## Proyecto Program-N-1
## Pasos para ejecutar el proyecto localmente en tu computador
- **Paso N°1**
- Clonar el repositorio del proyecto en tu máquina con el suiente link (se debe tener instalado el GitHub Desktop) :
- https://github.com/JosueRM2001/Programa-N-1.git
- **Paso N°2**
- Abrir el proyecto con Visual Estudio Code (se debe tener instalado VisualEstudio Code, si es posible la version mas actual).
- **Paso N°3**
- Instalar las siguientes extenciones en Visual Estudio Code:
- PHP Intelephene
- PHP IntelliSense
- PHP Debug
- PHP Server
- PHP Extension Pack
- Docker
- **Con esto ya podras ejecutar el proyecto sin problemas de manera local**.
    
