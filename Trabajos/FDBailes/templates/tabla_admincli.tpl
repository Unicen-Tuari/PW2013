<br>
<table class="table table-bordered table-hover">
        <thead>
          <tr class="active">
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Dirección</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Mail</th>
          </tr>
        </thead>
        <tbody>
          {foreach $clientes as $cliente}
    <tr>
      <td>{$cliente.id}</td>
      <td>{$cliente.nombre}</td>
      <td>{$cliente.apellido}</td>
      <td>{$cliente.direccion}</td>
      <td>{$cliente.telefono}</td>
      <td>{$cliente.mail}</td>
    </tr>
    {/foreach}
        </tbody>
      </table>