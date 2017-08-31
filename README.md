# PRESTASHOP 
## Cambios
```sh
Para poder acceder a los directorios que se trabajan en este tienda está basada en PHP y tienen una extensión .tpl (marcador de sintaxis para plantillas de Aria para temas).
Importante después de la instalación es necesario cambiarle el nombre a la carpeta admin y eliminar la carpeta install
```
## Modificación Login
```sh
El directorio esta  /admin/themes/templates/controller/login/
En esta esta su recpectivo index.tpl, el header que es el encabezado y como tiene estructurado los directorios ,css y js  en este tiene el cambio de body  para mostrar una imagen de fondo, el contenido se encuentra en content.tpl que en esta la quitamos el personaje de prestashop y su versión
```
## Otros cambio  
```sh
favicon.ico de la vista general, de la instalación, y parte administrativa
Imagen del encabezado de la parte administrativa
```


# PrestaShop 1.6

PrestaShop es una plataforma muy potente, y parte de su poder reside en el hecho de que es muy fácil construir sobre sus cimientos podiendo ampliar sus funcionalidades a través de módulos y códigos de sobrecarga.
 > Descripción de la Arquitectura
PrestaShop está desarrollado principalmente en PHP. Otro lenguajes que forman parte de su desarrollo son JavaScript, HTML, CSS, el lenguaje de plantillas Smarty, SQL, y XML. PrestaShop utiliza un Modelo - Vista-Controlador ( MVC ) - como patrón para su arquitectura de software. Adicionalmente, también utiliza tecnologías como jQuery, Bootstrap, Sass, etc.

# Estándares de Codificación
La consistencia es importante, más aún cuando se trata de escribir código abierto (open source), puesto que el código pertenece a millones de globos oculares, y la corrección de errores recae sobre éstos a la hora de localizar todos los errores actualmente presentes y entender cómo resolverlos.
Por esta razón, al crear cualquier cosa para PrestaShop, ya sea un tema, un módulo o un parche para el núcleo o corazón del software, debe esforzarse por seguir las siguientes pautas. 

# PSR-1 - Basic Coding Standard

## 1. Overview
```sh
•	Files MUST use only <?php and <?= tags.
•	Files MUST use only UTF-8 without BOM for PHP code.
•	Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both.
•	Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4].
•	Class names MUST be declared in StudlyCaps.
•	Class constants MUST be declared in all upper case with underscore separators.
•	Method names MUST be declared in camelCase.
```
## 2. FIles

### 2.1. PHP Tags: 
```sh
PHP code MUST use the long <?php ?> tags or the short-echo <?= ?> tags; it MUST NOT use the other tag variations.
```
### 2.2. Character Encoding:  
PHP code MUST use only UTF-8 without BOM.
### 2.3. Side Effects: 
```sh
A file SHOULD declare new symbols (classes, functions, constants, etc.) and cause no other side effects, or it SHOULD execute logic with side effects, but SHOULD NOT do both.
The phrase "side effects" means execution of logic not directly related to declaring classes, functions, constants, etc., merely from including the file.
"Side effects" include but are not limited to: generating output, explicit use of require or include, connecting to external services, modifying ini settings, emitting errors or exceptions, modifying global or static variables, reading from or writing to a file, and so on.
The following is an example of a file with both declarations and side effects; i.e, an example of what to avoid:
```
```sh
<?php 
// side effect: change ini settings
ini_set('error_reporting', E_ALL);
 
// side effect: loads a file
include "file.php";
 
// side effect: generates output
echo "<html>\n";
 
// declaration
function foo()
{
    // function body
}
```
```sh
The following example is of a file that contains declarations without side effects; i.e., an example of what to emulate:
```
```sh
<?php 
// declaration
function foo()
{
    // function body
}
 
// conditional declaration is *not* a side effect
if (! function_exists('bar')) {
    function bar()
    {
        // function body
    }
}
```
## 3. Namespace and Class Names
```sh
Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4].
This means each class is in a file by itself, and is in a namespace of at least one level: a top-level vendor name.
Class names MUST be declared in StudlyCaps.
Code written for PHP 5.3 and after MUST use formal namespaces.
```
```sh
For example:
<?php 
// PHP 5.3 and later:
namespace Vendor\Model;
 
class Foo
{
}
Code written for 5.2.x and before SHOULD use the pseudo-namespacing convention of Vendor_ prefixes on class names.
<?php 
// PHP 5.2.x and earlier:
class Vendor_Model_Foo
{
}
```
## 4. Class Constants, Properties, and Methods

The term "class" refers to all classes, interfaces, and traits.

### 4.1. Constants
```sh
Class constants MUST be declared in all upper case with underscore separators. For example:
<?php 
namespace Vendor\Model;
 
class Foo
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
}
```
### 4.2. Properties
```sh
This guide intentionally avoids any recommendation regarding the use of $StudlyCaps, $camelCase, or $under_score property names.
Whatever naming convention is used SHOULD be applied consistently within a reasonable scope. That scope may be vendor-level, package-level, class-level, or method-level.

```
