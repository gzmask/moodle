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
 * Strings for component 'qtype_numerical', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingnumerical'] = '添加一道数字题';
$string['addmoreanswerblanks'] = '再加 {no} 个空答案';
$string['addmoreunitblanks'] = '再加 {no} 个空单位';
$string['answermustbenumberorstar'] = '答案必须是数字或\'*\'。';
$string['answerno'] = '答案 {$a}';
$string['decfractionofquestiongrade'] = '从此题目总分罚掉的小数比例（0-1）';
$string['decfractionofresponsegrade'] = '从此次答题得分罚掉的小数比例（0-1）';
$string['editableunittext'] = '文本输入框';
$string['editingnumerical'] = '编辑数字题';
$string['errornomultiplier'] = '必须为此单位指定一个乘数。';
$string['errorrepeatedunit'] = '两个单位不能同名。';
$string['instructions'] = '说明';
$string['leftexample'] = '左侧，如 $1.00';
$string['manynumerical'] = '只有数字答案会被评分，单位可选';
$string['noneditableunittext'] = '单位 No1 文本不可编辑';
$string['nonvalidcharactersinnumber'] = '数字中有无效字符';
$string['notenoughanswers'] = '必须键入至少一个答案';
$string['nounitdisplay'] = '不按单位评分';
$string['numerical'] = '数字题';
$string['numerical_help'] = '从学生角度看，数字题很像填空题。区别是，数字题可以设置可接受的误差范围，这样若干个不同的答案都可被看做是一个答案。例如，如果答案是10，可接受的误差是2，那么所有8到12之间的数字都被认为是正确的。';
$string['numericalinstructions'] = '说明';
$string['numericalinstructions_help'] = '与题目有关的说明：

* 数字格式示例
* 复杂单位';
$string['numericalmultiplier'] = '乘数';
$string['numericalmultiplier_help'] = '乘数是一个因数，用来与正确答案相乘。

第一个单位（单位{$a}）默认乘数为1。因此，如果正确答案是5500，且单位1设为W，那么5500W是正确的回答。

如果您添加了一个乘数为0.001的单位kW，那么5.5kW就是正确答案。也就是说，回答5500W或5.5kW都是正确的。

注意，可接受误差也会与乘数相乘，所以接受100W的误差相当于接受0.1kW的误差。';
$string['numericalsummary'] = '答案为数字，可以包含单位。通过和多种标准答案比较来自动评分，有一定的容错能力。';
$string['oneunitshown'] = '只有数字答案会被评分，单位1会被显示';
$string['onlynumerical'] = '只有数字答案会被评分，不可使用单位';
$string['rightexample'] = '右侧，如 1.00 厘米或 1.00 公里';
$string['selectunit'] = '选择一个单位';
$string['selectunits'] = '选择单位';
$string['studentunitanswer'] = '单位答案显示为';
$string['unitappliedpenalty'] = '此成绩减掉了单位错误造成的 {$a} 分罚分。';
$string['unitchoice'] = '多重选择（单选框）';
$string['unitdisplay'] = '<STRONG>单位 1 已显示</STRONG>';
$string['unitedit'] = '编辑单位';
$string['unitgraded'] = '数字答案和单位答案会被评分';
$string['unitgraded1'] = '<STRONG>单位已评分</STRONG>';
$string['unithdr'] = '单位 {$a}';
$string['unitmandatory'] = '强制';
$string['unitmandatory_help'] = '* 答案会用写下的单位评分

* 如果单位域为空，会使用单位罚分';
$string['unitnotgraded'] = '<STRONG>单位未评分</STRONG>';
$string['unitnotselected'] = '未选择单位';
$string['unitnotused'] = '<STRONG>单位未使用</STRONG>';
$string['unitnotvalid'] = '此数值下的单位无效';
$string['unitoptional'] = '可选单位';
$string['unitoptional_help'] = '* 如果单位域不为空，会使用单位给答案评分

* 如果单位无效或未知，答案会被视为无效。';
$string['unitpenalty'] = '单位罚分';
$string['unitpenalty_help'] = '发生如下情况之一，会罚分

* 在单位输入框输入了未定义的单位
* 单位输入到了数值输入框';
$string['unitposition'] = '单位位置';
$string['unitshandling'] = '单位处理';
$string['unitsused'] = '<STRONG>单位已使用</STRONG>';
$string['unitunknown'] = '未定义单位';
$string['unitused'] = '<STRONG>单位已使用</STRONG>';
$string['unituses'] = '单位使用';
$string['unituses_help'] = '单位是按 Moodle 2.0 之前的版本方式使用的

* 学生可以用教师预定义的单位答题
* 此时会将常数作用于学生给的值。
* 如果学生未添加任何单位，会使用他的原始值。';
$string['validnumberformats'] = '有效的数字格式';
$string['validnumberformats_help'] = '* 普通数字，13500.67 : 13 500.67 : 13500,67: 13 500,67

* 如果您用“,”做千位分隔符，就*必须*使用小数点“.”，就像 13,500.67 : 13,500。

* 对对数形式，1.350067 * 10<sup>4</sup> 用 1.350067 E4 : 1.350067 E04 表示';
$string['validnumbers'] = '13500.67 : 13 500.67 : 13,500.67 : 13500,67 : 13 500,67 : 1.350067 E4 : 1.350067 E04';
