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
 * Strings for component 'quiz_grading', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotloadquestioninfo'] = '无法加载题目类型指定的题目信息';
$string['essayonly'] = '下列题目需要人工评分';
$string['gradeall'] = '批改全部 {$a} 个试答';
$string['graded'] = '(已评分)';
$string['gradenextungraded'] = '批改下 {$a} 份未评分试卷';
$string['gradeungraded'] = '批改全部 {$a} 份未评分试卷';
$string['grading'] = '人工评分';
$string['gradingall'] = '此试题共被解答 {$a} 次。';
$string['gradingattempt'] = '{$a->fullname}的第{$a->attempt}次答题';
$string['gradingnextungraded'] = '下 {$a} 份未评分试卷';
$string['gradingnotallowed'] = '无权在该测验中手动评分回复';
$string['gradingreport'] = '人工评分报告';
$string['gradingungraded'] = '{$a} 份未评分试卷';
$string['gradinguser'] = '{$a} 的试卷';
$string['invalidattemptid'] = '此试卷ID不存在';
$string['invalidquestionid'] = '找不到id为{$a}的可评分题目';
$string['questiontitle'] = '题目 {$a->number}："{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} 次 {$a->openspan}已评分{$a->closespan})。';
