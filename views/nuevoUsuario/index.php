<h1>Usuario nuevo</h1>
    <form method="POST" id="login" action="nuevoUsuario/run">
        <table>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr>
            <tr>
                <td>
                    Repetir Contraseña:
                </td>
                <td>
                    <input type="password" name="rpass">
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Guardar">
        <input type="reset">
    </form>