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
 * Strings for component 'auth_email', language 'zh_cn', branch 'MOODLE_20_STABLE'
 *
 * @package   auth_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_changingemailaddress'] = '您已请求将 email 由 {$a->oldemail} 变更为 {$a->newemail}。出于安全的考虑，我们将自动向新地址发送一封邮件，来确认此信箱属于您。您只要访问邮件中的URL，email地址就会自动更新。';
$string['auth_emailchangecancel'] = '取消 email 变更';
$string['auth_emailchangepending'] = '变更进行中。访问向 {$a->preference_newemail} 发送的链接。';
$string['auth_emaildescription'] = 'Email确认是默认的身份认证方法。用户注册时可以选用自己的用户名和密码，然后有一封确认信件发送到该用户的email地址。该信件中有一个私密的链接指向用户确认帐号的页面。以后的登录就只验证在Moodle数据库中储存的用户名和密码。';
$string['auth_emailnoemail'] = '尝试发送给您一封email，但是失败了！';
$string['auth_emailnoinsert'] = '不能将您的记录信息添加到数据库中!';
$string['auth_emailnowexists'] = '你尝试输入到个人资料里的email地址已经被分配给别人了。所以您的email地址变更请求现予取消，但您可以再次尝试使用不同的地址。';
$string['auth_emailrecaptcha'] = '在Email自助注册页面中增加图像/声音验证。这将有利于保护网站免收垃圾信息发送者的干扰，同时还会对一项有意义的事业做贡献。详情请看：http://www.google.com/recaptcha/learnmore 。<em>需要 PHP cURL 扩展。</em>';
$string['auth_emailrecaptcha_key'] = '激活 reCAPTCHA 元素';
$string['auth_emailsettings'] = '设置';
$string['auth_emailupdate'] = 'Email地址更新';
$string['auth_emailupdatemessage'] = '{$a->fullname}，您好

您请求更改在{$a->site}上注册的email地址。请在浏览器中访问下面的链接来确认。

{$a->url}';
$string['auth_emailupdatesuccess'] = '用户 <em>{$a->fullname}</em> 的email地址已成功更新为 <em>{$a->email}</em>。';
$string['auth_emailupdatetitle'] = '{$a->site}的email更新确认';
$string['auth_invalidnewemailkey'] = '错误：如果您正在确认email地址的变更，那么您可能在拷贝我们用email发给您的URL时有误操作。请重新拷贝此地址，并再次尝试访问。';
$string['auth_outofnewemailupdateattempts'] = '尝试更改email地址的次数已经达到上限。您的更新请求已被取消。';
$string['pluginname'] = '基于email的自助注册';
