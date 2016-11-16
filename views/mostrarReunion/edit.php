<h1>Modificar reunión</h1>
    <form method="POST" id="reunion" action="<?php echo URL; ?>mostrarReunion/editSave/<?php echo $this->mostrarReunion['Id']; ?>">
        <table>
            <tr>
                <td>
                    Título:
                </td>
                <td>
                    <input type="text" name="titulo" value="<?php echo $this->mostrarReunion['Titulo']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Breve descripción:
                </td>
                <td>
                    <input type="text" name="breveDesc" value="<?php echo $this->mostrarReunion['BreveDescripcion']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Fecha:
                </td>
                <td>
                    <input type="date" name="fecha" value="<?php echo $this->mostrarReunion['Fecha']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Hora:
                </td>
                <td>
                    <input type="time" name="hora" value="<?php echo $this->mostrarReunion['Hora']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Descripción detallada: 
                </td>
                <td>
                    <textarea rows="4" cols="50" name="granDesc" form="reunion"><?php echo $this->mostrarReunion['Descripcion']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Acta: 
                </td>
                <td>
                    <textarea rows="4" cols="50" name="acta" form="reunion">Acta de la reunión.</textarea>
                </td>
            </tr>

        </table>
        <input type="submit" name="submit" value="Aceptar">
        <input type="reset">
    </form>