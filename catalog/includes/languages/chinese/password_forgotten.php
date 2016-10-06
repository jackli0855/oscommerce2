<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('NAVBAR_TITLE_1', '登录');
define('NAVBAR_TITLE_2', '忘记密码');
define('HEADING_TITLE', '我忘记密码了!');
define('TEXT_MAIN', '您如果忘了密码，请输入您的电子邮件地址.我们将通过邮件发送重置链接给您.');
define('TEXT_PASSWORD_RESET_INITIATED', '请检查您的邮箱.在您重置密码前，重置密码链接在24小时内有效');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '错误：我们的记录中未找到您的邮件地址！');
define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - 重置密码');
define('EMAIL_PASSWORD_RESET_BODY', '我们收到您在' . STORE_NAME . '的密码重置请求.' . "\n\n" . '请点击下列链接修改你的密码:' . "\n\n" . '%s' . "\n\n" . '如非本人操作，请勿点击，重置密码链接将在24小时后失效.' . "\n\n" . '如须帮助或有任何疑问, 请联系我们: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('ERROR_ACTION_RECORDER', '错误: 密码重置链接已经发送. 请在 %s 分钟后重试.');
?>