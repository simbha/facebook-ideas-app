<h4><?php print $count; ?> Posts found in the database</h4>

<?php while($row = $result->fetch()) { ?>

<h2><?php print $row->title; ?></h2>
<small>Posted by <?php print $row->author; ?></small>
<p><?php print $row->text; ?></p>

<?php } ?>

<h2><?php print count($this->db->queries); ?> Database Queries Run</h2>
<?php $this->db->print_queries(); ?>
