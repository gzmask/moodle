<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'book', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   book
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = '添加新章节';
$string['book:edit'] = '修改图书章节';
$string['book:exportimscp'] = '导出图书为IMS内容包';
$string['book:import'] = '导入章节';
$string['book:print'] = '打印图书';
$string['book:read'] = '阅读图书';
$string['book:viewhiddenchapters'] = '查看隐藏的图书章节';
$string['chapterscount'] = '章节';
$string['chaptertitle'] = '章节名';
$string['confchapterdelete'] = '确定要删除此章节么？';
$string['confchapterdeleteall'] = '确定要删除此章节以及其所有子章节么？';
$string['content'] = '内容';
$string['customtitles'] = '自定义标题';
$string['customtitles_help'] = '只在目录中自动显示章节标题。';
$string['doexport'] = '导出';
$string['doimport'] = '导入';
$string['editingchapter'] = '编辑章节';
$string['errorchapter'] = '读取章节发生错误';
$string['faq'] = '书籍FAQ';
$string['faq_help'] = '*为什么仅有两级？*

因为通常对于绝大多数的书，两级已经足够了 ，三级就会导致结构不良。图书模块是为了制作简短的多页学习材料而设计的。通常对于更长的文档用PDF格式较好。最简单的制作PDF的方法是用虚拟打印机（参考
<a  href="http://sector7g.wurzel6.de/pdfcreator/index_en.htm"  target="_blank">PDFCreator</a>、<a  href="http://fineprint.com/products/pdffactory/index.html"  target="_blank">PDFFactory</a>、<a  href="http://www.adobe.com/products/acrobatstd/main.html"  target="_blank">Adobe Acrobat</a>,
等）。

*学生能编辑图书吗？*

只有老师才能制作和编辑图书。目前我们还没有使学生能够编辑的计划，但是有人为学生做了些类似的东西。这样做主要是为了让图书模块尽可能保持简洁。

*我该怎样搜索图书呢？*

目前只有一个办法，那就是在打印页面中使用浏览器的搜索功能。现在只在Moodle讨论区里可以全文搜索。如果能够全面的搜索所有资源，包括图书，那将会很棒。有志愿者愿意做吗？

*我的标题一行容纳不下。*

修改标题或者让网站管理员修改目录的宽度。它是一个影响所有图书的全局配置，在模块配置页面修改。';
$string['fileordir'] = '文件或目录';
$string['generateimscp'] = '生成IMS内容包';
$string['import'] = '导入';
$string['import_help'] = '您可以导入一个单独的HTML文件或者一个目录中的所有HTML文件。相关的文件链接会被转换成绝对章节链接。图像、flash 和 java 也会被重新连接。';
$string['importinfo'] = '导入选中的HTML文件或目录。<br/>章节是按照文件名字典序排列的。<br/>命名为\'sub_*.*\'的文件永远被作为子章节导入。';
$string['importing'] = '正在导入';
$string['importingchapters'] = '将章节导入到图书中';
$string['maindirectory'] = '主目录';
$string['modulename'] = '图书';
$string['modulename_help'] = '图书是一种简单的多页学习资料。';
$string['modulenameplural'] = '图书';
$string['navexit'] = '退出图书';
$string['navnext'] = '下一个';
$string['navprev'] = '前一个';
$string['numbering'] = '章节编号';
$string['numbering0'] = '无';
$string['numbering1'] = '数字';
$string['numbering2'] = '项目列表';
$string['numbering3'] = '缩进';
$string['numbering_help'] = '* 无 - 章及节的标题都完全不做格式化。如果您想自定义特殊编号方式，就选这个。例如：在章节标题输入“A 第一章”，“A.1 某小节”，……
* 编号 - 章及节都是编号的（1，1.1，1.2，2，……）
* 项目符号 - 节是缩进的并且带有项目符号
* 缩进 - 节是缩进的';
$string['numberingoptions'] = '可用的编号选项';
$string['numberingoptions_help'] = '选择在创建图书时可用的编号选项。';
$string['pluginadministration'] = '图书管理';
$string['pluginname'] = '图书';
$string['printbook'] = '打印图书';
$string['printchapter'] = '打印本章节';
$string['printdate'] = '日期';
$string['printedby'] = '打印者';
$string['relinking'] = '重新链接';
$string['subchapter'] = '子章节';
$string['toc'] = '目录';
$string['top'] = '顶部';
