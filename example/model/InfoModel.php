<?php
namespace example\model;

use Upadd\Frame\Model;

/**
 * Class InfoModel
 * @package example\model
CREATE TABLE `up_info` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键自增',
    `name` varchar(100) DEFAULT NULL COMMENT '名称',
    `code` varchar(30) DEFAULT '0' COMMENT 'code',
    `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
    `update_time` int(10) DEFAULT NULL,
    `delete_time` int(10) DEFAULT NULL,
    `is_delete` tinyint(1) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COMMENT='信息测试';
 *
 */
class InfoModel extends Model{

    protected $_table = 'info';

    protected $_primaryKey = 'id';

    protected $_automaticityTime = true;

    //is_delete type tinyint = 1/正常,2/删除




}