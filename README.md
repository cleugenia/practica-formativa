# Práctica Formativa
Desarrolladores: Ana Sol Nuñez y M. Eugenia Descalzo.

## Llamada AJAX para el formulario de login

El formulario de login en la página principal (`index.html`) envía los datos de usuario y contraseña a un servidor mediante una llamada `fetch`.

El formulario contiene dos campos:
- **Nombre de usuario**
- **Contraseña**

Estos datos se envían como un objeto JSON al servidor utilizando una solicitud `POST` a la siguiente URL: https://mi-servidor.com/api/login

**Estructura de los datos enviados:**
```json
{
  "username": "valor_del_usuario",
  "password": "valor_de_la_contraseña"
}


Esta sección documenta cómo funciona la llamada AJAX y explica el propósito de los campos del formulario y los datos enviados.

### Resumen de pasos y comandos:

1. **Modificar `index.html`** para agregar el formulario de login:
```html
<form id="loginForm">
    <!-- Campos de formulario -->
</form>
