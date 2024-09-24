
    <?php
        // Iniciar la sesión para almacenar los productos temporalmente
        session_start();

        // Si no existe la variable de sesión para los productos, la creamos como un array vacío
        if (!isset($_SESSION["productos"])) {
            $_SESSION["productos"] = array();
        }

        // Procesar los datos enviados por el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["agregar"])) {
                // Obtener el producto ingresado
                $producto = htmlspecialchars($_POST["producto"]);

                // Agregar el producto a la lista (array) en la sesión
                if (!empty($producto)) {
                    $_SESSION["productos"][] = $producto;
                    echo "<p>Producto <strong>$producto</strong> añadido a la lista.</p>";
                }
            }

            // Mostrar la lista completa si el usuario finaliza
            if (isset($_POST["finalizar"])) {
                if (!empty($_SESSION["productos"])) {
                    echo "<h3>Lista completa de productos:</h3>";
                    echo "<ul>";
                    foreach ($_SESSION["productos"] as $producto) {
                        echo "<li>$producto</li>";
                    }
                    echo "</ul>";

                    // Limpiar la lista una vez finalizada la compra
                    session_unset();
                    session_destroy();
                } else {
                    echo "<p>No has agregado ningún producto.</p>";
                }
            }
        }
    ?>