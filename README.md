# Recuperatorio-Laboratorio-4
Un grupo de Administración de Empresas nos solicita comenzar con el desarrollo de una aplicación que les permita
administrar su cartera de comercios representados.
Como primera fase de desarrollo necesitamos realizar el Login de la aplicación y el ABM de Negocios.
En base al siguiente esquema, se solicita:

Model User :

User
UserId
Email


Business
BusinessId
Category
Name
Email
Address
Password




1. Generar las clases indicadas en el Diagrama utilizando los principios de POO que consideres necesarios.
2. Implementar el Login de la aplicación:
• El usuario debe iniciar sesión en la aplicación con alguno de los usuarios presentes en el repositorio.
• Proteger el resto de las páginas internas para evitar el acceso sin autenticación, utilizando SESSION.
Si se trata de acceder a una página interna sin iniciar sesión, se debe redireccionar al index.
3. Implementar el Add Form de Negocios:
• Solicitar los campos del form al usuario. Todos los campos son requeridos
• Se debe persistir la información usando JSON.
4. Implementar el List Form de Negocios:
• Mostrar el listado de Negocios con todos sus datos excepto BusinessId.
Nota: Se provee el Template HTML para realizar la aplicación, el cual deberá adaptarse indicando action y method
del post, name de los controles y rutas de los botones del menú de navegación.
Tomar los datos provistos en users.json para el inicio de sesión.
Persistir los Businesses en un archivo JSON llamado businesses.json
