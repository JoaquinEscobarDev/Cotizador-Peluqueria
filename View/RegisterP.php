<!DOCTYPE html>
<html lang="en">

<script>
    function soloNumeros(e) {
        var key = e.charCode;
        console.log(key);
        return key >= 48 && key <= 57;
    }
</script>

<style>
section {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 650px;
            margin-right: 20px;
            margin-top: 10%;
            margin-left: 30%;
    }

    
    .layout {
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="layout">
        <div>
            <h1>"Peluqueria CIISA"</h1>
        </div>
        <form action="../Controller/ControllerP.php" method="POST">

            <table>
                <tr>
                    <td>
                        <label for="rut">Rut Del Solicitante: </label>
                    </td>
                    <td>
                        <input type="text" name="rut" id="rut" placeholder="11111111" onkeypress="return soloNumeros(event)">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nm">Nombre: </label>
                    </td>
                    <td>
                        <input type="text" name="nm" id="nm" placeholder="Cristiano">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sexo">Ingrese el sexo</label>
                    </td>
                    <td>
                        <input type="radio" name="sexo" id="sexo" value="1">Hombre
                        <input type="radio" name="sexo" id="sexo" value="2">Mujer
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="TCorte">Tipo de corte: </label>
                    </td>
                    <td>
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Corte de cabello">Corte de cabello
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Corte al cero">Corte al cero
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Afeitado">Afeitado
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Masaje capilar">Masaje capilar
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Teñido">Teñido
                        <input type="checkbox" name="TCorte[]" id="TCorte" value="Peinado">Peinado
                    </td>
                </tr>

            </table>
            <div>
                <button type="submit">Validar</button>
            </div>
        </form>
    </section>


</body>

</html>