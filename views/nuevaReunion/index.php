<h1>Nueva reunión</h1>
    <form method="POST" id="reunion" action="nuevaReunion/run">
        <table>
            <tr>
                <td>
                    Título:
                </td>
                <td>
                    <input type="text" name="titulo">
                </td>
            </tr>
            <tr>
                <td>
                    Breve descripción:
                </td>
                <td>
                    <input type="text" name="breveDesc">
                </td>
            </tr>
            <tr>
                <td>
                    Fecha:
                </td>
                <td>
                    <input type="date" name="fecha">
                </td>
            </tr>
            <tr>
                <td>
                    Hora:
                </td>
                <td>
                    <input type="time" name="hora">
                </td>
            </tr>
            <tr>
                <td>
                    Descripción detallada: 
                </td>
                <td>
                    <textarea rows="4" cols="50" name="granDesc" form="reunion">Introduzca una descripción extensa que explique lo que se va a hacer en la reunión...</textarea>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Aceptar">
        <input type="reset">
    </form>