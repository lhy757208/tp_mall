<?php
/**
 * 该文件主要是存放业务状态码相关配置
 */

return [
    "success" => 200,
    "error" => 0,
    "not_login" => -1,
    "user_is_register" => -2,
    "action_not_found" => -3,
    "controller_not_found" => -4,

    "mysql" => [
        "table_normal" => 1,//正常
        "table_peding" => 0,//待审核
        "table_delete" => 99//删除
    ]
];