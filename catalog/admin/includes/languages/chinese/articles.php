<?php
/*
  $Id: articles.php, v1.0 2003/12/04 12:00:00 ra Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', '单元/内容');
define('HEADING_TITLE_SEARCH', '搜索');
define('HEADING_TITLE_GOTO', 'Go To:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_TOPICS_ARTICLES', '单元/内容');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_STATUS', '状态');

define('TEXT_ARTICLES_CURRENT', '当前:');

define('TEXT_NEW_ARTICLE', '新内容');
define('TEXT_TOPICS', '单元:');
define('TEXT_SUBTOPICS', '子单元:');
define('TEXT_ARTICLES', '内容:');
define('TEXT_ARTICLES_AVERAGE_RATING', '点击率:');
define('TEXT_ARTICLES_HEAD_TITLE_TAG', 'SEO Title:');
define('TEXT_ARTICLES_HEAD_DESC_TAG', 'SEO Description:<br><small>(Article Abstract =<br>first %s charachters)</small>');
define('TEXT_ARTICLES_HEAD_KEYWORDS_TAG', 'SEO Keywords:');
define('TEXT_DATE_ADDED', '添加日期:');
define('TEXT_DATE_AVAILABLE', '有效期:');
define('TEXT_LAST_MODIFIED', '最后修改:');
define('TEXT_NO_CHILD_TOPICS_OR_ARTICLES', '请在当前单元插入新内容.');
define('TEXT_ARTICLE_MORE_INFORMATION', '更多<a href="http://%s" target="blank"><u>web page</u></a>.');
define('TEXT_ARTICLE_DATE_ADDED', '添加日期 %s.');
define('TEXT_ARTICLE_DATE_AVAILABLE', '有效期 %s.');

define('TEXT_EDIT_INTRO', '请做不要的修改');
define('TEXT_EDIT_TOPICS_ID', '单元 ID:');
define('TEXT_EDIT_TOPICS_NAME', '单元名:');
define('TEXT_EDIT_SORT_ORDER', '顺序:');

define('TEXT_INFO_COPY_TO_INTRO', '请选择你要复制到的单元');
define('TEXT_INFO_CURRENT_TOPICS', '当前单元:');

define('TEXT_INFO_HEADING_NEW_TOPIC', '新单元');
define('TEXT_INFO_HEADING_EDIT_TOPIC', '编辑单元');
define('TEXT_INFO_HEADING_DELETE_TOPIC', '删除单元');
define('TEXT_INFO_HEADING_MOVE_TOPIC', '移动单元');
define('TEXT_INFO_HEADING_DELETE_ARTICLE', '删除内容');
define('TEXT_INFO_HEADING_MOVE_ARTICLE', '移动内容');
define('TEXT_INFO_HEADING_COPY_TO', '复制到');

define('TEXT_DELETE_TOPIC_INTRO', '你确定删除该单元吗?');
define('TEXT_DELETE_ARTICLE_INTRO', '你确定要永久删除该内容吗?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>警告:</b> 有 %s 子单元仍然连接到该单元!');
define('TEXT_DELETE_WARNING_ARTICLES', '<b>警告:</b> 有 %s 内容仍然连接到该单元!');

define('TEXT_MOVE_ARTICLES_INTRO', 'Please select which topic you wish <b>%s</b> to reside in');
define('TEXT_MOVE_TOPICS_INTRO', 'Please select which topic you wish <b>%s</b> to reside in');
define('TEXT_MOVE', 'Move <b>%s</b> to:');

define('TEXT_NEW_TOPIC_INTRO', 'Please fill out the following information for the new topic');
define('TEXT_TOPICS_NAME', '单元名称:');
define('TEXT_SORT_ORDER', '顺序:');

define('TEXT_EDIT_TOPICS_HEADING_TITLE', '单元标题:');
define('TEXT_EDIT_TOPICS_IMAGE', '单元图片:');
define('TEXT_EDIT_TOPICS_DESCRIPTION', '单元描述:');
define('TEXT_EDIT_TOPICS_DESCRIPTION', '单元描述:');

define('TEXT_ARTICLES_STATUS', '内容状态:');
define('TEXT_ARTICLES_DATE_AVAILABLE', '有效期:');
define('TEXT_ARTICLE_AVAILABLE', '发布');
define('TEXT_ARTICLE_NOT_AVAILABLE', '草稿');
define('TEXT_ARTICLES_AUTHOR', '作者:');
define('TEXT_ARTICLES_NAME', '内容标题:');
define('TEXT_ARTICLES_DESCRIPTION', '内容内容:');
define('TEXT_ARTICLES_URL', '内容URL:');
define('TEXT_ARTICLES_URL_WITHOUT_HTTP', '<small>(without http://)</small>');

define('EMPTY_TOPIC', '空单元');

define('TEXT_HOW_TO_COPY', '复制方式:');
define('TEXT_COPY_AS_LINK', '连接复制');
define('TEXT_COPY_AS_DUPLICATE', '独立复制');

define('ERROR_CANNOT_LINK_TO_SAME_TOPIC', '错误: 不能连接内容到相同的单元.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '错误: 图片单元不可写: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '错误: 图片单元不存在: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_TOPIC_TO_PARENT', '错误: 单元不能移动到子单元.');

?>
