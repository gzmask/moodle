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
 * Strings for component 'hotpot', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   hotpot
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = '放弃';
$string['addquizchain'] = '添加一系列测验';
$string['addquizchain_help'] = '添加所有测验链中的测验吗？

**不**
: 只添加一个测验

**是**
: 如果源文件是个**测验文件**，该文件将被当作测验链的起始，该链上所有的测验都会被以相同的设置添加到此课程。链上的每个测验都必须包含指向下一个测验的链接。

如果源文件是个**文件夹**，该文件夹下所有能够被识别出来的测验都会被以相同的设置添加进来，并形成一个测验链。

如果源文件是个**单位文件**，比如说Hot Potatoes masher （热土豆碾子）文件或者index.html，该单位文件所列出的所有测验会被以相同的设置添加进来，并形成一个测验链。';
$string['allowreview_help'] = '如启用，学生在测验关闭以后可以回顾他们是如何作答的。';
$string['average'] = '平均';
$string['averagescore'] = '平均成绩';
$string['cacherecords'] = 'HotPot缓存记录';
$string['canrestartquiz'] = '您当前的结果将会被保存，并且您可以稍后重做测试“{$a}”。';
$string['canrestartunit'] = '您当前的结果会被保存，但如果想以后重做一次，您必须再从头开始。';
$string['canresumequiz'] = '您当前的结果将会被保存，并且您可以稍后继续进行测试“{$a}”。';
$string['checks'] = '检查';
$string['clearcache'] = '清空HotPot的缓存';
$string['cleardetails'] = '清空HotPot的内容';
$string['clearedcache'] = 'HotPot的缓存已被清空';
$string['cleareddetails'] = 'HotPot的内容已被清空';
$string['clickreporting'] = '点击报表';
$string['clickreporting_help'] = '如果启用该设定，则每次点击“提示”，“线索”或者“检查”按钮时，都会保留一个单独的记录。这使得教师可以看到一个非常详细的，显示每次点击时的测试状态的报告。若不启用，则测试只在每次提交时，才存储一个记录。';
$string['closed'] = '该活动已经关闭。';
$string['clues'] = '提示';
$string['completed'] = '完成';
$string['configenablecache'] = '保留HotPot测验的缓存能极大地提高学生访问测验的速度。';
$string['configenablecron'] = '指定HotPot的cron脚本在您所在时区的几点钟运行';
$string['configenablemymoodle'] = '此选项设置HotPot是否会列在“我的Moodle”页面上';
$string['configenableobfuscate'] = '在javascript代码不可读的方式下，插入媒体播放器会使确定文件名和文件位置变得更加困难。';
$string['configenableswf'] = '允许嵌入SWF文件到HotPot活动中。如果启用，该设定会重写filter_mediaplugin_enable_swf。';
$string['configfile'] = '配置文件';
$string['configframeheight'] = '当测验显示时带有边框，该值代表顶框的高度（以像素为单位），其中顶框包含了Moodle导航栏。';
$string['configlocation'] = '配置文件位置';
$string['configlockframe'] = '若启用该设定，则导航栏（若使用）将被锁定，从而变得不能滚动，不能调整大小，也没有边框';
$string['configmaxeventlength'] = '如果一个HotPot既指定了开启也指定了关闭时间，且两个时间的差大于此处指定的天数，则将会添加两个单独的日历事件到课程日历中。对于时间差小于指定日期数，或者只指定了一个时间的情况，只添加一个日历事件。如果两个时间均未被指定，将不会添加日历事件。';
$string['configstoredetails'] = '若启用该设置，则HotPot测验中的原始XML细节将会存储在hotpot_details表中。这允许提交的测验答案可以在以后重新评分，以反映HotPot测验评分系统中的变化。然而，如果在一个繁忙的站点上启用该选项，hotpot_details表中的数据会增长得非常快。';
$string['confirmdeleteattempts'] = '您真的要删除这些提交么？';
$string['correct'] = '正确';
$string['delay1summary'] = '试卷一与试卷二之间的时间延迟';
$string['delay2'] = '延迟2';
$string['delay2_help'] = '试卷二后，试卷间的最小时间延迟。';
$string['delay2summary'] = '后续试卷间的时间延迟';
$string['delay3'] = '延迟3';
$string['delay3afterok'] = '等待学生点击确定';
$string['delay3disable'] = '不要自动继续';
$string['delay3_help'] = '该设定规定了完成测试与将显示控制交还给Moodle之间的延迟。

**使用特定的时间（以秒为单位）**
：经过指定的秒数后，控制权将会被交还给Moodle。


**使用源/模板文件中的设置**
：经过源文件或模板文件对于该输出格式规定的秒数后，控制权将会被交还给Moodle。


**直到学生点击“好”**
：在学生点击了测试中完成消息框上的“好”按钮后，控制权将会被交还给Moodle。


**不要自动继续**
：测试结束后，控制权将会被交还给Moodle。学生可以从测试页面自由转去其它页面。

注意，无论该设置如何设定，测试结果总是在测试完成或放弃后立即返回给Moodle。';
$string['delay3specific'] = '使用特定的时间（以秒为单位）';
$string['delay3summary'] = '测试结束处的时间延迟';
$string['delay3template'] = '使用源文件或模板文件中的设置';
$string['deleteattempts'] = '删除试卷';
$string['d_index'] = '区分度指数';
$string['duration'] = '持续时间';
$string['enablecache'] = '启用HotPot缓存';
$string['enablemymoodle'] = '在我的Moodle上显示HotPots';
$string['enableswf'] = '允许HotPot活动中嵌入SWF文件';
$string['entry_attempts'] = '试卷';
$string['entrycm'] = '之前的活动';
$string['entrycmcourse'] = '本课程上次活动';
$string['entrycm_help'] = '该设置指定了一个Moodle活动与在尝试该Quizport前，必须达到的最小等级。

教师可以选择一个特定的活动，
或者下面这些通用目的设置之一：

*该课程之前的活动
*该节之前的活动
*该课程之前的HotPot
*该节之前的HotPot';
$string['entrycmsection'] = '本节的上次活动';
$string['entrycompletionwarning'] = '在开始本项活动之前，您必须查看{$a}。';
$string['entry_dates'] = '日期';
$string['exitcmcourse'] = '本课程的下次活动';
$string['exitcmsection'] = '本节的下次活动';
$string['exit_course'] = '课程';
$string['exit_course_text'] = '返回课程主页';
$string['feedbackdiscuss'] = '在论坛里讨论这个测验';
$string['feedbackformmail'] = '反馈格式';
$string['feedbackmoodleforum'] = 'Moodle讨论';
$string['feedbackmoodlemessaging'] = 'Moodle消息';
$string['feedbacknone'] = '无';
$string['feedbackwebpage'] = '网页';
$string['forceplugins'] = '强制媒体插件';
$string['giveup'] = '放弃';
$string['hints'] = '提示';
$string['hotpot:attempt'] = '尝试测验';
$string['hotpot:view'] = '使用测验';
$string['ignored'] = '忽略';
$string['inprogress'] = '处理中';
$string['modulename'] = 'Hot Potatoes测验';
$string['modulenameplural'] = 'Hot Potatoes测验';
$string['nameedit_help'] = '把具体的文字显示给学生';
$string['navigation'] = '导航';
$string['navigation_frame'] = 'Moodle 导航帧';
$string['navigation_give_up'] = '一个单一的 "放弃" 按钮';
$string['navigation_none'] = '没有';
$string['noactivity'] = '没有活动';
$string['noresponses'] = '没有关于找到此问题和回复的特定信息。';
$string['outputformat'] = '输出格式';
$string['outputformat_best'] = '最好';
$string['penalties'] = '惩罚';
$string['pluginname'] = 'Hot Potatoes测验';
$string['questionshort'] = '{$a}问题';
$string['quizname_help'] = '测验名称的帮助文本';
$string['quizzes'] = '测验';
$string['removegradeitem'] = '删除成绩项';
$string['score'] = '分数';
$string['status'] = '状态';
$string['studentfeedback'] = '学生的反馈';
$string['textsourcefilename'] = '用文件名';
$string['textsourcefilepath'] = '用文件路径';
$string['textsourcequiz'] = '从测验中获得';
$string['textsourcespecific'] = '特殊的文本';
$string['timedout'] = '超时';
$string['weighting'] = '加权';
$string['wrong'] = '错误的';
