<!DOCTYPE html>
<html>
  <body>
    <div>
      <table>
        <tr>
          <td>method</td>
          <td><?php echo $_SERVER['REQUEST_METHOD']?></td>
        <tr>
        <tr>
          <td>name</td>
          <td><?php echo $_SERVER['REQUEST_METHOD'] === 'GET' ? $_GET['name'] : $_POST['name'] ?></td>
        <tr>
        <tr>
          <td>value</td>
          <td><?php echo $_SERVER['REQUEST_METHOD'] === 'GET' ? $_GET['value'] : $_POST['value'] ?></td>
        <tr>
      </table>
      <?php echo var_dump($_SERVER); ?>
    </div>
  </body>
</html>
