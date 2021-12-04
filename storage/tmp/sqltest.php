<?php $sql = "SELECT `st`.`id` as "value", `st`.`name` as "label"
FROM `vit_startups` as `st`";
 $res = DB::select($sql);
 return $res;