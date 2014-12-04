<?php
/* 
template - drupal.org/node/1224106#comment-4969404
Photo title - drupal.org/node/432846#comment-4125056
used at: www.highrockphoto.com
/*

/* change the column count to the number of photos you want to appear going across. (Adjust thumbnail size as needed) */
$columns =3;
  $rows = array_chunk($items, $columns);
?>

<table class="galerie-article">
  <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
      <?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0) {
          $row_class .= ' row-first';
        }
        if (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <tr class="<?php print $row_class; ?>">
        <?php foreach ($columns as $column_number => $item): ?>
          <td class="<?php print 'col-'. ($column_number + 1); ?>">
            <div class="photo-image"><?php print render($item); ?></div>
          <!-- <div class="photo-title">--><?php //print($item['#item']['title']); ?><!--</div>-->
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>