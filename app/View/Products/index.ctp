<table>
    <th><?php echo $this->Paginator->sort('id');?></th>
   <th><?php echo $this->Paginator->sort('name');?></th>
   <th><?php echo $this->Paginator->sort('details');?></th>
   <th><?php echo $this->Paginator->sort('created');?></th>
   <th><?php echo $this->Paginator->sort('modified');?></th>
   <?php foreach ($products as $value) { ?>
   <tr>
       
       <td><?php echo $value['Product']['id']; ?></td>
       <td><?php echo $value['Product']['name']; ?></td>
       <td><?php echo $value['Product']['details']; ?></td>
       <td><?php echo $value['Product']['created']; ?></td>
       <td><?php echo $value['Product']['modified']; ?></td>
       
</tr>
  

 <?php } ?>
<?php echo $this->Paginator->prev(); ?><?php echo $this->Paginator->numbers(); ?><?php echo $this->Paginator->next(); ?>
</table>