<?=
include('header.php');
?>
<!-- / Content -->
<div class="card">
  <h5 class="card-header">New Notification</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>know</th>
          <th>Phone</th>
          <th>Question</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php
        $stm = $db->prepare("SELECT * FROM contact ORDER BY cid DESC");
        $stm->execute();
        $result = $stm->fetchAll();
        // output data of each row
        $i = 0;
        foreach ($result as $key => $row) {
          $i++;
          $id = $row['cid'];
          $name = $row['name'];
          $know = $row['now'];
          $phone = $row['phone'];
          $question = $row['question'];
        ?>
          <tr>
            <td>
              <?= ++$key ?>
            </td>
            <td>
              <?= $name ?>
            </td>
            <td>
              <?= $know ?>
            </td>
            <td>
              <?= $phone ?>
            </td>
          
            <td>
              <?= $question ?>
            </td>

          </tr>

        <?php

        }

        ?>

      </tbody>
    </table>
  </div>
</div>

<?=
include('superFooter.php');
?>