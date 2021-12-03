<?php $sql = "SELECT `tc`.`id` as "value", `tc`.`name` as "label"
FROM `vit_technologies` as `tc`";
 $res = DB::select($sql);
 return $res;