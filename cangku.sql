-- --------------------------------------------------------
-- 主机:                           101.200.83.150
-- 服务器版本:                        10.3.17-MariaDB-log - MariaDB Server
-- 服务器操作系统:                      Linux
-- HeidiSQL 版本:                  11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 userforP 的数据库结构
DROP DATABASE IF EXISTS `cangku`;
CREATE DATABASE IF NOT EXISTS `cangku` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `cangku`;

-- 导出  表 userforP.userforP 结构
DROP TABLE IF EXISTS `cangku`;
CREATE TABLE IF NOT EXISTS `cangku` (
  `RKDH` int NOT NULL COMMENT '入库单号',
  `WarehouseNum` int NOT NULL COMMENT '仓库号',
  `rkdlx` char NOT NULL COMMENT '入库单类型',
  `glddh` int NOT NULL COMMENT '关联订单号',
  `gysbh` int NOT NULL COMMENT '供应商编号',
  `gysmc` char NOT NULL COMMENT '供应商名称',
  `gyslxr` char NOT NULL COMMENT '供应商联系人',
  `gyslxfs` int NOT NULL COMMENT '供应商联系方式',
  `zdr` char NOT NULL COMMENT '制单人',
  `zdsj` char NOT NULL COMMENT '制单时间',
  /*`Ulogtimes` int(10) unsigned zerofill NOT NULL COMMENT '密码错误次数',*/
  PRIMARY KEY (`RKDH`,`WarehouseNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  userforP.userforP 的数据：~0 rows (大约)
DELETE FROM `cangku`;
/*!40000 ALTER TABLE `userforP` DISABLE KEYS */;
/*!40000 ALTER TABLE `userforP` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
