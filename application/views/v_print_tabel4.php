<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <tr>
        <th>ID Polygon</th>
        <th>Nama Bidang Polygon</th>
       <th>Koordinat</th>
       <th>Informasi</th>
       <th>Gambar</th>
     </tr>
     <?php 
    foreach($datas as $b): ?>
                
     <tr>
      <td><?php echo $b->id_polygon; ?></td>
      <td><?php echo $b->name_polygon; ?></td>
      <td><?php echo $b->coordinates; ?></td>
      <td><?php echo $b->information; ?></td>
      <td><img src="<?php echo base_url(); ?>/assets/uploads/<?php echo $b->photo; ?>" width="90" height="60"></td>
      <td>
    </tr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
    window.print();
    </script>
</body>
</html>