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
 * Strings for component 'question', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = '题库中潜在问题报告';
$string['availableq'] = '可以使用？';
$string['badbase'] = '**前的基数无效：{$a}**';
$string['broken'] = '这时一个“坏链接”，它指向一个不存在的文件。';
$string['byandon'] = '由<em>{$a->user}</em>在<em>{$a->time}</em>';
$string['cannotcopybackup'] = '无法复制备份文件';
$string['cannotcreate'] = '无法在question_attempts表中建新项';
$string['cannotcreatepath'] = '无法建立路径：{$a}';
$string['cannotdeletecate'] = '这是本场景的缺省类别，您不能删除它。';
$string['cannotenable'] = '祝能直接建立题目类型{$a}';
$string['cannotfindcate'] = '找不到类别记录';
$string['cannotfindquestionfile'] = '在zip中找不到题目数据文件';
$string['cannotgetdsfordependent'] = '一个依赖于数据集的题目找不到对应的数据集！（题目：{$a->id}，数据集：{$a->item}）';
$string['cannotgetdsforquestion'] = '一个计算类题目找不到对应的数据集！（题目：{$a}）';
$string['cannothidequestion'] = '不能隐藏题目';
$string['cannotimportformat'] = '抱歉，这种格式的导入功能还未实现！';
$string['cannotinsertquestion'] = '无法插入新题目！';
$string['cannotinsertquestioncatecontext'] = '无法插入新题目类别{$a->cat}，非法的场景{$a->ctx}';
$string['cannotloadquestion'] = '无法加载题目';
$string['cannotmovequestion'] = '此脚本不能移动与其它地方的文件有关联的题目。';
$string['cannotopenforwriting'] = '不能以写模式打开：{$a}';
$string['cannotpreview'] = '您不能预览这些题目！';
$string['cannotretrieveqcat'] = '无法获取题目类别';
$string['cannotunhidequestion'] = '取消题目隐藏失败。';
$string['cannotunzip'] = '不能解压缩zip文件。';
$string['cannotwriteto'] = '无法把导出的题目写入{$a}';
$string['categorycurrent'] = '当前类别';
$string['categorycurrentuse'] = '使用该类别';
$string['categorydoesnotexist'] = '该类别不存在';
$string['categorymoveto'] = '保存在类别中';
$string['changepublishstatuscat'] = '课程“{$a->coursename}”中<a href="{$a->caturl}">类别“{$a->name}”</a>将把共享状态从<strong>{$a->changefrom}</strong>改变为<strong>{$a->changeto}</strong>。';
$string['chooseqtypetoadd'] = '选择要添加哪种类型的题目';
$string['clicktoflag'] = '点击标记此题目';
$string['clicktounflag'] = '点击取消此题目的标记';
$string['contexterror'] = '如果您正在将一个类别移动到其它场景，您不应该来到这里。';
$string['copy'] = '从 {$a} 复制并且更改链接。';
$string['created'] = '创建';
$string['createdby'] = '创建者';
$string['createdmodifiedheader'] = '创建/最后保存';
$string['createnewquestion'] = '新建一道题...';
$string['cwrqpfs'] = '从子类别中随机选择试题。';
$string['cwrqpfsinfo'] = '<p>在升级到 1.9 版后，我们将试题类别分离到不同的情境中。一些试题类别和试题将必须改变共享状态。在测验中如果存在从共享和不共享类别中选择的一个或多个随机试题这种情况，这种情况很少发生。而常发生在子类别和一个或多个子类别中有与父类别共享状态不同时。</p>';
$string['cwrqpfsnoprob'] = '您的网站没有题目类别受到“随机题目从子类别中选择题目”问题的影响。';
$string['defaultfor'] = '默认 {$a}';
$string['defaultinfofor'] = '“{$a}”中共享题目的默认类型。';
$string['deletecoursecategorywithquestions'] = '题库中有试题与本课程类别关联，如果继续，该试题将删除。你可以先使用题库界面移走它们。';
$string['disabled'] = '停用';
$string['disterror'] = '{$a} 分布引发了故障';
$string['donothing'] = '不要复制或移动文件或更改链接。';
$string['editcategories'] = '编辑类别';
$string['editcategories_help'] = '为了不将所有题目都放在一个大列表中，可以创建类别和子类别来管理它们。

每个类别都有一个场景，决定类别中的题目可以在哪里使用：

* 活动场景 - 题目只在活动模块中可用
* 课程场景 - 题目在课程中所有活动模块中可用
* 课程分类场景 - 题目在指定课程类别中的所有课程和活动模块中可用
* 系统场景 - 题目在网站中所有的课程和活动中可用

随机题目也使用类别。它从指定的类别中随机选择题目。';
$string['editingcategory'] = '编辑类别';
$string['editingquestion'] = '编辑题目';
$string['editthiscategory'] = '编辑此类别';
$string['emptyxml'] = '未知错误 - 空的imsmanifest.xml文件';
$string['enabled'] = '启用';
$string['erroraccessingcontext'] = '无法访问场景';
$string['errordeletingquestionsfromcategory'] = '从类别{$a}中删除题目出错。';
$string['errorduringpost'] = '后处理过程中发生错误！';
$string['errorduringpre'] = '预处理过程中发生错误！';
$string['errorduringproc'] = '处理过程中发生错误！';
$string['errorduringregrade'] = '无法对题目{$a->qid}重新评分，切换到状况{$a->stateid}。';
$string['errorfilecannotbecopied'] = '错误：无法复制文件{$a}。';
$string['errorfilecannotbemoved'] = '错误：无法移动文件 {$a}。';
$string['errorfileschanged'] = '错误：链接到试题的文件在表单显示后被更改了。';
$string['errormanualgradeoutofrange'] = '试题 {$a->name} 的成绩 {$a->grade} 不在 0 和 {$a->maxgrade} 之间，得分和评价未保存。';
$string['errormovingquestions'] = '移动ID为{$a}的题目时出错。';
$string['errorpostprocess'] = '后处理过程中出错！';
$string['errorpreprocess'] = '预处理过程中出错！';
$string['errorprocess'] = '处理过程中出错！';
$string['errorprocessingresponses'] = '处理您的回答时发生错误。';
$string['errorsavingcomment'] = '向数据库保存试题 {$a->name} 的评价时出错';
$string['errorupdatingattempt'] = '更新数据库中的试卷 {$a->id} 时出错。';
$string['exportcategory'] = '导出类别';
$string['exportcategory_help'] = '此设置决定导出的题目来自哪个类别。

一些导入格式，例如 GIFT 和 Moodle XML 格式，允许将类别和场景数据包含在导出文件中，这样在导入时可以重新创建类别（可选）。如果需要此功能，请勾选对应的选择框。';
$string['exporterror'] = '导出过程发生错误！';
$string['exportfilename'] = '测验';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = '导出题目到文件';
$string['exportquestions_help'] = '此功能将一整个类别（包括所有子类别）中的所有题目导出到一个文件。请注意，某些文件格式可能不支持某些题目数据和题目类型。';
$string['filecantmovefrom'] = '题目文件不能被移动，这是因为您在源位置没有删除文件的权限。';
$string['filecantmoveto'] = '题目文件不能被移动或拷贝，这是因为您没有在目的位置新建文件的权限。';
$string['filesareacourse'] = '课程文件区';
$string['filesareasite'] = '网站文件区';
$string['filestomove'] = '移动/复制文件到 {$a}？';
$string['flagged'] = '已标记';
$string['flagthisquestion'] = '标记此题';
$string['formquestionnotinids'] = '表单包含不在questionids中的题目';
$string['fractionsnomax'] = '答案中应该有一个的分数是100%，这样这道题才可能得满分。';
$string['getcategoryfromfile'] = '从文件中获得类别';
$string['getcontextfromfile'] = '从文件中获得场景';
$string['ignorebroken'] = '忽略坏链接';
$string['importcategory'] = '导入类别';
$string['importcategory_help'] = '此设置决定导入的题目将被归入哪个类别。

一些导入格式（例如 GIFT 和 Moodle XML 格式）可能会在文件中包含分类和场景数据。如果要利用这些数据，而不是所选的类别，应该勾选相应的选择框。如果文件指定的类别不存在，将会被自动创建。';
$string['importquestions'] = '从文件导入题目';
$string['importquestions_help'] = '此功能可以从文本文件导入不同格式的题目。但请注意，文件必须是UTF-8编码。';
$string['impossiblechar'] = '寻找括号字符时遇到不应该出现的字符 {$a}';
$string['invalidarg'] = '没有有效的参数，或服务器配置不正确';
$string['invalidcategoryidforparent'] = '父类别 id 无效！';
$string['invalidcategoryidtomove'] = '要移动的类别id无效！';
$string['invalidconfirm'] = '确认字符串不正确';
$string['invalidcontextinhasanyquestions'] = '传给question_context_has_any_questions的场景无效。';
$string['invalidwizardpage'] = '有错，或未指定向导页面！';
$string['lastmodifiedby'] = '最后修改人';
$string['linkedfiledoesntexist'] = '链接文件 {$a} 不存在';
$string['makechildof'] = '“{$a}”的子文件';
$string['maketoplevelitem'] = '移动至顶层';
$string['matchgrades'] = '匹配成绩';
$string['matchgrades_help'] = '导入的成绩必须是此列表的成绩之一才有效——100、90、80、75、70、66.666、60、50、40、33.333、30、25、20、16.666、14.2857、12.5、11.111、10、5、0（也包括负值）。如果不是，那么有两个选择：

* 显示错误 - 如果一个题目使用了列表中没有的分数，那么将显示错误信息，并且该题目不会被导入
* 使用最接近的成绩 - 如果某个分数不在列表中，那么这个分数就会被改成列表中最接近的值。';
$string['missingcourseorcmid'] = 'print_question 需要 courseid 或 cmid';
$string['missingcourseorcmidtolink'] = 'get_question_edit_link 需要 courseid 或 cmid';
$string['missingimportantcode'] = '该题目类型缺少重要代码：{$a}。';
$string['missingoption'] = '完形题{$a}缺少选项';
$string['modified'] = '最后保存';
$string['move'] = '从 {$a} 移动并更改链接。';
$string['movecategory'] = '移动类别';
$string['movedquestionsandcategories'] = '将题目和题目类别从 {$a->oldplace} 移至 {$a->newplace}。';
$string['movelinksonly'] = '仅更改链接指向，不移动或删除文件';
$string['moveq'] = '移动题目';
$string['moveqtoanothercontext'] = '移动题目到另一个场景。';
$string['movingcategory'] = '移动类别';
$string['movingcategoryandfiles'] = '您确定要移动类别“{$a->name}”和所有子类别至“{$a->contextto}”吗？<br />已经检测到{$a->urlcount} 个文件与 {$a->fromareaname}中的题目相链接。您想要复制或移动它们到 {$a->toareaname} 吗？';
$string['movingcategorynofiles'] = '您确定要移动类别“{$a->name}”和所有子类别到“{$a->contextto}”吗？';
$string['movingquestions'] = '正移动题目和文件';
$string['movingquestionsandfiles'] = '您确定要移动题目“{$a->questions}”到<strong>“{$a->tocontext}”</strong>场景吗？<br />已经检测到 <strong>{$a->urlcount}个文件</strong>与{$a->fromareaname}中的题目链接。您确定要复制或移动它们到{$a->toareaname}吗？';
$string['movingquestionsnofiles'] = '您确定要移动题目“{$a->questions}”到<strong>“{$a->tocontext}”</strong>吗？<br />在“{$a->fromareaname}”中<strong>没有任何文件</strong>链接到这些题目。';
$string['needtochoosecat'] = '您需要选择一个将此题移入的类别，或者点“取消”。';
$string['nocate'] = '没有类别{$a}！';
$string['nopermissionadd'] = '您无权在此添加题目。';
$string['nopermissionmove'] = '您无权将题目从此处移走。您只能把该题保存在这个类别中，或者将其存为一个新题。';
$string['noprobs'] = '在题目数据库中未发现问题。';
$string['notenoughdatatoeditaquestion'] = '试题 id、类别 id 和试题类型都没指定。';
$string['notenoughdatatomovequestions'] = '您需要提供要移动题目的 ID。';
$string['notflagged'] = '未标记';
$string['novirtualquestiontype'] = '题目类型{$a}没有虚拟题目类型';
$string['parentcategory'] = '父类别';
$string['parentcategory_help'] = '新建类别会被放置在父类别中。“顶级”意味着该类别不属于任何其它类别。类别场景以粗体显示。每个场景中至少要有一个类别。';
$string['parenthesisinproperclose'] = '在 {$a}** 中，** 之前的括号没有正确结束';
$string['parenthesisinproperstart'] = '在 {$a}** 中，** 之前的括号没有正确开始';
$string['penaltyfactor'] = '惩罚因子';
$string['penaltyfactor_help'] = '此设置决定每次错误的解答将从最终分数里扣除多少分。这只对允许学生多次做答的适应模式下的测验有效。

罚分因子应该是0到1之间的数字。罚分因子设为1意味着学生必须一次解答正确才能得到分数。罚分因子设为0表示学生可以尝试任意次，仍有机会得到满分。';
$string['permissionedit'] = '编辑题目';
$string['permissionmove'] = '移动题目';
$string['permissionsaveasnew'] = '另存为新题目';
$string['permissionto'] = '您有权限做：';
$string['published'] = '共享';
$string['qtypeveryshort'] = '型';
$string['questionaffected'] = '<a href="{$a->qurl}">题目“{$a->name}” ({$a->qtype})</a>在此题目类别中，但是正被另一课程“{$a->coursename}”的<a href="{$a->qurl}">测验“{$a->quizname}”</a>使用。';
$string['questionbank'] = '题库';
$string['questioncategory'] = '题目类别';
$string['questioncatsfor'] = '“{$a}”的题目类别';
$string['questiondoesnotexist'] = '该题目不存在';
$string['questionname'] = '题目名称';
$string['questionsaveerror'] = '保存题目时出错 - （{$a}）';
$string['questionsmovedto'] = '移动到“{$a}”的题目仍在父课程类别中被使用。';
$string['questionsrescuedfrom'] = '场景{$a}的题目已保存。';
$string['questionsrescuedfrominfo'] = '即便删除场景{$a}，这些题目（有些可能被隐藏）仍将被保存。因为仍有一些测验或其它活动使用它们。';
$string['questiontype'] = '题目类型';
$string['questionuse'] = '在该活动中使用题目';
$string['saveflags'] = '保存这些标记的状态';
$string['selectacategory'] = '选择一个类别：';
$string['selectaqtypefordescription'] = '选择一个题目类型来查看详细描述。';
$string['selectquestionsforbulk'] = '选择批量操作的题目';
$string['shareincontext'] = '共享在场景中 for {$a}';
$string['stoponerror'] = '遇错中止';
$string['stoponerror_help'] = '此设置决定发生错误时，是停止导入（这将导致没有题目被导入），还是忽略所有有错的题，导入所有有效的题。';
$string['tofilecategory'] = '把类别写入文件';
$string['tofilecontext'] = '把场景写入文件';
$string['unknown'] = '未知';
$string['unknownquestiontype'] = '未知题目类型：{$a}。';
$string['unknowntolerance'] = '未知容错类型 {$a}';
$string['unpublished'] = '不共享';
$string['upgradeproblemcategoryloop'] = '在升级题目类别时遇到问题。题目类别树中存在循环引用，受影响的类别ID有 {$a}。';
$string['upgradeproblemcouldnotupdatecategory'] = '无法升级题目类别 {$a->name} ({$a->id})';
$string['upgradeproblemunknowncategory'] = '在升级题目类别时遇到问题。类别 {$a->id} 有父类别 {$a->parent}，但该类别已经不存在了。已通过修改父类别纠正了错误。';
$string['wrongprefix'] = '错误格式化的名前缀 {$a}';
$string['youmustselectaqtype'] = '您必须选择一个题目类型。';
$string['yourfileshoulddownload'] = '您的导出文件将很快开始下载。如果下载没有开始，请<a href="{$a}">点击这里</a>.';
