function isNumber(event)
{
    var codigoTecla = event.keyCode ? event.keyCode : event.which;

    if (
      (codigoTecla >= 48 && codigoTecla <= 57) || // Números del 0 al 9
      (codigoTecla >= 96 && codigoTecla <= 105) || // Teclado numérico
      codigoTecla === 8 || // Backspace
      codigoTecla === 9 || // Tab
      codigoTecla === 37 || // Flecha izquierda
      codigoTecla === 39 || // Flecha derecha
      codigoTecla === 46 // Suprimir/Delete
    ) 
      return true; 
    else
      return false;
}